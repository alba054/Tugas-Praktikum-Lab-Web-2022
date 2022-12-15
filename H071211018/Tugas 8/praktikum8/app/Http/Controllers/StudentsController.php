<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index() {
        $data = Student::all();

        // foreach (Student::all() as $student) 
        // {
            
        // }

        return view("index", ["data" => $data]);
    }

    public function store(Request $request) {
        $nama = $request->nama;
        $nim = $request->nim;
        $alamat = $request->alamat;
        $fakultas = $request->fakultas; 

        Student::create(["NIM" => $nim, "Nama" => $nama, "Alamat" => $alamat, "Fakultas" => $fakultas]);
        return redirect("/");
    }


    public function edit($id) {
        $data = Student::find($id);
    
        return view("edit", ["data" => $data]);
    }

    public function update(Request $request, $id) {
        $nama = $request->nama;
        $nim = $request->nim;
        $alamat = $request->alamat;
        $fakultas = $request->fakultas; 
    

        $student = Student::find($id);
 
        $student->Nama = $nama;
        $student->NIM = $nim;
        $student->Alamat = $alamat;
        $student->Fakultas = $fakultas;

 
        $student->save();
        return redirect("/");
    }

    public function destroy($id) {
        Student::destroy($id);
        return redirect("/");
    }

}

