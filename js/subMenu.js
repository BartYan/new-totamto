const parents = document.querySelectorAll('.menu-item-has-children');
let open = false;

parents.forEach((item) => {
  const submenu = item.querySelector('.sub-menu');

  item.addEventListener('click', (event) => {
    if (!open && window.innerWidth < 1025) {
      event.preventDefault();
      submenu.classList.add('sub-menu-open');
      open = true;
    } else {
      submenu.classList.remove('sub-menu-open');
      open = false;
    }
  });
});
