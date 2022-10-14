let kali = prompt("Perkalian berapa?")

if  (/\D+/.test(kali)) { 
    console.log("Input bukan angka");
}else{

let dikali =prompt("Ingin dikalikan sampai berapa?")
let hasil = 0
for ( let i= 1; i <= dikali; i++ ){
    hasil = hasil + (i * kali);
    console.log(i + "x" + kali +"=" + (i * kali));
}
console.log("Hasil seluruh perkalian: " + hasil );
}
