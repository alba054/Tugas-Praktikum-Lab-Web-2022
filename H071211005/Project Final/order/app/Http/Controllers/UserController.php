<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

    return view('user', ["users" => $users]);
    }

    public function store(request $request) {
        $name = $request->name;
        $email = $request->email;
        $bio = $request->bio;
        $username = $request->username;
        $image = $request->image;


        User::create(["name"=> $name, "email"=> $email, "biography"=> $bio, "username"=> $username, "image"=> ""]);
        return redirect("/user");
    }

    public function update(Request $request, $id) {

        $name = $request->name;
        $email = $request->email;
        $bio = $request->bio;
        $username = $request->username;
        $image = $request->image;
       

        User::where("id", $id)->update(["name"=> $name, "email"=> $email, "biography"=> $bio, "username"=> $username, "image"=> $image]);

        $data = User::all();
        return redirect("/user");

    }

    public function delete($id){
        User::destroy($id);
        return redirect("/user");
    }
}
