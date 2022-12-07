@extends('templates.layout')

@section('content')
    <div class="container-fluid mt-4">
        <div class="container d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mx-4" onclick="showInputModal('seller')" id="add-data-button">
                Add Data
            </button>
        </div>
        <div class="d-flex justify-content-center">
            <table class="list-table p-4 m-4 table-dark table-striped">
                <tr align="center">
                    <th class="nomor-tb">No</th>
                    <th class="tb">Nama Seller</th>
                    <th class="tb">Address</th>
                    <th class="tb">Gender</th>
                    <th class="tb">No. Hp</th>
                    <th class="tb">Status</th>
                    <th class="tb">Created At</th>
                    <th class="tb">Updated At</th>
                    <th class="tb">Aksi</th>
                </tr>
                @foreach ($sellers as $seller)
                    <tr align="center">
                        <td class="nomor-tb">{{ $loop->iteration }}</td>
                        <td>{{ $seller['name'] }} <br> [<a href="#" style="color: red">Details</a>]</td>
                        <td>{{ $seller['address'] }}</td>
                        <td>{{ $seller['gender'] }}</td>
                        <td>{{ $seller['no_hp'] }}</td>
                        <td>{{ $seller['status'] }}</td>
                        <td>{{ $seller['created_at'] }}</td>
                        <td>{{ $seller['updated_at'] }}</td>
                        <td>
                            <button type="submit" class="btn btn-success modify" name="editData" value="{{ $seller }}"
                                onclick="modify('modify', {{ $loop->iteration - 1 }}, 'seller')" id="edit">Edit</button>
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
                <form action='/insertseller' method='post' id="modal_form" name="modalform">
                    @csrf
                    <div class='row mt-2'>
                        <div class='col'>
                            <input type='hidden' name='id_input' class='form-control input-field' id='id-input' required>
                        </div>
                    </div>
                    <div class='row mt-2'>
                        <label for='namaseller-input' class='input-name my-auto col-sm-3 '>Nama Seller</label>
                        <div class='col'>
                            <input type='text' name='namaseller-input' class='form-control input-field'
                                id='namaseller-input' required>
                        </div>
                    </div>
                    <div class='row mt-2'>
                        <label for='addresseller-input' class='input-name my-auto col-sm-3 '>Address</label>
                        <div class='col'>
                            <input type='text' name='addresseller-input' class='form-control input-field'
                                id='addresseller-input' required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for='genderseller-input' class='input-name my-auto col-sm-3'>Gender</label>
                        <div class="col">
                            <select class="form-select input-field" name="genderseller-input" id="genderseller-input">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class='row mt-2'>
                        <label for='nohpseller-input' class='input-name my-auto col-sm-3 '>No Hp</label>
                        <div class='col'>
                            <input type='text' min="0" name='nohpseller-input' class='form-control input-field'
                                id='nohpseller-input' required>
                        </div>
                    </div>
                    <div class='row mt-2'>
                        <label for='nohpseller-input' class='input-name my-auto col-sm-3 '>No Hp</label>
                        <div class='col'>
                            @foreach ($permissions as $permission)
                                <input type="checkbox" name="permission-input[]" value="{{ $permission->id }}">
                                <label for="permission">{{ $permission->name }}</label><br>
                            @endforeach
                            {{-- <input type="checkbox" name="permission-input" value=""> --}}
                        </div>
                    </div>
                    <div class='row mt-2'>
                        <label for='statusseller-input' class='input-name my-auto col-sm-3 '>Status</label>
                        <div class='col'>
                            <input type='text' name='statusseller-input' class='form-control input-field'
                                id='statusseller-input' required>
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
                            <p class='h5' id='modalheadertxt'>
                                Apakah Anda yakin ingin menghapus data ini?
                            </p>
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
