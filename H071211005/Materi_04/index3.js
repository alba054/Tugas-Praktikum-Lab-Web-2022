let input = prompt("massukkan kalimat");
array = input.split("");
array.sort();
console.log(array);
let lastLetter = "";
let counter = 0;

for (let i = 0; i < array.length; i++) {
  if (lastLetter != array[i]) {
    lastLetter = array[i];
    counter = 1;
  } else {
    counter++;
  }

  if (lastLetter != array[i + 1]) {
    if (lastLetter == " ") {
      console.log("Spasi" + "=" + counter);
    } else {
      console.log(lastLetter + " = " + counter);
    }
  }
}
