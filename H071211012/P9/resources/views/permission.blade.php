@extends('templates.layout')

@section('content')
    <div class="container-fluid mt-4">
        <div class="container d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mx-4" onclick="showInputModal('permission')" id="add-data-button">
                Add Data
            </button>
        </div>
        <div class="d-flex justify-content-center">
            <table class="list-table p-4 m-4 table-dark table-striped">
                <tr align="center">
                    <th class="nomor-tb">No</th>
                    <th class="tb">Nama Permission</th>
                    <th class="tb">Deskripsi</th>
                    <th class="tb">Status</th>
                    <th class="tb">Created At</th>
                    <th class="tb">Updated At</th>
                    <th class="tb">Aksi</th>
                </tr>
                @foreach ($permissions as $permission)
                    <tr align="center">
                        <td class="nomor-tb">{{ $loop->iteration }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->description }}</td>
                        <td>{{ $permission->status }}</td>
                        <td>{{ $permission->created_at }}</td>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-success modify" name="editData" value="$permission"
                                onclick="modify('modify', {{ $loop->iteration - 1 }}, 'permission')" id="edit">Edit</button>
                            <button type="submit" class="btn btn-danger delete" name="deleteData" value=""
                                onclick="showDeleteAlert('delete', 0)" id="delete-alert">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    {{-- Modal --}}
    <div class="mt-4 px-4 inputan">
        <div class='modalsec-container'>
            <div class='container p-4 modalsec'>
                <div class='row p-1'>
                    <div class='col'>
                        <div class='d-flex justify-content-center'>
                            <p class='h3' id='modalheadertxt'></p>
                            <button type='submit' class='btn btn-secondary' id='closeModal' name='closeModal'
                                onclick='closeModal()' style='font-size: 13px'>
                                <p class='h6'>X</p>
                            </button>
                        </div>
                    </div>
                </div>
                <form action='/add' method='post' id="modal_form" name="modalform">
                    @csrf
                    <div class='row mt-2'>
                        <div class='col'>
                            <input type='hidden' name='id_input' class='form-control input-field' id='id-input' required>
                        </div>
                    </div>
                    <div class='row mt-2'>
                        <label for='namapermission-input' class='input-name my-auto col-sm-3 '>Nama Permission</label>
                        <div class='col'>
                            <input type='text' name='namapermission-input' class='form-control input-field'
                                id='namapermission-input' required>
                        </div>
                    </div>
                    <div class='row mt-2'>
                        <label for='descriptionpermission-input' class='input-name my-auto col-sm-3 '>Deskripsi</label>
                        <div class='col'>
                            <input type='text' name='descriptionpermission-input' class='form-control input-field'
                                id='descriptionpermission-input' required>
                        </div>
                    </div>
                    <div class='row mt-2'>
                        <label for='statuspermission-input' class='input-name my-auto col-sm-3 '>Status</label>
                        <div class='col'>
                            <input type='text' min="0" name='statuspermission-input'
                                class='form-control input-field' id='statuspermission-input' required>
                        </div>
                    </div>
                    <div class='row mt-4'>
                        <button id='submit-button' name='submit' type='submit'>Submit</button>
                        <button id='update-button' name='update' type='submit'>Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Delete Modal --}}
    <div class="inputandel">
        <div class='modaldel-container'>
            <div class='container p-4 modaldel'>
                <div class='row p-1'>
                    <div class='col'>
                        <div class='d-flex justify-content-center'>
                            <p class='h3' id='modalheadertxt'></p>
                            Apakah Anda yakin ingin menghapus data ini?
                            </button>
                        </div>
                    </div>
                </div>
                <form action='/delete' method='post' id="modal_form" name="modalform">
                    @csrf
                    <input type='hidden' name='id_delete' class='form-control input-field' id='id-delete' required>
                    <div class="container d-flex justify-content-center">
                        <div class='row mt-4'>
                            <button id='yes-button' name='submit' type='submit'>Yes</button>
                            <button id='no-button' onclick="closeModal()" name='update' type='button'>No</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
