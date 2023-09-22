function Nbr_parfaits(x){
    let somme = 0
    for (let i = 1; i < x; i++){
        if (x % i == 0){
            somme += i
        }
    }
    if (somme == x){
        return true
    }
    else{
        return false
    }
}