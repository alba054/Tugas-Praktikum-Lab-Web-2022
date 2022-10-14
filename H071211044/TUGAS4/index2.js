const a = prompt("Perkalian Berapa ?");
const b = prompt("Ingin dikalikan hingga berapa ?");
let total = 0;
for (let i = 1; i <= b; i++) {
  console.log(`${i} x ${a} = ${i * a}`);
  //   console.log();
  total = total + i * a;
}
console.log("Hasil keseluruhan=" + total);

// for (let i = 0; i < 10; i++) {
//   console.log(i + 2);
// }

// 2
// 3
// 4
