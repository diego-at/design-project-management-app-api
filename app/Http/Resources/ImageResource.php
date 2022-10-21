<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
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
      'status' => $this->status,
      'created_at' => (string) $this->created_at,
      'updated_at' => (string) $this->updated_at,
      'revision_rounds' => $this->revision_rounds,
      'max_revision_each_round' => $this->max_revision_each_round,
      'project' => $this->project,
      'revisions' => $this->revisions,
      'versions' => $this->versions,

    ];
  }
}
