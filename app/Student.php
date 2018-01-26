<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'std_code',
        'prefix_name',
        'first_name',
        'last_name',
        'tel',
        'email',
        'address',
        'age',
    ];
}
