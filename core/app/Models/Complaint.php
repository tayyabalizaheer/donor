<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    protected $fillable = [
    'id','project_id',	'detail',	'date','status',	'created_at',	'updated_at'
    ];

    public function project()
    {
        return $this->hasOne(Project::class, 'id', 'project_id');
    }
}
