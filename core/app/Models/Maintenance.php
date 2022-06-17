<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
    protected $table = "maintenance";
    protected $fillable = [
    'id', 'project_id', 'date', 'location', 'supervisor_id', 'operator_id', 'coordinator_id', 'water_tank', 'lamps', 'pressure_system', 'sand', 'carbon', 'membrane', 'microns', 'panel', 'feeding_pump', 'backwash', 'field_water', 'final_water', 'piping', 'steel_coated', 'thermopolis', 'transparent', 'floor_ceramic', 'water_taps', 'electricity', 'water_supply', 'light', 'wiring', 'banner', 'ph', 'turbidity', 'tds', 'odour', 'taste', 'colour', 'back_washing', 'jumbo_filter1', 'jumbo_filter2', 'wall_chalking', 'poster', 'cleening', 'rubbish', 'parking', 'other', 'updated_at', 'created_at'
    ];

    public function project()
    {
        return $this->hasOne(Project::class, 'id', 'project_id');
    }

    public function supervisor()
    {
        return $this->hasOne(User::class, 'id', 'supervisor_id');
    }

    public function coordinator()
    {
        return $this->hasOne(User::class, 'id', 'coordinator_id');
    }

    public function operator()
    {
        return $this->hasOne(User::class, 'id', 'operator_id');
    }

    static public function getDetails($id,$with=[])
    {
        $maintenance_q = Maintenance::orderBy('id');
        if(count($with)>0){
            $maintenance_q->with($with);
        }
        $maintenance = $maintenance_q->findOrFail($id);
        foreach( $maintenance->toArray() as $key => $value )
        {
            if(Maintenance::isJSON($value)){
                $maintenance->{$key} = Maintenance::isJSON($value);
            }

        }
        return $maintenance;
    }

    static public function isJSON($string){
        return is_string($string) && is_array(json_decode($string, true)) && (json_last_error() == JSON_ERROR_NONE) ? json_decode($string) : false;
    }




}
