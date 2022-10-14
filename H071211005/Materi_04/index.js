let nama = prompt("Masukkan Nama Anda");
if (nama ==="") {
    console.log("Masukkan nama anda terlebih dahulu");
}
else {
    let sudah = prompt("Sudah mengumpulkan Tugas Praktikum? YES atau NO");
    if (sudah === "YES" || sudah === "yes") {
        let ikut = prompt("Ikut Asistensi? Yes atau No")
        if (ikut === "YES" || ikut === "yes" ) {
            let berapa = prompt("Sudah berapa kali asistensi? 1 atau 2")
            if (berapa === "1") {
                console.log("Asistensi sekali lagi ya " +nama)
            }
            else if (berapa === "2") {
                console.log("Hebat kamu "+nama)
            }
            else {
            }
        }
    }else if (sudah === "NO" || sudah === "no") {
        console.log("Asistensi dulu ya "+ nama)
    }
}