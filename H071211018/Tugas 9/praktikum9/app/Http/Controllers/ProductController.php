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
        // dd($data);
        return view("products", ["product" => $data, "seller_id" => $seller, "category_id" => $category]);
    }

    public function store(request $request){
        $nama = $request->name;
        $price =$request->price;
        $status=$request->status;
        $seller = $request->seller_id;
        $category= $request->category_id;
        
        Product::create(["name"=> $nama, "price"=>$price, "status"=>$status, "seller_id"=>$seller, "category_id"=> $category]);
            return redirect("/product");
}

        public function edit ($id){
            $data = Product::where("id", $id)->get();
            $data = $data[0];

            return view("editproduct", ["data" => $data]);
        }       

        public function update(Request $request, $id) {
            $nama = $request->name;
            $price =$request->price;
            $status=$request->status;
            $seller = $request->seller_id;
            $category= $request->category_id;
            

            Product::where("id", $id)->update(["name"=> $nama, "price"=>$price, "status"=>$status, "seller_id"=>$seller, "category_id"=> $category]);

            $data = Product::all();
            return redirect("/product");
        }

        public function delete($id){
            Product::destroy($id);
            return redirect("/product");
        }


     

}