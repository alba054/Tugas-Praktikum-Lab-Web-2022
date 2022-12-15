<?php

namespace App\Http\Controllers;

use App\Models\seller;
use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
    	$product = product::all();
        $category = category::all();
        $seller = seller::all();

    	return view('product', ['data' => $product, "seller" => $seller, "category" => $category]);
    }

    public function store( Request $request)
    {
        $nama = $request->Nama;
        $seller_id = $request->seller;
        $category_id = $request->category;
        $price = $request->Price;
        $status = $request->Status;
        product::create(['name'=>$nama, 'seller_id'=>$seller_id,'category_id'=>$category_id, 'price'=>$price, 'status'=>$status]);
        return redirect("/product");    
    }
    public function edit($id)
    {
        $data = product::where("id", $id)->get();
        $data = $data[0];

        return view("edit", ["data" => $data]);
    }

    public function update(Request $request, $id)
    {
        $nama = $request->Nama;
        $seller_id = $request->seller;
        $category_id = $request->category;
        $price = $request->Price;
        $status = $request->Status;
        product::where("id", $id)->update(['name'=>$nama, 'seller_id'=>$seller_id,'category_id'=>$category_id, 'price'=>$price, 'status'=>$status]);

        return redirect("/editProduct");
    }

    public function delete($id)
    {
        product::destroy($id);

        return redirect("/product");
    }

}
