let guess=prompt("Entrez un nombre entier :")
function entierAleatoire(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min}
let generation=entierAleatoire(0,10)
let  guesses=3
while (guesses>0){
    if (guess===generation){
        alert("Gagné")
        break
    }
    else{
        guesses-=1
        guess=prompt("Entrez un nombre entier :")
    }
}
if (guesses===0){alert(`Perdu le nombre était ${generation}`)}
    
