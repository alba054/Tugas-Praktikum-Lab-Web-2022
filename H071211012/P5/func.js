let card = []; //Array kartu kosong yang nantinya akan diisi
let cNum = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"]; //Nomor dan Simbol Kartu
let cType = ["K", "L", "C", "S"]; //Tipe Kartu [K = Kelor (Clover/Keriting), L = Love (Hati), C = Ciduk (Diamond), S = Skop (Sekop)]

let yourAce = 0;
let dealerAce = 0;

let canPlay;

document.getElementById("resmo-button").disabled = true;
document.getElementById("hit-bt").disabled = true;
document.getElementById("stand-bt").disabled = true;

let yourResult, dealerResult = 0;

// Fungsi untuk tombol "Reset"
function reset() {
    let input_bet = document.getElementById("input-bet");
    input_bet.value = "";
    document.getElementById("pyb-txt").innerHTML = "Place your bet";
    input_bet.disabled = false;
    document.getElementById("submit-button").disabled = false;
    document.getElementById("your-card").innerHTML = "";
    document.getElementById("dealer-card").innerHTML = "";
    document.getElementById("result-text").innerHTML = "";
    document.getElementById("your-result").innerHTML = "";
    document.getElementById("dealer-result").innerHTML = "";

}

// Fungsi untuk tombol "Reset Money"
function resmoButton() {
    reset();
    document.getElementById("money").innerHTML = 5000;
    document.getElementById("restart-button").disabled = false;
    document.getElementById("resmo-button").disabled = true;
}

// Fungsi untuk tombol submit
function submitButton() {
    yourAce = 0;
    dealerAce = 0;
    // Membangun kartu
    for (let i = 0; i < cType.length; i++) {
        for (let j = 0; j < cNum.length; j++) {
            card.push(cNum[j] + "-" + cType[i]);
        }
    }
    // Mengacak kartu
    for (let i = 0; i < card.length; i++) {
        let j = Math.floor(Math.random() * card.length);
        let shuf = card[i];
        card[i] = card[j];
        card[j] = shuf;
    }
    let input_bet = document.getElementById("input-bet");
    if ((input_bet.value * 1) <= 0) {
        alert("You can only input number '> 0'");
        canPlay = false;
    }
    var money = document.getElementById("money");
    let getMoney = parseInt(money.innerText) - input_bet.value;
    if (getMoney >= 0 && (input_bet.value * 1) > 0) {
        money.innerHTML = getMoney;
        document.getElementById("submit-button").disabled = false;
        document.getElementById("hit-bt").disabled = false;
        document.getElementById("stand-bt").disabled = false;
        canPlay = true;
    } else if ((input_bet.value * 1) > 0) {
        alert("Your money is not enough!");
        canPlay = false;
    }
    if (canPlay) {
        input_bet.disabled = true;
        document.getElementById("submit-button").disabled = true;
        document.getElementById("pyb-txt").innerHTML = "Your Bet";

        // 2 Kartu pertama mu
        yourResult = 0;
        for (let i = 0; i < 2; i++) {
            let addCard = document.createElement("img");
            let getYourCard = card.pop();
            addCard.src = "Assets/" + getYourCard + ".png";
            addCard.style.height = 150 + "px";
            yourResult += getCardValue(getYourCard);
            if (getCardValue(getYourCard) == 11) {
                yourAce += 1;
            }
            document.getElementById("your-card").append(addCard);
        }

        // Menyesuaikan nilai kartu As kamu
        while (yourResult > 21 && yourAce > 0) {
            yourResult -= 10;
            yourAce -= 1;
        }
        document.getElementById("your-result").innerHTML = yourResult;

        // 2 Kartu pertama dealer
        let addCard = document.createElement("img");
        let getDealerCard = card.pop();
        dealerResult = getCardValue(getDealerCard);
        if (getCardValue(getDealerCard) == 11) {
            dealerAce += 1;
        }

        addCard.src = "Assets/" + getDealerCard + ".png";
        addCard.style.height = 150 + "px";
        document.getElementById("dealer-card").append(addCard);
        // Menyesuaikan nilai kartu As dealer
        while (dealerResult > 21 && dealerAce > 0) {
            dealerResult -= 10;
            dealerAce -= 1;
        }
        document.getElementById("dealer-result").innerHTML = dealerResult;

        let addBackCard = document.createElement("img");
        addBackCard.src = "Assets/Belakang.png";
        addBackCard.style.height = 150 + "px";
        addBackCard.id = "BackCard-Dealer";
        document.getElementById("dealer-card").append(addBackCard);
    }
}

// Fungsi untuk tombol hit
function hitButton() {
    let addCard = document.createElement("img");
    let getYourCard = card.pop();
    addCard.src = "Assets/" + getYourCard + ".png";
    addCard.style.height = 150 + "px";
    yourResult += getCardValue(getYourCard);
    document.getElementById("your-card").append(addCard);
    if (getCardValue(getYourCard) == 11) {
        yourAce += 1;
    }
    // Menyesuaikan nilai kartu As kamu
    while (yourResult > 21 && yourAce > 0) {
        yourResult -= 10;
        yourAce -= 1;
    }
    document.getElementById("your-result").innerHTML = yourResult;
    if (yourResult > 21) {
        standButton();
    }
}

// Fungsi untuk tombol stand
function standButton() {
    document.getElementById("hit-bt").disabled = true;
    document.getElementById("stand-bt").disabled = true;
    document.getElementById("BackCard-Dealer").remove();
    let randomize = Math.floor(Math.random() * 10) + 10;
    while (dealerResult <= randomize) {
        let addCard = document.createElement("img");
        let getDealerCard = card.pop();
        dealerResult += getCardValue(getDealerCard);
        if (getCardValue(getDealerCard) == 11) {
            dealerAce += 1;
        }
        addCard.src = "Assets/" + getDealerCard + ".png";
        addCard.style.height = 150 + "px";
        document.getElementById("dealer-card").append(addCard);
    }
    // Menyesuaikan nilai kartu As dealer
    while (dealerResult > 21 && dealerAce > 0) {
        dealerResult -= 10;
        dealerAce -= 1;
    }
    document.getElementById("dealer-result").innerHTML = dealerResult;
    let result = document.getElementById("result-text");
    let input_bet = document.getElementById("input-bet");
    var money = document.getElementById("money");
    if (yourResult > 21) {
        result.innerHTML = "You Lose!";
    } else if (yourResult == dealerResult) {
        result.innerHTML = "Tie!";
        let getMoney = parseInt(money.innerText) + (input_bet.value * 1);
        money.innerHTML = getMoney;
    } else if (dealerResult > 21) {
        if (yourResult == 21) {
            result.innerHTML = "You Win, you got a BlackJack!";
            let getMoney = parseInt(money.innerText) + (input_bet.value * 5);
            money.innerHTML = getMoney;
        } else {
            result.innerHTML = "You Win!";
            let getMoney = parseInt(money.innerText) + (input_bet.value * 2);
            money.innerHTML = getMoney;
        }
    } else if (yourResult > dealerResult) {
        if (yourResult == 21) {
            result.innerHTML = "You Win, you got a BlackJack!";
            let getMoney = parseInt(money.innerText) + (input_bet.value * 5);
            money.innerHTML = getMoney;
        } else {
            result.innerHTML = "You Win!";
            let getMoney = parseInt(money.innerText) + (input_bet.value * 2);
            money.innerHTML = getMoney;
        }
    } else if (yourResult < dealerResult) {
        result.innerHTML = "You Lose!";
    }

    money = money.innerText * 1;
    if (money == 0) {
        alert("You lose, your money runs out. Press 'Reset Money' to reset your money!");
        document.getElementById("restart-button").disabled = true;
        document.getElementById("resmo-button").disabled = false;
    }
}

// Mengambil nilai dari kartu
function getCardValue(card) {
    let data = card.split("-");
    let temp = data[0];
    if (isNaN(temp)) {
        if (temp == "A") {
            return 11;
        }
        return 10;
    } else {
        return parseInt(temp);
    }
}