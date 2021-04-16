import gsap from "gsap/gsap-core"

const textReveal = () => {
	const pageTitle = document.querySelector(".page-title")

	if (pageTitle) {
		// Ajoute des span autour de chaques mots
		const words = pageTitle.innerHTML.split(" ")
		const spanTitle = words.map(
			(word) =>
				`<span class="overflow-hidden">
					<span class="page-title__anim">${word}</span>
				</span>`
		)
		pageTitle.innerHTML = spanTitle.join(" ")

		// PageTitle n'est plus en opacity 0
		pageTitle.style.opacity = 1

		// Anime chaque mot
		gsap.from(".page-title__anim", {
			y: "100%",
			opacity: 0,
			duration: 0.75,
			delay: 0.25,
			ease: "Power1.out",
			stagger: 0.05,
		})

		//Ajoute l'élément line au titre
		const line = document.createElement("div")
		line.classList.add("line")
		if (!pageTitle.classList.contains("no-line")) {
			pageTitle.appendChild(line)
		}

		//Anime la ligne
		gsap.from(line, {
			width: 0,
			delay: 0.5,
			duration: 0.75,
		})
	}

	// Apparition en opacité
	const revealOpacity = document.querySelectorAll(".reveal-opacity")
	if (revealOpacity) {
		gsap.to(revealOpacity, {
			opacity: 1,
			delay: 1,
			duration: 0.5,
			ease: "none",
			stagger: 0.25,
		})
	}
}
export default textReveal
