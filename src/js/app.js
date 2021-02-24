import axios from 'axios';
import barba from '@barba/core';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { Timeline } from "gsap/gsap-core";
import { menu, reveal, parallax, videoPlay, cursor } from './animations';
import facturation from './facturation/facturation';

gsap.registerPlugin(ScrollTrigger);
gsap.defaults({
	ease: "power3.inOut",
	duration: 1
});

// AnimationInit
const animationInit = () => {
	parallax();
	reveal();
	videoPlay();
	menu();
	cursor();
}

const bodyFacturation = document.querySelector('#page-facturation');

// Check si on est sur la page facturation
if (!bodyFacturation) {

	barba.init({
		prevent: ({ el }) => el.classList && el.classList.contains('no-barba'),
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
				animationInit();
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

	barba.hooks.after(() => {
		ga('set', 'page', window.location.pathname);
		ga('send', 'pageview');
	});

	animationInit();

	// Exclude Barba on Admin Bar links 
	const adminLinks = document.querySelectorAll('#wpadminbar a');
	adminLinks.forEach(link => {
		link.classList.add('no-barba');
	})

} else {
	facturation();
}
