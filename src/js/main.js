// import fslightbox
require('fslightbox');

// import Glide.js
//import Glide from '@glidejs/glide';

// new instance of glide object
/*
var glide = new Glide('#options-autoplay', {
    type: 'carousel',
    autoplay: 3500,
    focusAt: 'center',
    hoverpause: false,
    perView: 1
})
glide.mount()*/

// some bootstrap scripts needs popper
import '@popperjs/core';

// Import just what we need
// import 'bootstrap/js/dist/alert';
import 'bootstrap/js/dist/button';
// import 'bootstrap/js/dist/carousel';
import 'bootstrap/js/dist/collapse';
// import 'bootstrap/js/dist/dropdown';
// import 'bootstrap/js/dist/modal';
// import 'bootstrap/js/dist/popover';
// import 'bootstrap/js/dist/scrollspy';
// import 'bootstrap/js/dist/tab';
// import 'bootstrap/js/dist/toast';
// import 'bootstrap/js/dist/tooltip';

// custom IP modules
//import cookies from './modules/cookies';
import scrollTop from './modules/scrollTop';
import menuToggle from './modules/menuToggle';
import dropdownMenu from './modules/dropdownMenu';
import clampBuilder from './modules/clampBuilder';

clampBuilder();
// cookies notification handler
//cookies();

// menu handler
menuToggle();

//dropdown toggler icon rwd - fade in dropdown list
dropdownMenu();

// scroll to top button handler
scrollTop();

const main = document.querySelector("main");

if (main.classList.contains("contact")) {
    const form = document.getElementById("form");
    if (form) {
        const btnSubmit = document.querySelector('#submit-contact');

        btnSubmit.addEventListener('click', (e) => {
            e.preventDefault();
        })

    }
}
