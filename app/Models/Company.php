<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [];
    protected $hidden = [];
    protected $cast = [];

    public function branch()
    {
        return $this->hasMany(Companybranch::class);
    }
}