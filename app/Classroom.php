<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['classroom'];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
