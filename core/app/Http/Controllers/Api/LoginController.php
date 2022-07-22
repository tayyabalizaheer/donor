<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Hash;
use Str;
use Validator;
use App\Models\User;
class LoginController extends Controller
{

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

}
