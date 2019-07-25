<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'course' => $this->course,
            'classroom' => $this->classroom,
            'lecturer' => $this->course->lecturer,
            'day' => $this->day,
            'date' => $this->date,
            'time_start' => $this->time_start,
            'time_end' => $this->time_end,
            'students' => $this->students,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at
        ];
    }
}
