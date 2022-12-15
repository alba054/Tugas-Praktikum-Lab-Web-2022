<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{

    public function index() {
        $pesanans = Tag::all();

    return view('tag', ["tags" => $tags]);
    }
    
    public function store(request $request) {
        $name = $request->name;
        $alamat = $request->alamat;
        $harga = $request->harga;
        $status = $request->status;
        

        Pesanan::create(["name"=> $name, "user"=> $name, "alamat"=> $alamat, "harga"=> $harga]);
        return redirect("/pes");
    }

    public function update(Request $request, $id) {

        $name = $request->name;
        $alamat = $request->alamat;
        $harga = $request->harga;
        $status = $request->status;
       

        Pesanan::where("id", $id)->update(["name"=> $name, "user"=> $name, "alamat"=> $alamat, "harga"=> $harga]);

        $data = Pesanan::all();
        return redirect("/pes");

    }

    public function delete($id){
        Pesanan::destroy($id);
        return redirect("/pes");
    }
}
