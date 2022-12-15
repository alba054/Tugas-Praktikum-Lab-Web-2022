const modal = document.getElementsByClassName('modalsec-container')[0];

function modify(button, index, status) {
    const modify = document.getElementsByClassName(button)[index];
    let data = JSON.parse(modify.value);
    if (status == 'product') {
        document.getElementById('modalheadertxt').innerHTML = 'Update Produk';
        document.getElementById('modal_form').setAttribute('action', 'editproduct');
        document.getElementById('id-input').value = data['id'];
        document.getElementById('namaproduct-input').value = data['name'];
        document.getElementById('categoryproduct-input').value = data['categories_id'];
        document.getElementById('sellerproduct-input').value = data['sellers_id'];
        document.getElementById('priceproduct-input').value = data['price'];
        document.getElementById('statusproduct-input').value = data['status'];
    } else if (status == 'category') {
        document.getElementById('modalheadertxt').innerHTML = 'Update Kategori';
        document.getElementById('modal_form').setAttribute('action', 'editcategory');
        document.getElementById('id-input').value = data['id'];
        document.getElementById('namacategory-input').value = data['name'];
        document.getElementById('statuscategory-input').value = data['status'];
    } else if (status == 'seller') {
        document.getElementById('modalheadertxt').innerHTML = 'Update Seller';
        document.getElementById('modal_form').setAttribute('action', 'editseller');
        document.getElementById('id-input').value = data['id'];
        document.getElementById('namaseller-input').value = data['name'];
        document.getElementById('addresseller-input').value = data['address'];
        document.getElementById('genderseller-input').value = data['gender'];
        document.getElementById('nohpseller-input').value = data['no_hp'];
        document.getElementById('statusseller-input').value = data['status'];
    } else if (status == 'permission') {
        document.getElementById('modalheadertxt').innerHTML = 'Update Hak Akses';
        document.getElementById('modal_form').setAttribute('action', 'editpermission');

    }
    document.getElementById('update-button').style.display = 'block';
    console.log(document.getElementById('modal_form').action);
    modal.style.display = 'block'; // Menampilkan modal
    // showToEdit(data);
}

// function showToEdit(data) {
//     if (data == "") {
//         return;
//     }
//     console.log(document.getElementById('modal_form').getAttribute('action'));
//     let result = data.split("(#)");
//     console.log(result);
//     document.getElementById('id-input').value = result[0];
//     document.getElementById('namaminuman-input').value = result[1];
//     document.getElementById('jenisminuman-input').value = result[2];
//     document.getElementById('deskripsi-input').value = result[3];
//     document.getElementById('harga-input').value = result[4];
// }

function showInputModal(status) {
    let action = document.modalform;
    if (status == 'product') {
        document.getElementById('modal_form').setAttribute('action', 'insertproduct');
        document.getElementById('modalheadertxt').innerHTML = 'Tambah Produk';
        action.action = 'insertproduct';
    } else if (status == 'category') {
        document.getElementById('id-input').value = '';
        document.getElementById('namacategory-input').value = '';
        document.getElementById('statuscategory-input').value = '';
        document.getElementById('modal_form').setAttribute('action', 'insertcategory');
        document.getElementById('modalheadertxt').innerHTML = 'Tambah Kategori';
    } else if (status == 'seller') {
        document.getElementById('id-input').value = '';
        document.getElementById('namaseller-input').value = '';
        document.getElementById('addresseller-input').value = '';
        document.getElementById('genderseller-input').value = '';
        document.getElementById('nohpseller-input').value = '';
        document.getElementById('statusseller-input').value = '';
        document.getElementById('modal_form').setAttribute('action', 'insertseller');
        document.getElementById('modalheadertxt').innerHTML = 'Tambah Seller';
    } else if (status == 'permission') {
        document.getElementById('id-input').value = '';
        document.getElementById('namapermission-input').value = '';
        document.getElementById('descriptionpermission-input').value = '';
        document.getElementById('statuspermission-input').value = '';
        document.getElementById('modal_form').setAttribute('action', 'insertpermission');
        document.getElementById('modalheadertxt').innerHTML = 'Tambah Permission';

    }
    modal.style.display = 'block';
    document.getElementById('submit-button').style.display = 'block';
}

function showDeleteAlert(classname, index) {
    document.getElementById('id-delete').value = document.getElementsByClassName(classname)[index].value;
    const deleteAlert = document.getElementsByClassName('modaldel-container')[0];
    deleteAlert.style.display = 'block';
}

function closeModal() {
    const deleteAlert = document.getElementsByClassName('modaldel-container')[0];
    deleteAlert.style.display = 'none';
    modal.style.display = 'none'; // Menutup modal
    document.getElementById('submit-button').style.display = 'none';
    document.getElementById('update-button').style.display = 'none';
    document.getElementsByClassName('modaldetail-container')[0].style.display = 'none';
}

function showDetails(classname, index) {
    let detail = document.getElementsByClassName('modaldetail-container')[0];
    detail.style.display = 'block';
    let datadetail = document.getElementsByClassName(classname)[index].value;
    console.log(datadetail);
    document.getElementById('show_detail').innerHTML = datadetail;
}
