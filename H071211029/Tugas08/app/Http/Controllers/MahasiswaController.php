<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        $data = Mahasiswa::paginate(10);
        return view('index', compact('data'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nim' => 'required|unique:mahasiswas',
            'nama' => 'required',
            'alamat' => 'required',
            'fakultas' => 'required'
        ]);
        Mahasiswa::create($request->all());
        $request->session()->flash('status', 'Data berhasil ditambahkan');
        return redirect('/index');
    }

    public function edit($id){
        $data = Mahasiswa::find($id);
        return view('editview', compact('data'));
    }

    public function update(Request $request, $id){
        $data = Mahasiswa::find($id);
        try {
            $data->update($request->all());
            $request->session()->flash('status', 'Data berhasil diupdate');
            //code...
        } catch (\Throwable $th) {
            //throw $th;
            $request->session()->flash('fail', 'Data double');

        }
        return redirect('/index');
    }

    public function delete(Request $request, $id){
        $data = Mahasiswa::find($id);
        $data->delete();
        $request->session()->flash('status', 'Data berhasil dihapus');
        return redirect('/index');
    }
}
