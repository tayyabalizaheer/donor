<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\City;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    public function buyerRegister()
    {
        $user = new User();
        $cities = City::all();
        $categories = Categories::all();
        $roles = Role::all();
        return view('auth.buyer.register', compact('user', 'cities', 'categories', 'roles'));
    }
    public function buyerRegisterStore(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'business_name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:60'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'city' => ['required', 'string', 'max:191'],
            'price' => ['required', 'string', 'max:191'],
            'interests' => ['required', 'string', 'max:191'],

        ]);
        DB::beginTransaction();
        $data = $request->except(['_token']);
        $user = User::create($data);
        $user->assignRole('buyer');

        // $data['adminEmail'] = 'amlakauctionae@gmail.com';
        Mail::send('email.welcome', $data, function ($msg) use ($data) {
            $msg->from('no-reply@amlakauction.ae');
            $msg->to($data['email'], 'Welcome '. $data['name'])->subject('Registration');
        });
        DB::commit();
        return redirect(url("/"))->with('success','Your registration is successful');
    }


    public function sellerRegister($page='')
    {
        $user = new User();
        $cities = City::all();
        $categories = Categories::all();
        $roles = Role::all();

        if ($page == '') {
            $page = $cities[0]->slug ?? '';
        }
        $content = Helper::getSetting($page);
        return view('auth.seller.register', compact('user', 'cities', 'categories', 'roles', 'content', 'page'));
    }
    public function sellerRegisterStore(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'business_name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:60'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'city' => ['required', 'string', 'max:191'],
            'address' => ['required', 'string', 'max:191'],
            'message' => ['required', 'string', 'max:5000'],

        ]);
        try {
            DB::beginTransaction();
            $data = $request->except(['_token']);
            $user = User::create($data);
            $user->assignRole('seller');

            Mail::send('email.welcome', $data, function ($msg) use ($data) {
                $msg->from('no-reply@amlakauction.ae');
                $msg->to($data['email'], 'Welcome ' . $data['name'])->subject('Registration');
            });
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }

        return redirect(url("/"))->with('success', 'Your registration is successful');
    }
}
