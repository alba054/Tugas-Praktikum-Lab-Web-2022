<?php

namespace App\Http\Controllers;

use App\Models\Minuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MinumanController extends Controller
{
    public function index() {
        $minuman = DB::table('minumen')->paginate(10);
        return view('mainpage', compact('minuman'));
    }

    public function add(Request $request) {
        $this->validate($request, [
            'nama_minuman' => 'required',
            'jenis_minuman' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required'
        ]);

        Minuman::create(request()->all());
        return redirect()->route('index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit (Request $request) {
        $this->validate($request, [
            'nama_minuman' => 'required',
            'jenis_minuman' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required'
        ]);

        $minuman = Minuman::find($request->id_input);
        $minuman->update($request->all());
        return redirect('/')->with('success', 'Data berhasil diubah');
    }

    public function delete(Request $request){
        Minuman::destroy($request->id_delete);
        return redirect('/')->with('success', 'Data berhasil dihapus');
    }
}
