<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'subject_code',
        'subjects_name',
        'subjects_credit',
        'description',
    ];
}
