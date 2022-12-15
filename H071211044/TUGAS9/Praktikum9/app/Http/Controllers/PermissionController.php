<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(){
        $data = Permission::all();
        return view('permission', ["data" => $data]);
    }

    public function store(request $request) {
        $nama = $request->tnama;
        $descriptions = $request->tdescriptions;
        $status= $request->tstatus;

        Permission::create(["name"=> $nama, "descriptions"=> $descriptions, "status"=> $status]);
        return redirect("/ps");
    }

    public function edit ($id){
        $data = Permission::where("id", $id)->get();
        $data = $data[0];

         return view("editpermission", ["data" => $data]);
    }

    public function update(Request $request, $id) {

        $nama = $request->tnama;
        $descriptions = $request->tdescriptions;
        $status = $request->tstatus;

         Permission::where("id", $id)->update(["name" => $nama, "descriptions"=> $descriptions, "status" => $status]);

        $data = Permission::all();
        return redirect("/ps");
    }


    public function delete($id){
        Permission::destroy($id);
        return redirect("/ps");
    }
}
