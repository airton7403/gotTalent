<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [];
    protected $hidden = [
        'id'
    ];
    protected $cast = [];

    public function position()
    {
        return $this->hasMany(CompanyPosition::class);
    }
}
