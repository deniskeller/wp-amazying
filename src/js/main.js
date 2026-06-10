import 'virtual:svg-icons-register';
import '/src/assets/scss/core.scss';
import '/src/assets/scss/main.scss';

console.log('DOMContentLoaded');

const menuBtn = document.querySelector('.menu-btn');
if (menuBtn) {
  menuBtn.addEventListener('click', function (e) {
    e.preventDefault();
    console.log('open mobile menu');
  });
}
