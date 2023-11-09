<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index()
    // {
    //     $admin = DB::table('admins')->get();
    //     return view('backend.admin.list_admin', ['admin' => $admin]);
    // }

    // public function show(Request $request, $id)
    // {
    //     $admin = Admin::find($id);
    //     $admin->show($request->all());
    //     return view('backend.admin.view_admin', compact('admin'));
    // }

    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return view('backend.admin.view_admin', compact('admin'));
    }

}
