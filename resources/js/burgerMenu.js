import gsap from "gsap";

export default function burgerMenuInit() {

  const header = document.querySelector('#header');
  const menu = document.querySelector('#menu');
  const btn = document.querySelector('#menu-btn');

  if (!menu || !btn ) return;

  const mm = gsap.matchMedia();

  mm.add('(max-width: 767px)', () => {
    const tl = gsap.timeline();

    const clickHandler = () => {
      let isReversing = !tl.reversed();

      if (isReversing) {
        header.classList.remove('active-menu');
        btn.classList.remove('active-menu-btn');
      } else {
        header.classList.add('active-menu');
        btn.classList.add('active-menu-btn');
      }

      tl.reversed(isReversing);
    };

    tl.set('html', {
      overflow: 'hidden',
    })

    tl.fromTo(menu, {
      y: 12
    }, {
      y: 0,
      visibility: 'visible',
      opacity: 1,
      duration: 0.4,
    }, 0)

    tl.reverse();

    btn.addEventListener('click', clickHandler);

    return () => {
      btn.removeEventListener('click', clickHandler);
      header.classList.remove('active-menu');
      btn.classList.remove('active-menu-btn');
    };
  });

  mm.add('(min-width: 768px) and (max-width: 1199px)', () => {
    const tl = gsap.timeline();

    const clickHandler = () => {
      let isReversing = !tl.reversed();

      if (isReversing) {
        btn.classList.remove('active-menu-btn');
      } else {
        btn.classList.add('active-menu-btn');
      }

      tl.reversed(isReversing);
    };

    tl.fromTo(menu, {
      y: 12
    }, {
      y: 0,
      visibility: 'visible',
      opacity: 1,
      duration: 0.3,
      delay: 0
    })

    tl.reverse();

    btn.addEventListener('click', clickHandler);

    return () => {
      btn.removeEventListener('click', clickHandler);
      btn.classList.remove('active-menu-btn');
    };
  });
}