const toggle = document.querySelector('.menu-toggle');
const navigation = document.querySelector('#mobile-navigation');

toggle?.addEventListener('click', () => {
  const open = toggle.getAttribute('aria-expanded') !== 'true';
  toggle.setAttribute('aria-expanded', String(open));
  navigation?.classList.toggle('is-open', open);
});

document.querySelectorAll('[data-demo-form]').forEach((form) => {
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const status = form.querySelector('[role="status"]');
    if (status) status.textContent = 'Demonstration only. No email or file has been sent. Add a Laravel controller and storage handling to enable submissions.';
  });
});
