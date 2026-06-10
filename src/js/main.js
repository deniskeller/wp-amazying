import 'virtual:svg-icons-register';
import '../assets/scss/core.scss';
import '../assets/scss/main.scss';

console.log('DOMContentLoaded');

const menuBtn = document.querySelector('.menu-btn');
if (menuBtn) {
  menuBtn.addEventListener('click', function (e) {
    e.preventDefault();
    console.log('open mobile menu');
  });
}

const burgerToggle = document.getElementById('burgerToggle');
const headerMenu = document.getElementById('headerMenu');
const body = document.body;

burgerToggle.addEventListener('click', () => {
  // Переключаем классы анимации бургера и видимости меню
  burgerToggle.classList.toggle('active');
  headerMenu.classList.toggle('active');

  // Блокируем скролл основного контента сайта при открытом меню
  body.classList.toggle('no-scroll');
});

// Закрытие меню при клике на ссылку (актуально для одностраничников)
const menuLinks = document.querySelectorAll('.header__link');
menuLinks.forEach((link) => {
  link.addEventListener('click', () => {
    if (headerMenu.classList.contains('active')) {
      burgerToggle.classList.remove('active');
      headerMenu.classList.remove('active');
      body.classList.remove('no-scroll');
    }
  });
});
