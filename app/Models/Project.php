<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [];
    protected $hidden = [
        'id', 'user_id', 'company_id'
    ];
    protected $cast = [];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
