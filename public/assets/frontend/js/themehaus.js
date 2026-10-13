const toggle = document.querySelector('.menu-toggle');
const navigation = document.querySelector('#mobile-navigation');
const siteHeader = document.querySelector('.site-header');

toggle?.addEventListener('click', () => {
  const open = toggle.getAttribute('aria-expanded') !== 'true';
  toggle.setAttribute('aria-expanded', String(open));
  navigation?.classList.toggle('is-open', open);
});

document.querySelectorAll('[data-demo-form]').forEach((form) => {
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const status = form.querySelector('[role="status"]');
    if (status) {
      status.textContent =
        'Demonstration only. No email or file has been sent. Add a Laravel controller and storage handling to enable submissions.';
    }
  });
});

const updateHeaderState = () => {
  if (!siteHeader) return;
  siteHeader.classList.toggle('is-scrolled', window.scrollY > 8);
};

updateHeaderState();
window.addEventListener('scroll', updateHeaderState, { passive: true });

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

const revealSelector = [
  '.announcement',
  '.section-heading',
  '.theme-card',
  '.statement-inner',
  '.cta',
  '.page-intro',
  '.about-split > *',
  '.values-grid article',
  '.collection-heading',
  '.category-tabs',
  '.filter-row',
  '.empty-state',
  '.detail-grid > *',
  '.detail-description',
  '.contact-intro',
  '.contact-prompt',
  '.contact-form-wrap',
].join(', ');

const targets = [...new Set(document.querySelectorAll(revealSelector))];

targets.forEach((el, index) => {
  el.classList.add('reveal');
  if (el.classList.contains('theme-card')) {
    el.style.setProperty('--reveal-delay', String(index % 8));
  }
});

if (prefersReducedMotion) {
  targets.forEach((el) => el.classList.add('is-visible'));
} else if ('IntersectionObserver' in window) {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      });
    },
    { threshold: 0.12, rootMargin: '0px 0px -8% 0px' }
  );

  targets.forEach((el) => observer.observe(el));
} else {
  targets.forEach((el) => el.classList.add('is-visible'));
}
