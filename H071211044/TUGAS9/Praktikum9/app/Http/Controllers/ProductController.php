<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        $category = Category::all();
        $seller = Seller::all();

        return view("product", ["data" => $data, "seller" => $seller, "category" => $category]);
    }

    public function store(Request $request) {
        $nama = $request->tnama;
        $seller= $request->tseller;
        $category= $request->tcategory;
        $price= $request->tprice;
        $status= $request->tstatus;

        Product::create(["name"=> $nama, "seller_id"=> $seller, "category_id"=> $category, "price"=> $price, "status"=> $status]);
        return redirect("/p");
    }

    public function edit ($id){
        $data = Product::where("id", $id)->get();
        $data = $data[0];

         return view("editproduct", ["data" => $data]);
    }

    public function update(Request $request, $id) {

        $nama = $request->tnama;
        $seller= $request->tseller;
        $category= $request->tcategory;
        $price= $request->tprice;
        $status= $request->tstatus;

        Product::where("id", $id)->update(["name" => $nama, "seller_id"=> $seller, "category_id"=> $category, "price"=> $price, "status" => $status]);

        $data = Product::all();
        return redirect("/p");
    }

    public function delete($id){
        Product::destroy($id);
        return redirect("/p");
    }


}
