// Nomor 1
let run = true; // Syarat agar program dapat jalan jika user memasukkan inputan yang tidak sesuai (yes/no)
while (run === true) {
    respond = prompt("Apakah Anda Mahasiswa Unhas? (yes/no)");
    if (respond == null) {
        break;
    } else {
        run = true;
    }
    respond = respond.toLowerCase();
    if (respond == "yes") {
        console.log("Mantap, anak kampus merah");
        while (run) {
            respond = prompt("Apakah Anda berasal dari luar Makassar? (yes/no)");
            respond = respond.toLowerCase();
            if (respond == "yes") {
                console.log("Sepertinya Anda butuh tempat tinggal");
                while (run) {
                    respond = prompt("Apakah Anda berniat memesan kos? (yes/no)");
                    respond = respond.toLowerCase();
                    if (respond == "yes") {
                        console.log("Anda bisa memesan di kos kami hanya dengan Rp500.000/bulan diluar biaya listrik dan air");
                        while (run) {
                            respond = prompt("Apakah Anda tertarik untuk memesan kos di tempat kami? (yes/no)");
                            respond = respond.toLowerCase();
                            if (respond == "yes") {
                                console.log("Terima kasih, silahkan hubungi nomor 089877869876");
                                console.log("END");
                                run = false;
                            } else if (respond == "no") {
                                console.log("Baiklah, terima kasih sebelumnya.");
                                run = false;
                            } else {
                                console.log('Input yang dimasukkan salah, hanya menerima inputan "yes" atau "no"');
                            }
                        }
                    } else if (respond == "no") {
                        console.log("Baiklah");
                        run = false;
                    } else {
                        console.log('Input yang dimasukkan salah, hanya menerima inputan "yes" atau "no"');
                    }
                }
            } else if (respond == "no") {
                console.log("Baik");
                run = false;
            } else {
                console.log('Input yang dimasukkan salah, hanya menerima inputan "yes" atau "no"');
            }
        }
    } else if (respond == "no") {
        console.log("Sayang sekali, selamat menjalani aktivitas!");
        run = false;
    } else {
        console.log('Input yang dimasukkan salah, hanya menerima inputan "yes" atau "no"');
    }
}