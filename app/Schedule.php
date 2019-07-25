<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['day', 'date', 'time_start', 'time_end'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'class_id', 'id');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
