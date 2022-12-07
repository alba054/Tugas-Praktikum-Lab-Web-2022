<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = permission::all();
        return view('permission', [
            'title' => 'Permission'
        ], compact('permissions'));
    }

    // Query Builder
    public function insertPermissionQueryBuilder(Request $request)
    {
        $data = $request->validate([
            'namapermission-input' => 'required',
            'descriptionpermission-input' => 'required',
            'statuspermission-input' => 'required'
        ]);

        DB::table('permissions')->insert([
            'name' => $data['namapermission-input'],
            'description' => $data['descriptionpermission-input'],
            'status' => $data['statuspermission-input'],
            'created_at' => now()
        ]);
        return redirect('permissions')->with('success', 'Permission added successfully');
    }

    // Eloquent
    public function insertPermissionEloquent(Request $request)
    {
        $data = $request->validate([
            'namapermission-input' => 'required',
            'descriptionpermission-input' => 'required',
            'statuspermission-input' => 'required'
        ]);

        $permission = new permission;
        $permission->name = $data['namapermission-input'];
        $permission->description = $data['descriptionpermission-input'];
        $permission->status = $data['statuspermission-input'];
        $permission->save();
        return redirect('permissions')->with('success', 'Permission added successfully');
    }
}
