<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.index');
    }

    public function getAllAdmins()
    {
        $admins = User::where('type','=','admin')->get();
        $active = 'admins';
        return view('admin.admin',compact('admins','active'));
    }

    public function addNewAdmin(Request $request)
    {
        $admin           = new User;
        $admin->name     = $request->name;
        $admin->password = bcrypt($request->password);
        $admin->type     = $request->type;
        $admin->email    = $request->email;
        $admin->mobile   = $request->mobile;

        if($admin->save()) {
            return response()->json(['success' => true, 'url' => $request->type.'s']);

        }
    }

    public function editAdmin(Request $id)
    {
       $admin = User::find($id);
        return response()->json($admin, 200);

    }

    public function updateAdmin(Request $request)
    {
        $admin           = User::find($request->id);
        $admin->name     = $request->name;
        $admin->email    = $request->email;
        $admin->mobile   = $request->mobile;

        if($request->password) {
            $admin->password = bcrypt($request->password);
        }

        if($admin->save()) {
            return response()->json(['success' => true, 'url' => $admin->type.'s']);
        }

    }

    public function deleteAdmin(Request $id)
    {
        $admin = User::find($id);
        $admin->delete();
    }

}
