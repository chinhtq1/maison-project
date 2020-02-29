<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array->
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'is_public' => $this->is_public,
            'date_public' => $this->date_public,
            'main_picture' => asset($this->main_picture),
            'thumbnail'=>   asset($this->thumbnail),
            'fb_link' => $this->fb_link,
            'content' => $this->content
        ];
    }
}
