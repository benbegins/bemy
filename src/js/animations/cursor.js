const cursor = () => {
	const cursor = document.querySelector(".cursor")
	const links = document.querySelectorAll("a, button, .nav-burger")

	// Fonction remove classes
	const removeClasses = () => {
		if (cursor.classList.contains("hover")) {
			cursor.classList.remove("hover")
		}
		if (cursor.classList.contains("image")) {
			cursor.classList.remove("image")
		}
	}

	// Remove hover on page transition
	removeClasses()

	if (window.innerWidth >= 1024) {
		// Cursor follow
		window.addEventListener("mousemove", function(e) {
			console.log(document.querySelector("body").style)
			cursor.style.transform =
				"translate(" + e.clientX + "px, " + e.clientY + "px)"
		})

		// Add hover effect
		links.forEach((link) => {
			link.addEventListener("mouseover", function(e) {
				cursor.classList.add("hover")
				if (link.classList.contains("cursor-image")) {
					cursor.classList.add("image")
				}
			})
			link.addEventListener("mouseout", function(e) {
				removeClasses()
			})
		})
	}
}

window.addEventListener("load", cursor)
window.addEventListener("resize", cursor)

export default cursor
