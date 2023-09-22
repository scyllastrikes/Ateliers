let x="abc"
let y="de"
let L=[]
for (let i=0 ;i<x.length;i++){
    for (let j=0;j<y.length;j++){
        L.push(x[i]+y[j])
    }
}
console.log(L)