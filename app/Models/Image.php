<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  use HasFactory;

  public function revisions()
  {
    return $this->hasMany(Revision::class);
  }

  public function project()
  {
    return $this->belongsTo(Project::class);
  }

  public function versions()
  {
    return $this->hasMany(Version::class);
  }
}
