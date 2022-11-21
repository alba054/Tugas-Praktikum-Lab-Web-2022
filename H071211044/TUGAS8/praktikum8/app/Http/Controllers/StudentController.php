<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index (){
        $data = Student::all();
        return view('index', ["data" => $data]);
    }

    public function store(Request $request) {
        //
        $nim = $request->tnim;
        $nama = $request->tnama;
        $alamat = $request->talamat;
        $fakultas = $request->tfakultas;

         Student::create(["nim"=> $nim, "nama"=> $nama, "alamat"=> $alamat, "fakultas"=> $fakultas]);
         return redirect("/"); 

         
    }

    public function edit ($id){
           $data = Student::where("id", $id)->get();
           $data = $data[0];

            return view("edit", ["data" => $data]);
    }

    public function update(Request $request, $id) {

        $nim = $request->tnim;
        $nama = $request->tnama;
        $alamat = $request->talamat;
        $fakultas = $request->tfakultas;

        Student::where("id", $id)->update(["nim" => $nim, "nama" => $nama, "alamat" => $alamat, "fakultas" => $fakultas]);

        $data = Student::all();
        return redirect("/");
    }

    public function delete($id){
        Student::destroy($id);
        return redirect("/");
    }

}
