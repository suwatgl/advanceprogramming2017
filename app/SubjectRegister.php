<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectRegister extends Model
{
    protected $fillable = ['student_id','subject_table_id','grade'];
    public function student () {
        return $this->belongsTo('App\Student');
    }
}
