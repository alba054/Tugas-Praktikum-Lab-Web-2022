let kalimat = prompt("Masukkan kalimat");
let pisah = kalimat.split("");
let dihitung = {};

for (let i = 0; i < pisah.length; i++) {
  if (dihitung[pisah[i]] == undefined) dihitung[pisah[i]] = 0;
  dihitung[pisah[i]]++;
}
for (let i in dihitung) {
  if (i == " ") {
    console.log("spasi" + " = " + dihitung[i]);
  } else {
    console.log(i + " = " + dihitung[i]);
  }
}
