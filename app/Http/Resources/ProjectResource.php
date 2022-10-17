<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
      'name' => $this->name,
      'revision_rounds' => $this->revision_rounds,
      'status' => $this->status,
      'created_at' => (string) $this->created_at,
      'updated_at' => (string) $this->updated_at,
      'images' => $this->images,
      'companies' => $this->companies,
    ];
  }
}