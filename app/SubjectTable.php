<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectTable extends Model
{
    protected $fillable = [
        'teacher_id',
        'subject_id',
        'room_id',
        's_date_id',
        's_date_name',
        's_begin_time_id',
        's_begin_time_name',
        's_end_time_id',
        's_end_time_name',
        's_term_id',
        's_term_name',        
    ];

    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
