let duit = 5000;
let arrayKartu = [];
let money = document.getElementById("duit");
duit.innerHTML = duit;
let getCard = false;
let tar = parseInt(document.getElementById("bet").value);

function sg() {
  arrayKartu = [];
  tar = parseInt(document.getElementById("bet").value);
  if (duit >= tar) {
    let card = document.getElementById("card");
    let bet = document.getElementById("bet");
    let jumlah = document.getElementById("jumlah");
    let sg = document.getElementById("sg");
    card.innerHTML = "";
    jumlah.innerHTML = "";

    duit = duit - tar;
    getCard = true;
    let kartu1 = Math.ceil(Math.random() * 11);
    let kartu2 = Math.ceil(Math.random() * 11);
    arrayKartu[0] = kartu1;
    arrayKartu[1] = kartu2;
    card.innerHTML = kartu1 + " " + kartu2;
    // bet.value = " ";
    jumlah.innerHTML = kartu1 + kartu2;
    sg.innerHTML = "Want to Play Again?";
    console.log(document.getElementById("bet").value == 0);
  } else if (duit < tar) {
    alert("Your Money is not Enough");
  } else if (
    document.getElementById("bet").value == "" ||
    document.getElementById("bet").value == 0
  ) {
    alert("Set Your Bet First");
  }
  document.getElementById("duit").innerHTML = duit;
}

function tc() {
  let sum = 0;
  let newcard = Math.ceil(Math.random() * 11);
  if (getCard) {
    arrayKartu.push(newcard);
  }
  for (i = 0; i < arrayKartu.length; i++) {
    sum += parseInt(arrayKartu[i]);
    document.getElementById("jumlah").innerHTML = sum;
  }
  console.log(sum);
  showcard();
  if (sum > 21) {
    document.getElementById("firah").innerHTML = "You Lose, HAHAHA";
    getCard = false;
  } else if (sum == 21) {
    // console.log("tar " + tar);
    console.log(money.innerHTML);
    money.innerHTML = Number(money.innerHTML) + 5 * tar;
    document.getElementById("firah").innerHTML = "You Win, yeay";
    getCard = false;
  }
}

function showcard() {
  var kartu = "";
  for (i = 0; i < arrayKartu.length; i++) {
    // console.log(arrayKartu[i]);
    kartu += " " + arrayKartu[i];
    document.getElementById("card").innerHTML = kartu;
  }
  //   console.log(kartu);
}

function reset() {
  let kembali = 5000;
  document.getElementById("duit").innerHTML = "Rp" + kembali;
}
