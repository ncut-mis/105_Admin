<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $table = 'clinics';
    protected $fillable = [
        'name', 'category_id'
    ];
    public function staff()
    {
        return $this->hasMany(Staff::class);
    }
}
