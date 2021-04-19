import axios from "axios"
import barba from "@barba/core"
import { gsap } from "gsap"
import { ScrollTrigger } from "gsap/ScrollTrigger"
import { Timeline } from "gsap/gsap-core"
import {
	menu,
	reveal,
	parallax,
	videoPlay,
	cursor,
	textReveal,
} from "./components"
import facturation from "./facturation/facturation"
import LocomotiveScroll from "locomotive-scroll"

gsap.registerPlugin(ScrollTrigger)
gsap.defaults({
	ease: "power3.inOut",
	duration: 1,
})

const locomotiveScroll = new LocomotiveScroll({
	el: document.querySelector("[data-scroll-container]"),
	smooth: true,
})

// AnimationInit
const animationInit = () => {
	textReveal()
	//parallax()
	// reveal()
	videoPlay()
	menu()
	cursor()
}

// animationInit()

const bodyFacturation = document.querySelector("#page-facturation")

// Check si on est sur la page facturation
if (!bodyFacturation) {
	barba.init({
		prevent: ({ el }) => el.classList && el.classList.contains("no-barba"),
		transitions: [
			{
				name: "default-transition",

				once() {
					var intro = new Timeline()
					intro.to(".intro__reveal", {
						xPercent: 100,
						duration: 1.6,
					})
					intro.from(
						".intro__logo",
						{
							scale: 0.85,
							duration: 1.5,
							ease: "power3.out",
						},
						"-=1.5"
					)
					intro.to(".intro__logo-container", {
						opacity: 0,
						duration: 1,
						delay: 0.5,
						onComplete: animationInit,
					})
					intro.to(
						".swipe",
						{
							x: "100%",
							stagger: -0.1,
							ease: "power3.inOut",
						},
						"-=0.5"
					)
					intro.from(
						".site-header",
						{
							top: "-80px",
							opacity: 0,
							duration: 0.75,
							ease: "power3.out",
						},
						"-=0.25"
					)
				},

				beforeLeave() {
					gsap.to(".swipe", {
						x: "-100%",
						duration: 0,
					})
				},

				leave() {
					let done = this.async()
					// let body = document.querySelector("body")
					// body.style.overflow = "hidden"
					gsap.to(".swipe", {
						x: "0%",
						stagger: 0.1,
						ease: "power3.inOut",
						onComplete: done,
					})
				},

				enter() {
					// window.scrollTo(0, 0)
					const menuHeader = document.querySelector(".site-header")
					const menuContainer = document.querySelector(".menu-container")
					menuHeader.classList.remove("active")
					menuContainer.classList.remove("open")

					locomotiveScroll.scrollTo(0, { duration: 0 })
					let body = document.querySelector("body")
					body.style.overflowY = "auto"
				},

				after() {
					animationInit()
					var swipeTl = new Timeline()
					swipeTl.to(".swipe", {
						x: "100%",
						stagger: -0.1,
					})
					swipeTl.from(".site-header", {
						top: "-80px",
						opacity: 0,
						duration: 0.75,
						ease: "power3.out",
					})
				},
			},
		],
	})

	barba.hooks.after(() => {
		locomotiveScroll.update()

		ga("set", "page", window.location.pathname)
		ga("send", "pageview")
	})

	// Exclude Barba on Admin Bar links
	const adminLinks = document.querySelectorAll("#wpadminbar a")
	adminLinks.forEach((link) => {
		link.classList.add("no-barba")
	})
} else {
	facturation()
}
