<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return view('categories', [
            'title' => 'Categories'
        ], compact('categories'));
    }

    // Query Builder
    public function insertCategoryQueryBuilder(Request $request)
    {
        $data = $request->validate([
            'namacategory-input' => 'required',
            'statuscategory-input' => 'required'
        ]);

        DB::table('categories')->insert([
            'name' => $data['namacategory-input'],
            'status' => $data['statuscategory-input'],
            'created_at' => now()
        ]);
        return redirect('categories')->with('success', 'Category added successfully');
    }

    // Eloquent
    public function insertCategoryEloquent(Request $request)
    {
        $data = $request->validate([
            'namecategory-input' => 'required',
            'statuscategory-input' => 'required'
        ]);

        $category = new category;
        $category->name = $data['namecategory-input'];
        $category->status = $data['statuscategory-input'];
        $category->save();
        return redirect('categories')->with('success', 'Category added successfully');
    }

}
