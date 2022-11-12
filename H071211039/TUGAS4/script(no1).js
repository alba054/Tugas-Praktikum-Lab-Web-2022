let nama = prompt("Masukkan Nama Anda");

if (nama === ""){
    console.log("Masukkan nama anda terlebih dahulu");
}else {
    let sudah = prompt("Apakah sudah mengumpulkan tugas praktikum?YES atau NO");
    if (sudah === "YES" || sudah === "yes") {
        let asistensi = prompt ("Ikut asistensi? YES atau NO")
        if (asistensi === "YES" || asistensi === "yes") {
            let banyak = prompt ("Sudah berapa kali ikut asistensi? 1 atau 2")
            if (banyak === "1") {
                console.log("Asistensi sekali lagi ya " + nama);
            } else if(banyak === "2"){
                console.log("Hebat kamu " + nama);
            }else {
                console.log("Masukkan input yang benar yaitu 1 atau 2");
            }    
        }else if(asistensi === "NO"|| asistensi === "no"){
            console.log("Asistensi dulu ya " + nama);
        }else {
            console.log("Masukkan input yang benar yaitu YES atau NO");
        }
    }else if (sudah === "NO"|| sudah === " no"){
        console.log("Jangan lupa dikerja tugas praktikumnya " + nama);
    }else {
        console.log("Masukkan input yang benar yaitu YES atau NO");
    }
}

