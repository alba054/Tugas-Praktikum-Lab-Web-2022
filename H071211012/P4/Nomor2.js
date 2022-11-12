// Mengulang perintah untuk menginput fvalue jika memasukkan bukan number
while (true) {
    var fvalue = parseInt(prompt("Mau perkalian berapa?"));
    if (isNaN(fvalue)) {
        console.log("Hanya menerima inputan integer");
    } else {
        console.log("Akan menunjukkan perkalian " + fvalue);
        break;
    }
}
// Mengulang perintah untuk menginput svalue jika memasukkan bukan number
while (true) {
    var svalue = prompt("Mau dikalikan sampai berapa?")
    if (isNaN(svalue)) {
        console.log("Hanya menerima inputan integer");
    } else {
        console.log("Akan dikalikan sampai " + svalue);
        break;
    }
}

let addResult = 0;
let multResult;
for (let i = 1; i <= svalue; i++) { // Menghitung perkalian dan jumlah dari perkalian
    multResult = i * fvalue;
    addResult += multResult;
    console.log(i + ' x ' + fvalue + ' = ' + multResult);
}
console.log("Jumlah semua hasil kali = " + addResult);