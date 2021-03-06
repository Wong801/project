<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'nama', 'email', 'logo', 'website'
    ];
    public function employee(){
        return $this->hasMany('App\Employee');
    }
}