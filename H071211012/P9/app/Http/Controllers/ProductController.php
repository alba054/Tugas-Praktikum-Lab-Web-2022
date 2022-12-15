<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\seller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\setNameAttribute;

class ProductController extends Controller
{
    public function index()
    {
        $products = product::all();
        $sellers = seller::all();
        $categories = category::all();
        return view('products', [
            'title' => 'Products',
            'products' => $products,
            'sellers' => $sellers,
            'categories' => $categories
        ]);
    }

    // Query Builder
    public function insertProductQueryBuilder(Request $request)
    {
        $data = $request->validate([
            'namaproduct-input' => 'required',
            'priceproduct-input' => 'required',
            'statusproduct-input' => 'required',
            'categoryproduct-input' => 'required',
            'sellerproduct-input' => 'required'
        ]);
        DB::table('products')->insert([
            'name' => $data['namaproduct-input'],
            'price' => $data['priceproduct-input'],
            'status' => $data['statusproduct-input'],
            'categories_id' => $data['categoryproduct-input'],
            'sellers_id' => $data['sellerproduct-input'],
            'created_at' => now()
        ]);
        return redirect('products')->with('success', 'Product added successfully');
    }

    public function updateProductQueryBuilder(Request $request) {
        $data = $request->validate([
            'id_input' => 'required',
            'namaproduct-input' => 'required',
            'priceproduct-input' => 'required',
            'statusproduct-input' => 'required',
            'categoryproduct-input' => 'required',
            'sellerproduct-input' => 'required'
        ]);

        DB::table('products')
            ->where('id', $data['id_input'])
            ->update([
                'name' => $data['namaproduct-input'],
                'price' => $data['priceproduct-input'],
                'status' => $data['statusproduct-input'],
                'categories_id' => $data['categoryproduct-input'],
                'sellers_id' => $data['sellerproduct-input'],
                'updated_at' => now()
            ]);
        return redirect('products')->with('success', 'Product updated successfully');
    }

    // Eloquent
    public function insertProductEloquent(Request $request)
    {
        $data = $request->validate([
            'namaproduct-input' => 'required',
            'categoryproduct-input' => 'required',
            'sellerproduct-input' => 'required',
            'priceproduct-input' => 'required',
            'statusproduct-input' => 'required'
        ]);

        $product = new product;

        $product->name = $data['namaproduct-input'];
        $product->categories_id = $data['categoryproduct-input'];
        $product->sellers_id = $data['sellerproduct-input'];
        $product->price = $data['priceproduct-input'];
        $product->status = $data['statusproduct-input'];
        $product->created_at = now();
        $product->save();
        return redirect('products')->with('success', 'Product added successfully');
    }

}
