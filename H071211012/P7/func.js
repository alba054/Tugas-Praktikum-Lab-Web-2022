const modal = document.getElementsByClassName('modalsec-container')[0];
function modify(button, index) {
    const modify = document.getElementsByClassName(button)[index];
    const dataID = modify.value;
    modal.style.display = 'block'; // Menampilkan modal
    showToEdit(dataID);
}

function closeModal(){
    modal.style.display = 'none'; // Menutup modal
}

function showToEdit(dataID) {
    if (dataID == "") {
      return;
    }
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        // Mengambil data dari server (response)
        let data = this.response;
        let arrayData = data.split('#'); // Memisahkan data berdasarkan '#'
        document.getElementById('idminuman-input').value = arrayData[0];
        document.getElementById('input-nama').value = arrayData[1];
        document.getElementById('input-jenis').value = arrayData[2];
        document.getElementById('input-deskripsi').value = arrayData[3];
        document.getElementById('input-harga').value = arrayData[4];
        
    }
    xhttp.open("GET", "functions.php?editID=" + dataID); // Mengirimkan data ke functions.php untuk dimasukkan di response pada xhttp.onload
    xhttp.send();
  }