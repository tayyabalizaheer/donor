<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function update(Request $request)
    {
        $inputs = $request->except('_token');
        foreach ($inputs as $key => $value) {
            $Setting = Setting::where('key', $key)->first();
            if (!$Setting) {
                $Setting = new Setting();
            }
            $Setting->key = $key;
            $Setting->value = str_replace('text-indent:-.25in', 'margin-left:.25in', $value);
            $Setting->save();
        }


        return back()->with('flash_success', 'Setting Updated');
    }

    public function login_pages($page='')
    {
        $cities = City::all();
        if($page==''){
            $page = $cities[0]->slug??'';
        }
        $content = Helper::getSetting($page);
        return view('admin.setting.login_pages',compact('cities', 'page', 'content'));
    }
}
