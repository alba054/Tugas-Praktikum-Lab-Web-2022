<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerPermissionController extends Controller
{
    public function index()
    {
        return view('seller_permission', [
            'title' => 'Seller_Permission'
        ]);
    }
}
