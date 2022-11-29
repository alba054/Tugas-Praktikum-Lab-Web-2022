<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Permission;
use App\Models\SellerPermission;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Seller::with(['product', 'permission'])->get();
        return view('seller', compact('data'));
    }
    public function view(){
        // $dataSeller = Seller::all();
        $dataPermission = Permission::all();
        return view('add.seller', compact('dataPermission'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'no_hp' => 'required'
        ]);
        $dataSeller = Seller::create($request->all());
        $request->session()->flash('status', 'Data berhasil ditambahkan');
        return redirect('/seller');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Seller::find($id);
        return view('edit.editseller', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Seller::find($id);
        $data->update($request->all());
        $request->session()->flash('status', 'Data berhasil diupdate');
        return redirect('/seller');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id){
        $data = Seller::find($id);
        $data->delete();
        $request->session()->flash('status', 'Data berhasil dihapus');
        return redirect('/seller');
    }
}
