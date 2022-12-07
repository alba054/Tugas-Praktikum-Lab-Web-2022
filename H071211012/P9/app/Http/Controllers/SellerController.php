<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seller;
use App\Models\seller_permission;
use App\Models\permission;
use Illuminate\Support\Facades\DB;

class SellerController extends Controller
{
    public function index()
    {
        $sellers = seller::all();
        return view('sellers', [
            'title' => 'Sellers',
            'sellers' => $sellers,
            'permissions' => permission::all()
        ]);
    }

    // Query Builder
    public function insertSellerQueryBuilder(Request $request)
    {
        $data = $request->validate([
            'namaseller-input' => 'required',
            'addresseller-input' => 'required',
            'genderseller-input' => 'required',
            'nohpseller-input' => 'required',
            'statusseller-input' => 'required'
        ]);

        DB::table('sellers')->insert([
            'name' => $data['namaseller-input'],
            'address'=> $data['addresseller-input'],
            'gender'=> $data['genderseller-input'],
            'no_hp'=> $data['nohpseller-input'],
            'status' => $data['statusseller-input'],
            'created_at' => now()
        ]);
        return redirect('sellers')->with('success', 'Seller added successfully');
    }

    // Eloquent
    public function insertSellerEloquent(Request $request)
    {
        dd($request->input("permission-input"));
        $data = $request->validate([
            'permission-input',
            'namaseller-input' => 'required',
            'addresseller-input' => 'required',
            'genderseller-input' => 'required',
            'nohpseller-input' => 'required',
            'statusseller-input' => 'required'
        ]);

        $seller = new seller;
        $seller->name = $data['namaseller-input'];
        $seller->address = $data['addresseller-input'];
        $seller->gender = $data['genderseller-input'];
        $seller->no_hp = $data['nohpseller-input'];
        $seller->status = $data['statusseller-input'];
        $seller->save();
        foreach ($data['permission-input'] as $permission_id) {
            $seller_permission = new seller_permission;
            $seller_permission->seller_id = $seller->id;
            $seller_permission->permission_id = $permission_id;
            $seller_permission->save();
        }
        // $seller_permission = new seller_permission;
        // $seller_permission->seller_id = $seller->id;
        // $seller_permission->permission_id = $data['permission-input'];
        return redirect('sellers')->with('success', 'Seller added successfully');
    }
}
