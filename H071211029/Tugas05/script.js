var input = document.getElementById("main");
var money = document.getElementById("money");
var anoun = document.getElementById("anoun");

var jumlah = document.getElementById("jumlah");
var mulai = document.getElementById("mulai");
var card1 = document.createElement("span");
var kartu1 = document.getElementById("card");
kartu1.appendChild(card1);
var card2 = document.createElement("span");
var kartu2 = document.getElementById("card");
kartu2.appendChild(card2);
var card3 = document.createElement("span");
var kartu3 = document.getElementById("card");
kartu3.appendChild(card3);
var card4 = document.createElement("span");
var kartu4 = document.getElementById("card");
kartu4.appendChild(card4);
var card5 = document.createElement("span");
var kartu5 = document.getElementById("card");
kartu5.appendChild(card5);

function start() {
    anoun.innerHTML = "";
    card3.innerHTML = "";
    card4.innerHTML = "";
    card4.innerHTML = "";
    card5.innerHTML = "";
    if (Number(money.innerHTML) == 0) {
        alert("Your Money = 0, Please Reset Your Money");
    } else if (input.value == "" || input.value == 0) {
        alert("Set your bet first");
    } else if (input.value <= Number(money.innerHTML)) {
        card1.innerHTML = Math.floor(Math.random() * 13) + 1;
        card2.innerHTML = Math.floor(Math.random() * 13) + 1;
        jumlah.innerHTML = Number(card1.innerHTML) + Number(card2.innerHTML);
        if (Number(jumlah.innerHTML) < 21) {
            money.innerHTML = Number(money.innerHTML) - Number(input.value);
        } else if (Number(jumlah.innerHTML) == 21) {
            money.innerHTML = Number(money.innerHTML) + (Number(input.value) * 5);
            anoun.innerHTML = "You Already Got BlackJack";
        } else if (Number(jumlah.innerHTML) > 21) {
            money.innerHTML = Number(money.innerHTML) - Number(input.value);
            anoun.innerHTML = "You Lose";
        }
        mulai.innerHTML = "WANT TO PLAY AGAIN?";
        input.value = "";
    } else {
        alert("Duit mu tidak cukup");
    }
}

function draw() {
    if (Number(jumlah.innerHTML) < 21) {
        if (card3.innerHTML == "") {
            card3.innerHTML = Math.floor(Math.random() * 13) + 1;
            jumlah.innerHTML = Number(jumlah.innerHTML) + Number(card3.innerHTML);
        } else if (card4.innerHTML == "") {
            card4.innerHTML = Math.floor(Math.random() * 13) + 1;
            jumlah.innerHTML = Number(jumlah.innerHTML) + Number(card4.innerHTML);
        } else if (card5.innerHTML == "") {
            card5.innerHTML = Math.floor(Math.random() * 13) + 1;
            jumlah.innerHTML = Number(jumlah.innerHTML) + Number(card5.innerHTML);
        }
    } else if (Number(jumlah.innerHTML) == 21) {
        money.innerHTML = Number(money.innerHTML) + (Number(input.value) * 5);
        anoun.innerHTML = "You Already Got BlackJack";
    } else if (Number(jumlah.innerHTML) > 21) {
        anoun.innerHTML = "You Lose";
    }
}

function reset() {
    money.innerHTML = 5000;
    mulai.innerHTML = "Start Game";
    jumlah.innerHTML = "";
    card1.innerHTML = "";
    card2.innerHTML = "";
    card3.innerHTML = "";
    card4.innerHTML = "";
    card5.innerHTML = "";
}