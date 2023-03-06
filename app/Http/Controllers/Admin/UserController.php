<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('admin.user.index', compact('users'));
    }

    public function edit($id){

        $users=User::find($id);
        return view('admin.user.edit-user', compact('users'));
    }

    public function update(Request $request, $id){
        
        $users=User::find($id);
        if($users){
            // $users->name = $request->input('name');
            // $users->email = $request->input('email');
            $users->role_as = $request->role_as;
            $users->update();
            
        }
        return redirect('admin/users')->with('message', 'User Updated');
    }
}
