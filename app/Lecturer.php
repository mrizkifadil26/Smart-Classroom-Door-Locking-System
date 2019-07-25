<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $fillable = ['lecturer_id', 'nip'];

    public function user()
    {
        return $this->belongsTo(User::class, 'lecturer_id', 'id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
