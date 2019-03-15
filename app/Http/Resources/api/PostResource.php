<?php

namespace App\Http\Resources\api;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'id'=> $this->id,
            'description'=>$this->post_text,
            'created_at'=>$this->created_at->toDateString(),
            'user'=> new UsersResource($this->user),
        ];
    }
}
