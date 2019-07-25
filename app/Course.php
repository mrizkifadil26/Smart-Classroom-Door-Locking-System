<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course', 'lecturer_id'];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class, 'lecturer_id', 'id');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
