<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RevisionResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray($request)
  {
    return [
      'id' => $this->id,
      'description' => $this->message,
      'is_done' => $this->is_done,
      'geometry_object' => $this->geometry_object,
      'created_at' => (string) $this->created_at,
      'updated_at' => (string) $this->updated_at,
      'image' => $this->image,
      'user' => $this->user,
    ];
  }
}
