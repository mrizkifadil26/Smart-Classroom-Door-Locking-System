<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['student_id', 'nim'];

    public function user()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    public function schedules()
    {
        return $this->belongsToMany(Schedule::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
