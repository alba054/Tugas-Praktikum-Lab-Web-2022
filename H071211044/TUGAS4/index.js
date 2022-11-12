let nama = prompt("Masukkan Nama Anda");
if (nama === "") {
  console.log("Masukkan nama anda terlebih dahulu");
} else {
  let nomor = prompt("Masukkan Nomor pendaftaran");
  if (nomor === "") {
    console.log("Masukkan nomor pendaftaran terlebih dahulu");
  } else {
    let sudah = prompt("Sudah mengisi form offline? YES atau NO");
    if (sudah === "YES" || sudah === "yes") {
      let ambil = prompt("Sudah mengambil nomor urut? Yes atau NO");
      if (ambil === "YES" || ambil === "yes") {
        let sudah = prompt("Sudah siap seleksi? YES atau NO");
        if (sudah === "NO") {
          console.log("Ayo persiapkan diri kamu secepatnya");
        } else if (sudah === "YES") {
          console.log("Mantappp, semoga lancar ya");
        }
      }
    } else if (sudah === "NO" || sudah === "no") {
      console.log("Silahkan ambil terlebih dahulu");
    }
  }
}
