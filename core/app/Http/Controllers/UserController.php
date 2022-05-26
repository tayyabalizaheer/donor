<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\City;
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
        $cities = City::all();
        $categories = Categories::all();
        $roles = Role::all();
        return view('admin.users.create',compact('user','cities', 'categories', 'roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'business_name' => ['required', 'string', 'max:255'],
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
}
