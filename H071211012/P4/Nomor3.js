// Nomor 3
let text = prompt("Masukkan inputan"); //Memasukkan inputan
text = text.toLowerCase(); // Mengubah nilai inputan menjadi huruf kecil (lowercase) semua


// Cara 1 : Mencari char apa saya yang terkandung di dalam text menggunakan object
console.log("============ Menggunakan Object");
var chTxt = {};
for (var i = 0; i < text.length; i++) {
    var ch = text.charAt(i);
    ch = (ch == " ") ? "'Spasi'" : ch;
    var count = chTxt[ch];
    chTxt[ch] = count ? chTxt[ch] + 1 : 1;
}
for (ch in chTxt) {
    console.log("Jumlah karakter " + ch + " adalah " + chTxt[ch]);
}


// Cara 2 : Mencari char apa saya yang terkandung di dalam text menggunakan array dengan nilai uique
// // Mengubah inputan text menjadi array
let charText = [];
for (let i = 0; i < text.length; i++) {
    charText[i] = text.charAt(i);
}
// // // 2.1 : Menggunakan Perulangan Manual untuk mengambil nilai unique-nya
console.log("\n============ Membuat charText[] Menjadi Unique ");
let uniqueCharText = [];
let syarat = true;
let tmp = 0;
for (let i = 0; i < charText.length; i++) {
    syarat = true;
    tmp = 0;
    for (let j = 0; j < uniqueCharText.length; j++) {
        if (charText[i] == uniqueCharText[j]) {
            syarat = false;
        }
    }
    tmp++;
    if (tmp == 1 && syarat == true) {
        uniqueCharText.push(charText[i]);
    }

}
for (let i = 0; i < uniqueCharText.length; i++) {
    let jumlahHuruf = 0;
    for (let j = 0; j < text.length; j++) {
        if (uniqueCharText[i] == text.charAt(j)) {
            jumlahHuruf += 1;
        }
    }
    uniqueCharText[i] = (uniqueCharText[i] == " ") ? "'Spasi'" : uniqueCharText[i];
    console.log("Jumlah karakter " + uniqueCharText[i] + " adalah " + jumlahHuruf);
}

// // // 2.2 : Menggunakan function [... new Set()] untuk mengambil nilai unique-nya
console.log("\n========== Menggunakan ... new Set()");
let uniqueArray = [...new Set(charText)];
for (let i = 0; i < uniqueArray.length; i++) {
    let jumlahHuruf = 0;
    for (let j = 0; j < text.length; j++) {
        if (uniqueArray[i] == text.charAt(j)) {
            jumlahHuruf += 1;
        }
    }
    uniqueArray[i] = (uniqueArray[i] == " ") ? "'Spasi'" : uniqueArray[i];
    console.log("Jumlah karakter " + uniqueArray[i] + " adalah " + jumlahHuruf);
}

// // // 2.3 : Menggunakan function `filter` untuk mengambil nilai unique-nya
console.log("\n========== Menggunakan `array`.filter");
let uniqueChar = charText.filter((item, i, ar) => ar.indexOf(item) === i);
for (let i = 0; i < uniqueChar.length; i++) {
    let jumlahHuruf = 0;
    for (let j = 0; j < text.length; j++) {
        if (uniqueChar[i] == text.charAt(j)) {
            jumlahHuruf += 1;
        }
    }
    uniqueChar[i] = (uniqueChar[i] == " ") ? "'Spasi'" : uniqueChar[i];
    console.log("Jumlah karakter " + uniqueChar[i] + " adalah " + jumlahHuruf);
}