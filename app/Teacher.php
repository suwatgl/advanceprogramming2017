<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'prefix_name',
        'first_name',
        'last_name',
        'tel',
        'email',
        'address'
    ];

    public function subject_tables()
    {
        return $this->hasMany('App\SubjectTable');
    }
}
