<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data = Category::all();
        return view('category', ["data" => $data]);
    }

    public function store(request $request) {
        $nama = $request->tnama;
        $status= $request->tstatus;

        Category::create(["name"=> $nama, "status"=> $status]);
        return redirect("/c");
    }

    public function edit ($id){
        $data = Category::where("id", $id)->get();
        $data = $data[0];

         return view("editcategory", ["data" => $data]);
    }

    public function update(Request $request, $id) {

        $nama = $request->tnama;
        $status = $request->tstatus;

         Category::where("id", $id)->update(["name" => $nama, "status" => $status]);

        $data = Category::all();
        return redirect("/c");
    }

    public function delete($id){
        Category::destroy($id);
        return redirect("/c");
    }

}
