document.addEventListener('DOMContentLoaded', function () {
  console.log('DOM полностью загружен, JS в WordPress работает!');

  const menuBtn = document.querySelector('.menu-btn');

  if (menuBtn) {
    menuBtn.addEventListener('click', function (e) {
      e.preventDefault();
      console.log('open mobile menu');
    });
  }
});
