const dropdownMenu = function () {
    const btnMobile = document.querySelector('.dropdown__toggle--icon');
    const dropdownList = document.querySelector('.navbar-nav');
 
    btnMobile.addEventListener('click', function () {
      dropdownList.classList.toggle('fadeInDropdown');
    }, false);
    
};

export default dropdownMenu;
