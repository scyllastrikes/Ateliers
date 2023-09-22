let T = [17, 38, 10, 25, 72]
function tri(T){
    let check=false
    while (check!==false){
        check=false
        for (let i=0;i<T.length;i++){
            if (T[i]>T[i+1]){
                let temp=T[i]
                T[i]=T[i+1]
                T[i+1]=temp
                check=true
            }
        }
    }
}
tri(T)
console.log(T)
T.push(12)
console.log(T)
function reverse_list(T){
    for (let i=1;i<T.length;i++){
        let temp=T[i]
        T[i]=T[T.length-i]
        T[T.length-i]=temp
    }

}   
reverse_list(T)
console.log(T)
function find_index(T,x){
    let D=-1
    for (let i=0;i<T.length;i++){
        if (T[i]===x){D=i}
    }
    if(D===-1){return console.log("error")}
    else{return console.log(D)}
}
find_index(T,17)
function pop_index(T,x){
    for (let i=0;i<T.length;i++){
        if (T[i]===x){T[i].pop}
    }
console.log(T)
}
pop_index(T,38)
