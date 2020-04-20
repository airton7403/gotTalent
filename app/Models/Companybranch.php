<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companybranch extends Model
{
    protected $fillable = [];
    protected $hidden = [];
    protected $cast = [];

    public function branch()
    {
        return $this->hasOne(Company::class);
    }
}
