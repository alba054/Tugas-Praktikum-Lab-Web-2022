const modal = document.getElementsByClassName('modalsec-container')[0];
function modify(button, index) {
    const modify = document.getElementsByClassName(button)[index];
    const dataID = modify.value;
    document.getElementById('modalheadertxt').innerHTML = 'Update Minuman';
    document.getElementById('update-button').style.display = 'block';
    modal.style.display = 'block'; // Menampilkan modal
    showToEdit(dataID);
}

function showInputModal() {
    document.getElementById('modalheadertxt').innerHTML = 'Tambah Minuman';
    document.getElementById('id-input').value = '';
    document.getElementById('namaminuman-input').value = '';
    document.getElementById('jenisminuman-input').value = '';
    document.getElementById('deskripsi-input').value = '';
    document.getElementById('harga-input').value = '';
    let action = document.modalform;
    action.action = 'add';
    console.log(action.action);
    modal.style.display = 'block';
    document.getElementById('submit-button').style.display = 'block';
}

function showDeleteAlert(classname, index) {
    document.getElementById('id-delete').value = document.getElementsByClassName(classname)[index].value;
    const deleteAlert = document.getElementsByClassName('modaldel-container')[0];
    deleteAlert.style.display = 'block';
}

function closeModal() {
    modal.style.display = 'none'; // Menutup modal
    document.getElementById('submit-button').style.display = 'none';
    document.getElementById('update-button').style.display = 'none';
    const deleteAlert = document.getElementsByClassName('modaldel-container')[0];
    deleteAlert.style.display = 'none';
}

function showToEdit(dataID) {
    if (dataID == "") {
        return;
    }
    document.getElementById('modal_form').setAttribute('action', 'edit');
    console.log(document.getElementById('modal_form').getAttribute('action'));
    let result = dataID.split("(#)");
    console.log(result);
    document.getElementById('id-input').value = result[0];
    document.getElementById('namaminuman-input').value = result[1];
    document.getElementById('jenisminuman-input').value = result[2];
    document.getElementById('deskripsi-input').value = result[3];
    document.getElementById('harga-input').value = result[4];
}
