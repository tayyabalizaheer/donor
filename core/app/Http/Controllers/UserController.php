<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    //
    public function index($role='')
    {
        $users = User::orderBy('id','desc')->get();
        return view('admin.users.index',compact('users','role'));
    }

    public function create()
    {
        $user = new User();
        $roles = Role::all();
        return view('admin.users.create',compact('user', 'roles'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('admin.users.edit',compact('user', 'roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'role' => ['required'],
            'mobile' => ['required', 'string', 'max:60'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        $role = Role::findOrFail($request->role);
        $inputs = $request->except(['role','_token']);
        $inputs['password'] = Hash::make($request->password);
        $user = User::create($inputs);
        $user->assignRole($role->name);
        return back()->with('success','User Created');
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'mobile' => ['required', 'string', 'max:60'],
        ]);
        $user = User::find($id);
        if($user->email != $request->email){
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);
        }

        $inputs = $request->except(['role','_token','password']);
        if($request->password){
            $inputs['password'] = Hash::make($request->password);
        }
        User::where('id',$id)->update($inputs);
        if($request->role){
            $role = Role::findOrFail($request->role);
            if($request->role != $role->name){
                $user->assignRole($role->name);
            }
        }

        return back()->with('success','User updated');
    }

    public function roleDelete($id,$role)
    {
        $user = User::findOrFail($id);
        $user->removeRole($role);
        return back()->with('success','User Role updated');
    }
}
