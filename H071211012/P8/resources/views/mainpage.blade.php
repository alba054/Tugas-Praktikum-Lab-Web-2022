@extends('layout.template')
@section('content')
    <div class="container-fluid">
        <div class="menu-content">
            <div class="header container d-flex mt-4 pt-4">
                <div class="container ayn">
                    <p class="h4" id="ayn-text">AYN Coffee</p>
                    <hr id="ayn-line">
                </div>
                <button type="submit" class="btn btn-primary mx-4" onclick="showInputModal()" id="add-data-button">
                    Add Data
                </button>
            </div>
            <div class="title-button d-flex justify-content-between">
                <p class="h5 px-4" id="daftar-minuman-txt">Daftar Minuman</p>
            </div>

            <table class="list-table p-4 m-4">
                <tr align="center">
                    <th class="nomor-tb">No</th>
                    <th class="namaminuman-tb">Nama Minuman</th>
                    <th>Jenis Minuman</th>
                    <th class="desc-tb">Deskripsi</th>
                    <th>Harga</th>
                    <th class="aksi-tb">Aksi</th>
                </tr>
                @foreach ($minuman as $mnm)
                    <tr align="center">
                        <td>{{ ($minuman->currentPage() - 1) * $minuman->perPage() + $loop->iteration }}</td>
                        <td>{{ $mnm->nama_minuman }}</td>
                        <td>{{ $mnm->jenis_minuman }}</td>
                        <td>{{ $mnm->deskripsi }}</td>
                        <td>{{ $mnm->harga }}</td>
                        <td>
                            <button type="submit" class="btn btn-success modify" name="editData" value="{{ $mnm->id }}(#){{ $mnm->nama_minuman }}(#){{ $mnm->jenis_minuman }}(#){{ $mnm->deskripsi }}(#){{ $mnm->harga }}" onclick="modify('modify', {{ $loop->iteration - 1 }})" id="edit">Edit</button>
                            <button type="submit" class="btn btn-danger delete" value="{{$mnm->id}}" onclick="showDeleteAlert('delete', {{ $loop->iteration - 1 }})" id="delete-alert">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="d-flex justify-content-center">
                {{ $minuman->onEachSide(5)->links() }}
            </div>
        </div>

        {{-- MODALL --}}
        <div class="mt-4 px-4 inputan">
            <div class='modalsec-container'>
                <div class='container p-4 modalsec'>
                    <div class='row p-1'>
                        <div class='col'>
                            <div class='d-flex justify-content-center'>
                                <p class='h3' id='modalheadertxt'></p>
                                    <button type='submit' class='btn btn-secondary' id='closeModal' name='closeModal' onclick='closeModal()' style='font-size: 13px'>
                                        <p class='h6'>X</p>
                                    </button>
                            </div>
                        </div>
                    </div>
                    <form action='/add' method='post' id="modal_form" name="modalform">
                        @csrf
                        <div class='row mt-2'>
                            <div class='col'>
                                <input type='hidden' name='id_input' class='form-control input-field'
                                    id='id-input' required>
                            </div>
                        </div>
                        <div class='row mt-2'>
                            <label for='namaminuman-input' class='input-name my-auto col-sm-3 '>Nama Minuman</label>
                            <div class='col'>
                                <input type='text' name='nama_minuman' class='form-control input-field'
                                    id='namaminuman-input' required>
                            </div>
                        </div>
                        <div class='row mt-2'>
                            <label for='jenisminuman-input' class='input-name my-auto col-sm-3'>Jenis Minuman</label>
                            <div class='col'>
                                <input type='text' name='jenis_minuman' class='form-control input-field'
                                    id='jenisminuman-input' required>
                            </div>
                        </div>
                        <div class='row mt-2'>
                            <label for='deskripsi-input' class='input-name my-auto col-sm-3'>Deskripsi</label>
                            <div class='col'>
                                <input type='text' name='deskripsi' class='form-control input-field'
                                    id='deskripsi-input' required>
                            </div>
                        </div>
                        <div class='row mt-2'>
                            <label for='harga-input' class='input-name my-auto col-sm-3'>Harga</label>
                            <div class='col'>
                                <input type='number' min="0" name='harga' class='form-control input-field' id='harga-input'
                                    required>
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
                                        Are You Sure Want to Delete?
                                    </button>
                            </div>
                        </div>
                    </div>
                    <form action='/delete' method='post' id="modal_form" name="modalform">
                        @csrf
                                <input type='hidden' name='id_delete' class='form-control input-field'
                                    id='id-delete' required>
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
    </div>
@endsection
