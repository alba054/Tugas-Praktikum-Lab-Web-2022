<?php

namespace App\Http\Controllers;

use App\Models\seller;
use App\Models\permission;
use App\Models\seller_permission;
use Illuminate\Http\Request;


class SellerController extends Controller
{
    public function index()
    {
    	$seller = seller::all();
        $permission = permission::all();
    	return view('seller', ['data' => $seller, "permissions" => $permission]);
    }

    public function store( Request $request)
    {
        $nama = $request->Nama;
        $address = $request->address;
        $gender = $request->gender;
        $no_hp = $request->no_hp;
        $status = $request->Status;
        $permission = $request->permission;
        $seller = seller::create(['name'=>$nama, 'address'=>$address,'gender'=>$gender, 'no_hp'=>$no_hp, 'status'=>$status]);
        seller_permission::create(["permission_id" => $permission, "seller_id" => $seller->id]);
        return redirect("/seller");    
    }
    public function edit($id)
    {
        $data = seller::where("id", $id)->get();
        $data = $data[0];

        return view("edit", ["data" => $data]);
    }

    public function update(Request $request, $id)
    {
        $nama = $request->Nama;
        $address = $request->address;
        $gender = $request->gender;
        $no_hp = $request->no_hp;
        $status = $request->Status;
        seller::where("id", $id)->update(['name'=>$nama, 'address'=>$address,'gender'=>$gender, 'no_hp'=>$no_hp, 'status'=>$status]);
        return redirect("/editSeller");
    }

    public function delete($id)
    {
        seller::destroy($id);

        return redirect("/seller");
    }

    // if($simpan){
    //     Alert::success(' Berhasil Tambah data ', ' Silahkan dicek kembali');
    // }else{
    //     Alert::error('data gagal disimpan ', ' Silahkan coba lagi');
    // }

    // return redirect()->back();
}
