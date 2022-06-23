import axios from "axios"

const facturation = () => {
	const listeFactures = document.querySelector(".liste-factures")

	if (listeFactures) {
		//ELEMENTS
		// Current datas
		const date = new Date()
		let currentMonth = date.getMonth()
		let currentYear = date.getFullYear()
		// Selects
		let year = document.querySelector(".select-year")
		let month = document.querySelector(".select-month")
		let client = document.querySelector(".select-client")
		// Btn Reset
		const btnReset = document.querySelector(".btn-reset-filter")
		btnReset.style.display = "none"

		// FUNCTIONS
		// Met à jour la liste des factures
		function getListFactures() {
			let params = new URLSearchParams()
			params.append("action", "filter_posts")
			if (year.value == 0) {
				params.append("year", currentYear)
			} else {
				params.append("year", year.value)
			}
			params.append("month", month.value)
			params.append("client", client.value)

			axios.post("/wp-admin/admin-ajax.php", params).then((response) => {
				if (response.data.data) {
					listeFactures.innerHTML = response.data.data
				} else {
					listeFactures.innerHTML =
						"Pas de facture associée à la recherche."
				}
				calculateTotalFactures()
				checkResetButton()
			})
		}

		// Reset les selects et met à jour les factures
		function resetListFactures() {
			year.selectedIndex = 0
			month.selectedIndex = 0
			client.selectedIndex = 0
			getListFactures()
		}

		// Check si le bouton reset doit être visible
		function checkResetButton() {
			if (
				year.selectedIndex == 0 &&
				month.selectedIndex == 0 &&
				client.selectedIndex == 0
			) {
				btnReset.style.display = "none"
			} else {
				btnReset.style.display = "block"
			}
		}

		// Calcul le total des factures de la page
		function calculateTotalFactures() {
			let prixTotal = 0
			let prixTotalEnAttente = 0
			let prixTotalNet = 0
			let moyenneMensuelle = 0
			let factures = document.querySelectorAll(".facture-item")

			if (factures) {
				factures.forEach((facture) => {
					// On récupère le prix de la facture et on le converti en nombre
					let prix = facture.querySelector(".prix-facture").innerText
					const prixParsed = parseInt(prix, 10)
					if (isNaN(prixParsed)) {
						return 0
					}
					// On ajoute le prix au prix total
					prixTotal += prixParsed
					// Si la facture est en attente, on l'ajoute au prix en attente
					if (facture.classList.contains("facture_en_attente")) {
						prixTotalEnAttente += prixParsed
					}
				})
				// Mise à jour du prix net
				prixTotalNet = (prixTotal * 0.75).toFixed(0)
				// Mise à jour de la moyenne mensuelle
				if (year.value == 0 || year.value == currentYear) {
					moyenneMensuelle = (
						prixTotalNet /
						(currentMonth + 1)
					).toFixed(0)
				} else {
					moyenneMensuelle = (prixTotalNet / 12).toFixed(0)
				}
			}
			// On met à jour le Total sur la page
			document.querySelector(".total_factures").innerText =
				prixTotal + " €"
			document.querySelector(".total_en_attente").innerText =
				prixTotalEnAttente + " €"
			document.querySelector(".total_net").innerText = prixTotalNet + " €"
			document.querySelector(".moyenne_mensuelle").innerText =
				moyenneMensuelle + " €"
		}
		calculateTotalFactures()

		// EVENTS
		year.addEventListener("change", getListFactures)
		month.addEventListener("change", getListFactures)
		client.addEventListener("change", getListFactures)
		btnReset.addEventListener("click", resetListFactures)
	}
}

export default facturation
