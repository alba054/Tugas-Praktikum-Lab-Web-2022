<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    	$category = category::all();
    	return view('category', ["data" => $category]);
    }

    public function store(Request $request)
    {
        $nama = $request->Nama;
        $status = $request->Status;
        category::create(['name'=>$nama, 'status'=>$status]);
        // category::create($request->all());
        return redirect("/category");  
    }  
    
    public function edit($id)
    {
        $data = category::where("id", $id)->get();
        $data = $data[0];

        return view("edit", ["data" => $data]);
    }

    public function update(Request $request, $id)
    {
        $nama = $request->Nama;
        $status = $request->Status;
        category::where("id", $id)->update(['name'=>$nama, 'status'=>$status]);

        return redirect("/editCategory");
    }

    public function delete($id)
    {
        category::destroy($id);

        return redirect("/category");
    }

}


