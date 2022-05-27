<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',	'assessment',	'requester',	'district',	'tehsil',	'area',	'quality_report',	'proposal_date',	'budget_date',	'approval_date',	'completion_date',	'supervisor',	'coordinator',	'installation_date',	'rehabilitation_date',	'maintenance_date','status',
    ];

    /**
     * Get the user associated with the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function requesterUser()
    {
        return $this->hasOne(User::class, 'id', 'requester');
    }


}
