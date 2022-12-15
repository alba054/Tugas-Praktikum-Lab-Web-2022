<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Makanan;
use App\Models\Category;
use Illuminate\Http\Request;

class MakananController extends Controller
{


    public function index(){

        $data = Makanan::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view("mkn", ["makanans" => $data, "categories"=> $categories, "tags"=> $tags]);
    }

    // public function edit ($id) {
    //     $categories = Category::all();
    //     $tags = Tag::all();
    //     $data = Makanan::where("id", $id)->get();
    //     $data = $data[0];

    //     return view("mkn", ["data" => $data, "categories" => $categories, "tags" => $tags, "type_menu" => 'forms']);
    // }

    public function store(request $request) {
        $name = $request->name;
        $image =$request->image;
        $desk = $request->desk;
        $category = $request->category;
        $tag = $request->tag;

        Makanan::create(["name"=> $name, "image"=> $image, "description"=> $desk, "category"=> $category, "tag"=> $tag]);
        return redirect("/mkn");
    }

    public function update(Request $request, $id) {

        $name = $request->name;
        $image =$request->image;
        $desk = $request->desk;
        $category = $request->category;
        $tag = $request->tag;

        Makanan::where("id", $id)->update(["name"=> $name, "image"=> $image, "description"=> $desk, "category"=> $category, "tag"=> $tag]);

        $data = Makanan::all();
        return redirect("/mkn");

    }

    public function delete($id){
        Makanan::destroy($id);
        return redirect("/mkn");
    }

    
}
