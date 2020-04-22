<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [];
    protected $hidden = [
        'id', 'company_id', 'user_id', 'manager_id', 'company_position_id', 'company_department_id'
    ];
    protected $cast = [];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function company_position()
    {
        return $this->belongsTo(CompanyPosition::class);
    }

    public function company_department()
    {
        return $this->belongsTo(CompanyDepartment::class);
    }

    public function manager()
    {
        return $this->belongsTo(User::class);
    }
}
