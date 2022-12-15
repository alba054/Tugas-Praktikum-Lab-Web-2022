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
        $nama = $request->name;
        $description = $request->description;
        $status= $request->status;

        Permission::create(["name"=> $nama, "description"=> $description, "status"=> $status]);
        return redirect("/permission");
    }

    public function edit ($id){
        $data = Permission::where("id", $id)->get();
        $data = $data[0];

         return view("editpermission", ["data" => $data]);
    }

    public function update(Request $request, $id) {
        $nama = $request->name;
        $description = $request->description;
        $status = $request->status;
        
         Permission::where("id", $id)->update(["name" => $nama, "description" => $description, "status" => $status]);

        $data = Permission::all();
        return redirect("/permission");
    }

    public function delete($id){
        Permission::destroy($id);
        return redirect("/permission");
}
}
