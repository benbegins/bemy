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
	//reveal();
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

			once() {
				var intro = new Timeline();
				intro.to('.intro__reveal', {
					xPercent: 100,
					onComplete: reveal,
				})
				intro.to('.intro', {
					xPercent: 101,
				})
				intro.to('.intro__logo', {
					xPercent: -126,
				}, "-=1")
				intro.from('.site-header', {
					top: '-80px',
					opacity: 0,
					duration: 0.75,
					ease: 'power3.out',
				})
			},

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
				gsap.to('.swipe', {
					x: "0%",
					stagger: 0.1,
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
				reveal();
				var swipeTl = new Timeline();
				swipeTl.to('.swipe', {
					x: "100%",
					stagger: -0.1,
				})
				swipeTl.from('.site-header', {
					top: '-80px',
					opacity: 0,
					duration: 0.75,
					ease: 'power3.out',
				})
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
