import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { Timeline } from "gsap/gsap-core";

const reveal = () => {
    // Home projet
    const imgMask = document.querySelector('.home-projets__reveal-mask');
    if (imgMask) {
        gsap.to(imgMask, {
            x: "100%",
            scrollTrigger: {
                trigger: imgMask,
                start: "top bottom",
                toggleActions: "play none none reset"
            }
        })
    }
    // Studio BenTom
    const benTom = document.querySelector('.studio-presentation__img');
    if (benTom) {
        gsap.from(benTom, {
            opacity: 0,
            ease: "linear",
            duration: 0.7,
            scrollTrigger: {
                trigger: benTom,
                start: "top 50%",
                end: "center top",
                toggleActions: "play none none reverse",
            }
        })
    }

    // REVEAL ELEMENTS
    const revealElements = document.querySelectorAll('.reveal');
    const revealGroups = document.querySelectorAll('.reveal-group');
    const revealOpacity = document.querySelectorAll('.reveal-opacity');
    const revealBlocs = document.querySelectorAll('.reveal-bloc');
    // Simple reveal translate+opacity
    if (revealElements) {
        revealElements.forEach(element => {
            gsap.from(element, {
                y: `${innerHeight / 20}`,
                opacity: 0,
                duration: 0.7,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: element,
                    start: "top 85%",
                }
            })
        })
    }
    // Reveal opacity
    if (revealOpacity) {
        revealOpacity.forEach(element => {
            gsap.from(element, {
                opacity: 0,
                ease: "none",
                duration: 0.5,
                scrollTrigger: {
                    trigger: element,
                    start: "top 85%",
                }
            })
        })
    }
    // Reveal grouped elements
    if (revealGroups) {
        revealGroups.forEach(element => {
            const revealElements = element.querySelectorAll('.reveal-item');
            gsap.from(revealElements, {
                y: `${innerHeight / 20}`,
                opacity: 0,
                ease: "power3.out",
                duration: 0.7,
                stagger: 0.1,
                scrollTrigger: {
                    trigger: element,
                    start: "top 85%",
                }
            })
        })
    }
    // Reveal bloc text
    if (revealBlocs) {
        revealBlocs.forEach(bloc => {
            const bloc1 = bloc.querySelector('.reveal-bloc-1');
            const bloc2 = bloc.querySelector('.reveal-bloc-2');
            let tl = gsap.timeline({
                scrollTrigger: {
                    trigger: bloc,
                    start: "top 85%"
                }
            });
            tl.to(bloc1, {
                scaleX: 0
            })
            tl.to(bloc2, {
                scaleX: 0,
                transformOrigin: "center right"
            }, "-=0.5")
            tl.from('.reveal-hero', {
                opacity: 0,
                duration: 0.25,
                ease: "linear"
            }, "-=0.5")
        })
    }
}

export default reveal;