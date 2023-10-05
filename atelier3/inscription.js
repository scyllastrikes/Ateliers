
function validerDateMatch() {
    let dateMatchInput = document.getElementById("date_match")
    let dateMatch = new Date(dateMatchInput.value)
    let dateDebut = new Date("2024-01-01")
    let dateFin = new Date("2024-12-31")

    if (dateMatch < dateDebut || dateMatch > dateFin) {
        alert("La date du match doit être comprise entre le 1er janvier 2024 et le 31 décembre 2024.")
        dateMatchInput.value = "" 
    }
}
document.addEventListener("DOMContentLoaded", ()=> {
    let formulaire = document.querySelector("form")

    formulaire.addEventListener("submit", function(event) {
        let nomInput = document.getElementById("nom")
        let prenomInput = document.getElementById("prenom")
        let telephoneInput = document.getElementById("telephone")
        let dateMatchInput = document.getElementById("date_match")

        let nom = nomInput.value
        let prenom = prenomInput.value
        let telephone = telephoneInput.value
        let dateMatch = new Date(dateMatchInput.value)
        let dateDebut = new Date("2024-09-01")
        let dateFin = new Date("2024-12-30")
        
    
        let errors = []

        if (!/^[A-Za-zÀ-ÖØ-öø-ÿ]+$/.test(nom) && prenom.length < 1) {
            errors.push("Le nom ne doit contenir que des lettres et contient au moins un caractère.")
        }

        if (prenom.length < 1) {
            errors.push("Le prénom doit compter au moins 1 caractère.")
        }

        if (!/^[0-9]{8}$/.test(telephone)) {
            errors.push("Le numéro de téléphone doit contenir exactement 8 chiffres.")

        }

        if (dateMatch < dateDebut || dateMatch > dateFin) {
            errors.push("La date du match doit être comprise entre le 1er septembre 2024 et le 30 décembre 2024.")
        }
        let emailValue = emailInput.value
        let emailPattern = /^[A-Za-z0-9._%+-]+@esprit.tn$/
        if (!emailPattern.test(emailValue)) {
            errors.push("Adresse email incorrecte.")
        }
        if (errors.length > 0) {
            event.preventDefault() 
            alert(errors.join("\n"))
        }
    })
})

let emailInput = document.getElementById("email")

emailInput.addEventListener("keyup", function() {
    let emailValue = emailInput.value
    let emailPattern = /^[A-Za-z0-9._%+-]+@esprit.tn$/

    let message = document.getElementById("email-message")

    if (emailPattern.test(emailValue)) {
        message.style.color = "green"
        message.textContent = "Adresse email correcte."
    } else {
        message.style.color = "red"
        message.textContent = "Adresse email incorrecte."
        
    }
})
function submitOK(){
    let ins= document.getElementById("ins")
    ins.textContent="Inscription réussie"

}