<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{   
    public function index() {
        $categories = Category::all();

    return view('cat', ["categories" => $categories]);
    }


    public function store(request $request) {
        $name = $request->name;
        $desk = $request->desk;
        

        Category::create(["name"=> $name, "description"=> $desk]);
        return redirect("/cat");
    }

    public function update(Request $request, $id) {

        $name = $request->name;
        $desk = $request->desk;
       

        Category::where("id", $id)->update(["name"=> $name, "description"=> $desk]);

        $data = Category::all();
        return redirect("/cat");

    }

    public function delete($id){
        Category::destroy($id);
        return redirect("/cat");
    }
}
