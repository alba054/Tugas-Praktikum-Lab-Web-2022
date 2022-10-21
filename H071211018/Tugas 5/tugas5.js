function reset() {
    let taruhan=document.getElementById("taruhan")

    taruhan.value=0
}

function start(){
    let taruhan=document.getElementById("taruhan")
    let kartu1=document.getElementById("kartu1")
    let kartu2=document.getElementById("kartu2")
    let jumlah=document.getElementById("jumlah")
    let money=document.getElementById("money")
    let startbutton=document.getElementById("startbutton")
    let hasil=document.getElementById("hasil")
    let ronde=document.getElementById("ronde")

    // ketika memasukkan angka 0 atau kosong maka alert nya akan muncul untuk mengisi nominal taruhan nya
    // ketika memasukkan angka bukan 0 maka di proses di else nya dengan keadaan kartu 1 dan 2 nya random angka nya dan jumlahnya itu total dari kartu 1 dan 2
    // gunanya if ini untuk memasukkan nominal angka taruhan sebelum memulai permainan
    if(Number(taruhan.value)===0 || taruhan.value === ""){
        alert("Set Your Bet")
    }else{
        kartu1.innerHTML = Math.floor(Math.random() * 13) + 1
        kartu2.innerHTML = Math.floor(Math.random() * 13) + 1
        jumlah.innerHTML = Number(kartu1.innerHTML) + Number(kartu2.innerHTML)

        // jika jumlah card nya =21 maka alertnya akan muncul yg berarti menang dalam permainan dan uangnya akan bertambah dari angka taruhan
        // jika tidak 21 atau <21 maka alert yg muncul menandakan bahwa permainan selesai dan tidak bisa ambil kartu baru, kemudian uang nya akan berkurang sebesar angka taruhan yg dimasukkan
        // gunanya untuk menampilkan menang/kalah sesuai kondisi
        if(jumlah==21){
            ronde.innerHTML = "You Got BlackJack !"
            hasil.innerHTML = "You Already Get BlackJack"
            money.innerHTML = Number(money.innerHTML) + Number(taruhan.value) * 6
        }else if(Number(jumlah.innerHTML) < 21){
            ronde.innerHTML = "Draw New Cards"
            hasil.innerHTML = ""
            money.innerHTML = Number(money.innerHTML) - Number(taruhan.value)
        }else{
            ronde.innerHTML = "You Lose !"
            hasil.innerHTML = "Game is Over You Can't Take Your New Card"
            money.innerHTML = Number(money.innerHTML) - Number(taruhan.value)
        }
        // reset()
        startbutton.innerHTML = "Want to Play Again ?"


    }
}

function take() {
    let jumlah=document.getElementById("jumlah")
    let cards=document.getElementById("cards")
    let taruhan=document.getElementById("taruhan")
    let money=document.getElementById("money")
    
    // gunanya if dibawah untuk memunculkan kartu lain (kartu n) ketika mengambil kartu baru
    if(Number(jumlah.innerHTML) < 21){
        let kartu_n = document.createElement("span")
        kartu_n.innerHTML = Math.floor(Math.random() * 13) + 1
        cards.appendChild(kartu_n)
        jumlah.innerHTML = Number(jumlah.innerHTML) + Number(kartu_n.innerHTML)
        if(jumlah.innerHTML==21){
            ronde.innerHTML = "You Got BlackJack !"
            hasil.innerHTML = "You Already Get BlackJack"
            money.innerHTML = Number(money.innerHTML) + Number(taruhan.value) * 6
        }else if(Number(jumlah.innerHTML) < 21){
            ronde.innerHTML = "Draw New Cards"
            hasil.innerHTML = ""
            money.innerHTML = Number(money.innerHTML) - Number(taruhan.value)
        }else{
            ronde.innerHTML = "You Lose !"
            hasil.innerHTML = "Game is Over You Can't Take Your New Card"
            money.innerHTML = Number(money.innerHTML) - Number(taruhan.value)
        }
    }
    
}