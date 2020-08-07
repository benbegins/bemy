import Vue from "vue";
import barba from '@barba/core';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { Timeline } from "gsap/gsap-core";


gsap.registerPlugin(ScrollTrigger);
gsap.defaults({
	ease: "power3.inOut",
	duration: 1
});


// Parallax background effect
const imgParallax = () => {
	const parallaxContainers = document.querySelectorAll('.parallax-container');
	if (parallaxContainers && window.innerWidth > 1024) {
		parallaxContainers.forEach(container => {
			let img = container.querySelector('.parallax-img');
			gsap.to(img, {
				backgroundPositionY: `${-innerHeight / 2}px`,
				ease: "none",
				scrollTrigger: {
					trigger: container,
					scrub: true,
				}
			})
		});
	}
}

// Footer parallax
const footerParallax = () => {
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

// Reveal 
const revealElements = () => {
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
			tl
				.from(bloc2, {
					scaleX: 0
				})
				.to(bloc1, {
					scaleX: 0
				}, "-=1")
				.to(bloc2, {
					scaleX: 0,
					transformOrigin: "center right"
				})
				.from('.reveal-hero', {
					opacity: 0,
					y: 50,
					ease: "power3.out"
				}, "-=0.7")
		})
	}
}

// Home
const animHome = () => {
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
}

// Page Studio
const animStudio = () => {
	const benTom = document.querySelector('.studio-presentation__img');
	if (benTom) {
		gsap.from(benTom, {
			//y: "15%",
			opacity: 0,
			ease: "linear",
			duration: 0.7,
			scrollTrigger: {
				trigger: benTom,
				start: "top 50%",
				end: "center top",
				toggleActions: "play none none reverse",
				//scrub: true
			}
		})
	}
}

// Page projet
const animProjet = () => {
	const videos = document.querySelectorAll('.video-projet');
	if (videos) {
		videos.forEach(video => {
			video.play();
		})
	}
}


// Animation
const animation = () => {
	imgParallax();
	footerParallax();
	revealElements();
	animHome();
	animStudio();
	animProjet();
}
animation();

// Menu
let vueHeader = new Vue({
	el: "#header",
	data: {
		menuActive: false
	},
	methods: {
		toggleMenu: function () {
			const body = document.querySelector("body");
			this.menuActive = !this.menuActive;

			if (this.menuActive) {
				body.style.overflow = "hidden";
			} else {
				body.style.overflow = "auto";
			}
		},

		clickLogo: function () {
			if (this.menuActive) {
				this.toggleMenu();
			}
		},

		menuBeforeEnter: function (el) {
			el.style.transform = "translateX(100%)";
			gsap.to(".menu-item", {
				x: 200,
				opacity: 0,
				duration: 0
			});
		},

		menuEnter: function (el, done) {
			gsap.to(el, { x: 0 });
			gsap.to(".menu-item", {
				x: 0,
				opacity: 1,
				ease: "power3.out",
				stagger: 0.1,
				delay: 0.6,
				duration: 0.8,
				onComplete: done
			});
		},

		menuLeave: function (el, done) {
			gsap.to(el, { x: "100%", onComplete: done });
		},

		menuAfterLeave: function (el) {
			gsap.to(".menu-item", {
				x: 200,
				opacity: 0,
				duration: 0
			});
		}
	}
});



barba.init({
	transitions: [{
		name: 'default-transition',
		beforeLeave() {
			gsap.to(".swipe", {
				x: "-100%",
				duration: 0
			});
		},
		leave() {
			let done = this.async();
			let body = document.querySelector('body');
			body.style.overflow = "hidden";
			gsap.to('.loading-icon', {
				opacity: 0.7,
				ease: "none",
				delay: 0.7
			});
			gsap.to('.swipe', {
				x: "0%",
				stagger: 0.1,
				duration: 1,
				ease: "power3.inOut",
				onComplete: done
			});
		},
		enter() {
			window.scrollTo(0, 0);
			let body = document.querySelector('body');
			body.style.overflow = "auto";
		},
		after() {
			animation();
			gsap.to('.loading-icon', {
				opacity: 0,
				ease: "none"
			});
			gsap.to('.swipe', {
				x: "100%",
				stagger: -0.1,
				duration: 1,
			});
		}
	}]
});