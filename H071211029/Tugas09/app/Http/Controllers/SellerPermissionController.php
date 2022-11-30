<?php

namespace App\Http\Controllers;

use App\Models\SellerPermission;
use App\Models\Seller;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellerPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('seller_permissions')->get();
        return view('sellerpermission')->with(compact('data'));
        
    }

    public function view(){
        $data1 = DB::table('sellers')->get();
        $data2 = DB::table('permissions')->get();
        return view('add.sellerpermission')->with(compact('data1', 'data2'));
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
        // $validatedData = $request->validate([
        //     'seller_id' => 'required',
        //     'permission_id' => 'required',
        // ]);
        
        SellerPermission::create($request->all());
        $request->session()->flash('status', 'Data berhasil ditambahkan');
        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellerPermission  $sellerPermission
     * @return \Illuminate\Http\Response
     */
    public function show(SellerPermission $sellerPermission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SellerPermission  $sellerPermission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = SellerPermission::find($id);
        $dataSeller = Seller::all();
        $dataPermission = Permission::all();
        return view('edit.editsellerpermission', compact('data', 'dataSeller', 'dataPermission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SellerPermission  $sellerPermission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SellerPermission $sellerPermission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellerPermission  $sellerPermission
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id){
        $data = SellerPermission::find($id);
        $data->delete();
        $request->session()->flash('status', 'Data berhasil dihapus');
        return redirect('/index');
    }
}
