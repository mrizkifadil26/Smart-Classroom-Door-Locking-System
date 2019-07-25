<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
          'id' => $this->id,
          'course' => $this->course,
          'lecturer' => $this->lecturer,
          'students' => $this->students,
          'created_at' => (string) $this->created_at,
          'updated_at' => (string) $this->updated_at,
        ];
    }
}
