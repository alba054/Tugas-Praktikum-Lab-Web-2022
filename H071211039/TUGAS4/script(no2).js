let perkali = prompt("Perkalian berapa?");
if (/\D+/.test(perkali)) {
  console.log("Input bukan angka");
} else {
  let dikalikan = prompt("Ingin dikalikan sampai berapa?");
  let jumlah = 0;
  for (let i = 1; i <= dikalikan; i++) {
    jumlah = jumlah + i * perkali;
    console.log(i + " x " + perkali + " = " + i * perkali);
  }
  console.log("Hasil seluruh perkalian " + jumlah);
}
