import { gsap } from "gsap";

const menu = () => {

    // MENU DEPLOYEMENT
    let menuActive = false;
    const menuHeader = document.querySelector('.site-header');
    const navBurger = document.querySelector('.nav-burger');
    const menuContainer = document.querySelector('.menu-container');

    if (navBurger) {
        navBurger.addEventListener('click', function () {
            if (!menuActive) {
                menuActive = true;
                menuHeader.classList.add('active');
                gsap.to(menuContainer, { x: 0 });
                gsap.fromTo(".menu-item", {
                    x: 200,
                    opacity: 0
                }, {
                    x: 0,
                    opacity: 1,
                    ease: "power3.out",
                    stagger: 0.1,
                    delay: 0.6,
                    duration: 0.8,
                });
            } else {
                menuActive = false;
                menuHeader.classList.remove('active');
                gsap.to(menuContainer, { x: '100%' });
            }
        });
    }


    // HIDING/REVEAL MENU ON SCROLL
    const siteHeader = document.querySelector('.site-header');
    let lastScrollPosition = 0;

    window.addEventListener('scroll', function () {
        if (window.scrollY > 100 && window.scrollY > lastScrollPosition) {
            siteHeader.classList.add('hide');
            lastScrollPosition = window.scrollY;
        } else {
            siteHeader.classList.remove('hide');
            lastScrollPosition = window.scrollY;
        }
    })

}

export default menu;