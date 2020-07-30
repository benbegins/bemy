import Vue from "vue";
import { gsap } from "gsap";

gsap.defaults({
	ease: "power3.inOut",
	duration: 1
});

window.axios = require("axios");

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

let vueStudio = new Vue({
	el: "#studio",
	data: {
		services: [
			{
				id: 1,
				title: "Web",
				competences: [
					"UX/UI",
					"Site vitrine",
					"Site e-commerce",
					"Application web"
				]
			},
			{
				id: 2,
				title: "Content",
				competences: ["Motion", "Photo", "3D", "Illustration"]
			},
			{
				id: 3,
				title: "Branding",
				competences: [
					"Logo",
					"Identité visuelle",
					"Papeterie",
					"Kit réseaux sociaux"
				]
			}
		],
	}
})
