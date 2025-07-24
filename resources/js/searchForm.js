import gsap from "gsap";

export default function searchForm() {

  const openBtn = document.querySelector('#search-btn');
  const popup = document.querySelector('#search-popup');
  const input = document.querySelector('#search-form');
  const searchResults = document.querySelector('#search-results');

  if (!input || !searchResults || !openBtn || !popup) return;

  const mm = gsap.matchMedia();

  // Open search
  openBtn.addEventListener('click', () => {
    gsap.to(popup, {
      autoAlpha: 1,
      duration: 0.3,
      onComplete: () => {
        input.focus();
      }
    });

    mm.add("(min-width: 500px)", () => {
      gsap.fromTo(popup.querySelector('div'), {
        y: 20
      }, {
        y: 0,
        duration: 0.3
      });
    });
  });

  // Close search
  popup.addEventListener('click', (e) => {
    if (e.target === popup) {
      gsap.to(popup, {
        autoAlpha: 0,
        duration: 0.3,
        onComplete: () => {
          input.value = '';
          searchResults.innerHTML = '';
        }
      });
    }
  });

  let controller = null;

  input.addEventListener('input', debounce(async (e) => {
    const value = e.target.value.trim();

    if (!value) {
      searchResults.innerHTML = '';
      return;
    }

    const query = encodeURIComponent(value);

    // Отменяем предыдущий запрос
    if (controller) controller.abort();
    controller = new AbortController();
    try {
      const response = await fetch(`/wp-json/wp/v2/posts?search=${query}`, {
        signal: controller.signal,
      });

      if (!response.ok) throw new Error('Network error');

      const results = await response.json();
      
      searchResults.innerHTML = results.length
        ? generateHTML(results)
        : '<p class="px-5 py-4 text-center text-neutral-400">No results</p>';

    } catch (error) {
      if (error.name !== 'AbortError') {
        console.error('Search fetch error:', error);
      }
    }
  }, 10));

  function generateHTML(results) {
    return results.map(item => `
      <a href="${item.link}" class="flex flex-col gap-0.5 hover:bg-neutral-100 px-5 py-4 transition-colors">
        <span>${item.title.rendered}</span>
        <span class="text-neutral-400 text-sm">/templates/${item.slug}</span>
      </a>
    `).join('');
  }

  function debounce(fn, delay) {
    let timeout;
    return (...args) => {
      clearTimeout(timeout);
      timeout = setTimeout(() => fn(...args), delay);
    };
  }
}