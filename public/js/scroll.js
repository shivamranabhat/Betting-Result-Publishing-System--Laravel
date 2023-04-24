const button = document.querySelector('.scroll-btn');
button.addEventListener('click', () => {
  window.scrollTo({top: 0, behavior: 'smooth'});
});

