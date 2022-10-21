<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VersionResource extends JsonResource
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
      'url' => $this->url,
      'version_number' => $this->version_number,
      'is_current' => $this->is_current,
      'created_at' => (string) $this->created_at,
      'updated_at' => (string) $this->updated_at,
      'image' => $this->image,
      'revisions' => $this->revisions,
    ];
  }
}
