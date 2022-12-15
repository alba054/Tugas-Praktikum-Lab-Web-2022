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
        $permission = Permission::all();
        return view('seller', ["data" => $data, "permission_id" => $permission]);
    }

    public function store(request $request) {
        $nama = $request->name;
        $alamat= $request->address;
        $gender= $request->gender;
        $nohp= $request->no_hp;
        $status= $request->status;
        $permission = $request->permission_id;

        $seller = Seller::create(["name"=> $nama, "address"=> $alamat, "gender"=> $gender, "no_hp"=> $nohp, "status"=> $status, ""]);
        // dd($permission);
        SellerPermission::create(["permission_id" => $permission, "seller_id" => $seller->id]);
        return redirect("/seller");

    }

    public function edit ($id){
        $data = Seller::where("id", $id)->get();
        $data = $data[0];

         return view("editseller", ["data" => $data]);
    }

    public function update(Request $request, $id) {
        $nama = $request->name;
        $alamat = $request->address;
        $gender= $request->gender;
        $nohp= $request->no_hp;
        $status = $request->status;
        
         Seller::where("id", $id)->update(["name" => $nama, "address" => $alamat, "gender" => $gender, "no_hp" => $nohp, "status" => $status]);

        $data = Seller::all();
        return redirect("/seller");
    }

    public function delete($id){
            Seller::destroy($id);
            return redirect("/seller");
    }

}
