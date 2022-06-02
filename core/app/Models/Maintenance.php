<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
    protected $table = "maintenance";
    protected $fillable = [
    'id','project_id',	'detail',	'date',	'created_at',	'updated_at'
    ];
}
