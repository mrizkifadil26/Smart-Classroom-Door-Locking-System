<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['uid', 'date_in', 'time_in', 'class_id', 'schedule_id'];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
}
