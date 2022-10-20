let money = 1000;

function putYourMoney() {
  let inputMoney = 0;
  while (true) {
    inputMoney = prompt("Masukkan Uang Anda");
    if (isNaN(Number(money))) {
      alert("Uang harus dalam bentuk angka");
    } else {
      break;
    }
  }

  return inputMoney;
}

const cardimgs = {
  1: "Black Hearts/HA.png",
  2: "Black Hearts/H2.png",
  3: "Black Hearts/H3.png",
  4: "Black Hearts/H4.png",
  5: "Black Hearts/H5.png",
  6: "Black Hearts/H6.png",
  7: "Black Hearts/H7.png",
  8: "Black Hearts/H8.png",
  9: "Black Hearts/H9.png",
  10: "Black Hearts/H10.png",
  11: "Black Hearts/HJ.png",
  12: "Black Hearts/HQ.png",
  13: "Black Hearts/HK.png",
};

const myMoney = document.getElementById("myMoney");
myMoney.innerHTML = money;
const play = document.getElementById("play");
const gameStatus = document.getElementById("gameStatus");
const resetButton = document.getElementById("resetButton");
const betMoney = document.getElementById("betMoney");
resetButton.addEventListener("click", function () {
  betMoney.value = "";
  money = putYourMoney();
  myMoney.innerHTML = Number(myMoney.innerHTML) + Number(money);
});

const startButton = document.getElementById("startButton");
const cards = document.getElementById("cards");

const sum = document.getElementById("sum");
startButton.addEventListener("click", function () {
  gameStatus.innerHTML = "";
  startButton.innerHTML = "Start Game";
  if (Number(myMoney.innerHTML) < Number(betMoney.value)) {
    gameStatus.innerHTML = "Game is over you can't take new card";
    alert("saldo tidak cukup");
  } else {
    if (betMoney.value === "0" || betMoney.value === "") {
      alert("Set Your Bet");
    } else {
      cards.innerHTML = "";
      let num1 = Math.floor(Math.random() * 13) + 1;
      let num2 = Math.floor(Math.random() * 13) + 1;

      sum.innerHTML = Number(num1) + Number(num2);
      // console.log(sum.innerHTML);
      let card1img = document.createElement("img");
      let card2img = document.createElement("img");
      card1img.src = cardimgs[Number(num1)];
      card2img.src = cardimgs[Number(num2)];
      cards.appendChild(card1img);
      cards.appendChild(card2img);

      if (Number(sum.innerHTML) === 21) {
        play.innerHTML = "You GOT BLACKJACK";
        gameStatus.innerHTML = "You already Got Blackjack";
        myMoney.innerHTML =
          Number(betMoney.value) * 5 + Number(myMoney.innerHTML);
        startButton.innerHTML = "Play Again?";
        // alert("Menang");
      } else if (Number(sum.innerHTML) < 21) {
        play.innerHTML = "Draw New Card";
        myMoney.innerHTML = Number(myMoney.innerHTML) - Number(betMoney.value);
      } else {
        play.innerHTML = "You LOSE";

        myMoney.innerHTML = Number(myMoney.innerHTML) - Number(betMoney.value);
        startButton.innerHTML = "Play Again?";
        // alert("kalah");
      }
    }
  }
});

const takeButton = document.getElementById("takeButton");
takeButton.addEventListener("click", function () {
  if (Number(myMoney.innerHTML) < Number(betMoney.value)) {
    gameStatus.innerHTML = "Game is over you can't take new card";
    alert("saldo tidak cukup");
  } else {
    if (Number(sum.innerHTML) < 21) {
      let num = Math.floor(Math.random() * 13) + 1;
      sum.innerHTML = Number(num) + Number(sum.innerHTML);
      let card = document.createElement("img");
      card.src = cardimgs[Number(num)];
      cards.appendChild(card);
      if (Number(sum.innerHTML) === 21) {
        play.innerHTML = "You GOT BLACKJACK";
        gameStatus.innerHTML = "You already Got Blackjack";
        myMoney.innerHTML =
          Number(betMoney.value) * 5 + Number(myMoney.innerHTML);
        startButton.innerHTML = "Play Again?";
        // alert("Menang");
      } else if (Number(sum.innerHTML) < 21) {
        play.innerHTML = "Draw New Card";
        myMoney.innerHTML = Number(myMoney.innerHTML) - Number(betMoney.value);
      } else {
        play.innerHTML = "You LOSE";
        myMoney.innerHTML = Number(myMoney.innerHTML) - Number(betMoney.value);
        startButton.innerHTML = "Play Again?";
        // alert("kalah");
      }
      // myMoney.innerHTML = Number(myMoney.innerHTML) - Number(betMoney.value);
    }
  }
});
