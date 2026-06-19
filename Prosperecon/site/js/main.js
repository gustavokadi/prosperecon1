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
  link.addEventListener('click', () => {
    nav.classList.remove('nav--open');
  });
});

// STICKY HEADER
const header = document.getElementById('header');
window.addEventListener('scroll', () => {
  header.style.boxShadow = window.scrollY > 10
    ? '0 2px 24px rgba(0,0,0,.4)'
    : '0 2px 16px rgba(0,0,0,.25)';
});

// COTAS CAROUSEL
const carousel = document.getElementById('cotasCarousel');
const prevBtn = document.getElementById('carouselPrev');
const nextBtn = document.getElementById('carouselNext');
const cardWidth = () => {
  const card = carousel.querySelector('.cota-card');
  if (!card) return 0;
  return card.offsetWidth + 20;
};

prevBtn.addEventListener('click', () => {
  carousel.scrollBy({ left: -cardWidth() * 2, behavior: 'smooth' });
});
nextBtn.addEventListener('click', () => {
  carousel.scrollBy({ left: cardWidth() * 2, behavior: 'smooth' });
});

// COTAS FILTER
document.querySelectorAll('.filter-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const filter = btn.dataset.filter;
    document.querySelectorAll('.cota-card').forEach(card => {
      const show = filter === 'all' || card.dataset.type === filter;
      card.style.display = show ? '' : 'none';
    });
    carousel.scrollTo({ left: 0, behavior: 'smooth' });
  });
});

// HERO OPP TABS
document.querySelectorAll('.opp-tab').forEach(tab => {
  tab.addEventListener('click', () => {
    document.querySelectorAll('.opp-tab').forEach(t => t.classList.remove('active'));
    tab.classList.add('active');
  });
});

// DEPOIMENTOS CAROUSEL
let currentDep = 0;
const deps = document.querySelectorAll('.depoimento');
const dots = document.querySelectorAll('.dep-dot');

function showDep(idx) {
  deps.forEach(d => d.classList.remove('active'));
  dots.forEach(d => d.classList.remove('active'));
  deps[idx].classList.add('active');
  dots[idx].classList.add('active');
  currentDep = idx;
}

dots.forEach(dot => {
  dot.addEventListener('click', () => showDep(parseInt(dot.dataset.idx)));
});

setInterval(() => showDep((currentDep + 1) % deps.length), 5000);

// LEAD FORM — redirect to WhatsApp
document.getElementById('leadForm').addEventListener('submit', function (e) {
  e.preventDefault();
  const nome = this.nome.value.trim();
  const whatsapp = this.whatsapp.value.trim();
  const interesse = this.interesse.value;
  const labels = {
    'cota-contemplada': 'Comprar Cota Contemplada',
    'consorcio-novo': 'Consórcio Não Contemplado',
    'vender': 'Vender meu Consórcio',
    'investir': 'Consórcio para Investir',
  };
  const msg = `Olá! Sou ${nome}, meu WhatsApp é ${whatsapp} e tenho interesse em: ${labels[interesse] || interesse}.`;
  window.open(`https://wa.me/5511940466739?text=${encodeURIComponent(msg)}`, '_blank');
});

// PHONE MASK
const phoneInput = document.getElementById('phoneInput');
if (phoneInput) {
  phoneInput.addEventListener('input', function () {
    let v = this.value.replace(/\D/g, '').slice(0, 11);
    if (v.length > 6) v = `(${v.slice(0,2)}) ${v.slice(2,7)}-${v.slice(7)}`;
    else if (v.length > 2) v = `(${v.slice(0,2)}) ${v.slice(2)}`;
    else if (v.length > 0) v = `(${v}`;
    this.value = v;
  });
}

// SMOOTH SCROLL for anchor links
document.querySelectorAll('a[href^="#"]').forEach(link => {
  link.addEventListener('click', e => {
    const target = document.querySelector(link.getAttribute('href'));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });
});
