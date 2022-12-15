<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\SellerPermission;

class SellerController extends Controller
{
    public function index(){
        $data = Seller::all();
        $data = Permission::all();
        return view('seller', ["data" => $data , "permission_id" => $permission_id]);
    }

    public function store(request $request) {
        $nama = $request->tnama;
        $alamat= $request->taddress;
        $gender= $request->tgender;
        $nohp= $request->tnohp;
        $status= $request->tstatus;
        $permission= $request->permission_id;

        Seller::create(["name"=> $nama, "address"=> $alamat, "gender"=> $gender, "no_hp"=> $nohp, "status"=> $status]);
        return redirect("/s");
        SellerPermission::create(["permission_id" => $permission, "seller_id" => $seller->id]);
        return redirect("/s");
    }

    public function edit ($id){
        $data = Seller::where("id", $id)->get();
        $data = $data[0];

         return view("editseller", ["data" => $data]);
    }

    public function update(Request $request, $id) {

        $nama = $request->tnama;
        $status = $request->tstatus;

        Seller::where("id", $id)->update(["name" => $nama, "status" => $status]);

        $data =Seller::all();
        return redirect("/s");
    }

    public function delete($id){
        Seller::destroy($id);
        return redirect("/s");
    }
}
