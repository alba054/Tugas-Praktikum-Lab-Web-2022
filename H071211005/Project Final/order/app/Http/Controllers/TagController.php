<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index() {
        $tags = Tag::all();

    return view('tag', ["tags" => $tags]);
    }

    public function store(request $request) {
        // dd($request);
        $name = $request->name;
        $desk = $request->desk;
        

        Tag::create(["name"=> $name, "description"=> $desk]);
        return redirect("/tag");
    }

    public function update(Request $request, $id) {

        $name = $request->name;
        $desk = $request->desk;
       

        Tag::where("id", $id)->update(["name"=> $name, "description"=> $desk]);

        $data = Tag::all();
        return redirect("/tag");

    }

    public function delete($id){
        Tag::destroy($id);
        return redirect("/tag");
    }
}
