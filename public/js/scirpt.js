const hamburgerIcon = document.getElementById('hamburger-icon');
const menuList = document.getElementById('menu-list');
hamburgerIcon.addEventListener('click', function () {
  menuList.classList.toggle('hidden');
})
