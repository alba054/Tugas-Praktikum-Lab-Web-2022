<?php

namespace App\Http\Controllers;

use App\Models\permission;
use Illuminate\Http\Request;


class PermissionController extends Controller
{
    public function index()
    {
    	$permission = permission::all();
    	return view('permission', ['data' => $permission]);
    }

    public function store( Request $request)
    {
        $nama = $request->Nama;
        $descriptions = $request->Descriptions;
        $status = $request->Status;
        permission::create(['name'=>$nama, 'descriptions'=>$descriptions,'status'=>$status]);
        return redirect("/permission");    
    }
    public function edit($id)
    {
        $data = permission::where("id", $id)->get();
        $data = $data[0];

        return view("edit", ["data" => $data]);
    }

    public function update(Request $request, $id)
    {
        $nama = $request->Nama;
        $descriptions = $request->Descriptions;
        $status = $request->Status;
        permission::where("id", $id)->update(['name'=>$nama, 'descriptions'=>$descriptions,'status'=>$status]);
        return redirect("/editPermission");
    }

    public function delete($id)
    {
        Permission::destroy($id);

        return redirect("/permission");
    }


}
