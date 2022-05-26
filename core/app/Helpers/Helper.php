<?php
namespace App\Helpers;

use App\Models\City;
use App\Models\Setting;

class Helper
{

    public static function IDGenerator($model, $trow, $length, $prefix){
        $data = $model::orderBy('id','desc')->first();
        if(!$data){
            $og_length = $length;
            $last_number = '';
        }else{
            $code = substr($data->$trow, strlen($prefix)+1);
            $actial_last_number = ($code/1)*1;
            $increment_last_number = ((int)$actial_last_number)+1;
            $last_number_length = strlen($increment_last_number);
            $og_length = $length - $last_number_length;
            $last_number = $increment_last_number;
        }
        $zeros = "";
        for($i=0;$i<$og_length;$i++){
            $zeros.="0";
        }
        return $prefix.'-'.$zeros.$last_number;
    }

    public static function getYoutubeIdFromUrl($url) {
        $parts = parse_url($url);
        if(isset($parts['query'])){
            parse_str($parts['query'], $qs);
            if(isset($qs['v'])){
                return $qs['v'];
            }else if(isset($qs['vi'])){
                return $qs['vi'];
            }
        }
        if(isset($parts['path'])){
            $path = explode('/', trim($parts['path'], '/'));
            return $path[count($path)-1];
        }
        return false;
    }


    public static function getSetting($key)
    {
        $Setting = Setting::where('key', $key)->value('value');
        return $Setting ?? 'Not Found';
    }

    public static function clean($string) {
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }


    public static function getCities()
    {
        return City::all();
    }


}
?>
