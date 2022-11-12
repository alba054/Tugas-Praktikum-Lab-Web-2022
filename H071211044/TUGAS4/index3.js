var str = prompt("Input text");
var counts = {};
for (let i = 0; i < str.length; i++) {
  var ch = str.charAt(i);
  if (ch == " ") {
    ch = "spasi";
  }
  var count = counts[ch]; // undefined
  // counts[ch] = count ? count + 1 : 1;
  if (typeof count === "undefined") {
    counts[ch] = 1;
  } else {
    counts[ch] = counts[ch] + 1;
  }
}
for (ch in counts) {
  console.log(ch + " = " + counts[ch]);
}
console.log(counts["j"]);

// thor & loki = 11
// str.charAt(0); // t
// for (let i = 0; i < str.length; i++) {
//   var ch = str.charAt(i);
//   console.log(ch);
// }

// const counter = {
//   "a" : 0,
//   "b" : 0
// }
