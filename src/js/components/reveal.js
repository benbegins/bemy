import { gsap } from "gsap"
import { ScrollTrigger } from "gsap/ScrollTrigger"
import { Timeline } from "gsap/gsap-core"

const reveal = () => {
	// Home projet
	const imgMask = document.querySelector(".home-projets__reveal-mask")
	if (imgMask) {
		gsap.to(imgMask, {
			x: "100%",
			scrollTrigger: {
				trigger: imgMask,
				start: "top bottom",
				toggleActions: "play none none reset",
			},
		})
	}
}

export default reveal
