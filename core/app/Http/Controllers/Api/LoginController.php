<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Hash;
use Str;
use Validator;
use App\Models\User;
use App\Traits\ImageCompress;

class LoginController extends Controller
{
    use ImageCompress;
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        try {
            if ($validator->fails()) {
                return $this->sendError($validator->errors()->first(),200);
            }
        $user = User::where('email',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                if($user->hasRole('donor')){
                    $user->apitoken = Str::random(50);
                    $user->save();
                    return $this->sendResponse('Login successfully!',
                        $user
                    );
                }else{
                    return $this->sendError('Wrong Credentials',401);
                }
            }
        }
        return $this->sendError('Wrong Credentials',401);
        }
        catch (Exception $e) {
            return $this->sendError('Something Went Wrong.');
        }
    }

    public function profile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:191'],
            'mobile' => ['required', 'string', 'max:60'],
            'profile' => 'mimes:jpeg,jpg,png,gif|max:5000',
        ]);
        if($request->user->email != $request->email){
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);
        }
        try {
            if ($validator->fails()) {
                return $this->sendError($validator->errors()->first(),403);
            }
            $inputs = $request->except(['role','_token','password','user']);
            if($request->password){
                $inputs['password'] = Hash::make($request->password);
            }
            if($request->hasFile('profile')){
                $inputs['profile'] = $this->uploadImage($request->file('profile'));
            }
            User::where('id',$request->user->id)->update($inputs);
            $user = User::find($request->user->id);
            return $this->sendResponse('User updated',
                $user
            );
        }
        catch (Exception $e) {
            return $this->sendError('Something Went Wrong.');
        }
    }

}
