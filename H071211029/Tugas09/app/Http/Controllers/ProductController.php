<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Seller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::with('category', 'seller')->paginate(10);
        return view('product', compact('data'));
    }

    public function view(){
        $dataSeller = Seller::all();
        $dataCategory = Category::all();
        return view('add.product', compact('dataSeller', 'dataCategory'));
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
        $validatedData = $request->validate([
            'nama' => 'required',
            'price' => 'required',
        ]);
        Product::create($request->all());
        $request->session()->flash('status', 'Data berhasil ditambahkan');
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        $dataSeller = Seller::all();
        $dataCategory = Category::all();
        return view('edit.editproduct', compact('data', 'dataSeller', 'dataCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Product::find($id);
        $data->update($request->all());
        $request->session()->flash('status', 'Data berhasil diupdate');
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id){
        $data = Product::find($id);
        $data->delete();
        $request->session()->flash('status', 'Data berhasil dihapus');
        return redirect('/product');
    }
}
