import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

const parallax = () => {

    // Parallax background effect
    const parallaxContainers = document.querySelectorAll('.parallax-container');
    if (parallaxContainers && window.innerWidth > 1024) {
        parallaxContainers.forEach(container => {
            let img = container.querySelector('.parallax-img');

            gsap.fromTo(img, {
                yPercent: -15,
                scale: 1.15,
            }, {
                yPercent: 15,
                scale: 1.15,
                ease: "none",
                scrollTrigger: {
                    trigger: container,
                    scrub: true,
                }
            });

        });
    }

    // Footer parallax
    const contactLink = document.querySelector('.footer-contact__link');
    const pageContainer = document.querySelector('.page-container');
    const triggerFooter = document.querySelector('.trigger-footer');
    if (window.innerWidth > 1024) {
        gsap.from(contactLink, {
            y: "40vh",
            ease: "none",
            scrollTrigger: {
                id: "footerID",
                trigger: triggerFooter,
                start: "bottom bottom",
                end: "bottom top",
                scrub: true,
            }
        });
    }

}

export default parallax;