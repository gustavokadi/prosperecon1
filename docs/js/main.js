// BLOQUEIA CLIQUE DIREITO E ARRASTAR IMAGEM
document.addEventListener('contextmenu', e => e.preventDefault());
document.addEventListener('dragstart', e => e.preventDefault());

// HAMBURGER MENU
const hamburger = document.getElementById('hamburger');
const nav = document.getElementById('nav');

hamburger.addEventListener('click', () => {
  nav.classList.toggle('nav--open');
  const spans = hamburger.querySelectorAll('span');
  const isOpen = nav.classList.contains('nav--open');
  spans[0].style.transform = isOpen ? 'rotate(45deg) translate(5px, 5px)' : '';
  spans[1].style.opacity = isOpen ? '0' : '';
  spans[2].style.transform = isOpen ? 'rotate(-45deg) translate(5px, -5px)' : '';
});

document.querySelectorAll('.nav__link').forEach(link => {
  link.addEventListener('click', () => nav.classList.remove('nav--open'));
});

// STICKY HEADER shadow
const header = document.getElementById('header');
window.addEventListener('scroll', () => {
  header.style.boxShadow = window.scrollY > 10
    ? '0 2px 20px rgba(0,0,0,.08)'
    : 'none';
});

// SMOOTH SCROLL
document.querySelectorAll('a[href^="#"]').forEach(link => {
  link.addEventListener('click', e => {
    const target = document.querySelector(link.getAttribute('href'));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });
});

// REVEAL ON SCROLL (entrada em cascata)
const revealGroups = new Map();
document.querySelectorAll('.sobre__values, .steps').forEach(container => {
  revealGroups.set(container, Array.from(container.querySelectorAll('.reveal')));
});

const revealObserver = new IntersectionObserver((entries, obs) => {
  entries.forEach(entry => {
    if (!entry.isIntersecting) return;
    const items = revealGroups.get(entry.target) || [entry.target];
    items.forEach((item, i) => {
      setTimeout(() => item.classList.add('is-visible'), i * 180);
    });
    obs.unobserve(entry.target);
  });
}, { threshold: 0.25 });

revealGroups.forEach((items, container) => revealObserver.observe(container));
