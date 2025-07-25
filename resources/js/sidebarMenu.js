import gsap from "gsap";

export default function sidebarMenuInit() {

  const sidebar = document.querySelector('#sidebar');
  const btn = document.querySelector('#sidebar-btn');
  const links = document.querySelectorAll('#sidebar a > span');

  if (!sidebar || !btn) return;

  const tl = gsap.timeline({ paused: true });
  const mm = gsap.matchMedia();

  // Open sidebar
  tl.to('body', {
    overflow: 'hidden',
  })

  tl.to(sidebar, {
    width: '240px',
    duration: 0.3,
    ease: "none",
  })

  tl.to(links, {
    autoAlpha: 1,
    duration: 0.3,
    ease: "none",
    delay: 0.8
  }, '-=1')

  tl.reverse();

  btn.addEventListener('click', () => {
    const isReversed = tl.reversed();
    tl.reversed(!isReversed);
  });
}