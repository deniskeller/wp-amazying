import '../styles/core.scss';
import '../styles/main.scss';

console.log('DOMContentLoaded');

const menuBtn = document.querySelector('.menu-btn');
if (menuBtn) {
  menuBtn.addEventListener('click', function (e) {
    e.preventDefault();
    console.log('open mobile menu');
  });
}
