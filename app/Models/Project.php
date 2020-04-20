<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [];
    protected $hidden = [];
    protected $cast = [];

    public function author()
    {
        return $this->hasOne(User::class);
    }
}
