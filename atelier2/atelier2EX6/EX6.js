let paragrapheId=document.getElementById("paragraphe-id")
let toggle = true 
function changer(){
    toggle= !toggle
    if (toggle) {
        paragrapheId.innerHTML = "Text changed!"
    } else {
        paragrapheId.innerHTML = "Press me"
    }
}
