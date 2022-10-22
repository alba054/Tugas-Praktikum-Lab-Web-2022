function reset() {
  let taruhan = document.getElementById("taruhan");
  taruhan.value = "";
  let uang = 5000;
  let money = document.getElementById("money");
  money.innerHTML = uang;
}
function startGame() {
  let cards = document.getElementById("cards");
  let taruhan = document.getElementById("taruhan");
  let sum = document.getElementById("sum");
  let money = document.getElementById("money");
  let pLay = document.getElementById("play");
  let status = document.getElementById("status");
  let start = document.getElementById("start");

  if (taruhan.value === "" || taruhan.value == 0) {
    alert("Set Your Bet First");
  } else {
    start.innerHTML = "Want To Play Again";
    cards.innerHTML = "";
    sum.innerHTML = "";
    pLay.innerHTML = "Play A round";
    status.innerHTML = "";
    let num1 = Math.floor(Math.random() * 11) + 1;
    let num2 = Math.floor(Math.random() * 11) + 1;
    let cards1 = document.createElement("span");
    let cards2 = document.createElement("span");
    cards1.innerHTML = num1;
    cards2.innerHTML = num2;
    cards.appendChild(cards1);
    cards.appendChild(cards2);

    sum.innerHTML = num1 + num2;
    if (Number(sum.innerHTML) === 21) {
      money.innerHTML = Number(money.innerHTML) + Number(taruhan.value) * 5;
      pLay.innerHTML = "You Got BlackJack";
      status.innerHTML = "You Already Got BlackJack";
      // money = uang + (5 * taruhan);
    } else if (Number(sum.innerHTML) < 21) {
      money.innerHTML = Number(money.innerHTML) - Number(taruhan.value);
      // document.getElementById("status")
      // status.innerHTML = "You lose"
    } else if (Number(sum.innerHTML) > 21) {
      // document.getElementById("status")
      status.innerHTML = "You lose";
    }
  }
}

function takeCaard() {
  if (Number(sum.innerHTML) < 21) {
    let sum = document.getElementById("sum");
    let num = Math.floor(Math.random() * 11) + 1;
    let card = document.createElement("span");
    let cards = document.getElementById("cards");
    let taruhan = document.getElementById("taruhan");
    let money = document.getElementById("money");
    let pLay = document.getElementById("play");
    let status = document.getElementById("status");
    card.innerHTML = num;
    cards.appendChild(card);

    sum.innerHTML = Number(sum.innerHTML) + num;
    if (Number(sum.innerHTML) === 21) {
      money.innerHTML = Number(money.innerHTML) + Number(taruhan.value) * 5;
      pLay.innerHTML = "You Got BlackJack";
      status.innerHTML = "You Already Got BlackJack";
      // money = uang + (5 * taruhan);
    } else if (Number(sum.innerHTML) < 21) {
      money.innerHTML = Number(money.innerHTML) - Number(taruhan.value);
      // document.getElementById("status")
      // status.innerHTML = "You lose"
    } else if (Number(sum.innerHTML) > 21) {
      // document.getElementById("status")
      status.innerHTML = "You lose";
    }
  }
}
