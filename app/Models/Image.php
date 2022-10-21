<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  use HasFactory;
  protected $fillable = ['status'];



  public function project()
  {
    return $this->belongsTo(Project::class);
  }

  public function versions()
  {
    return $this->hasMany(Version::class);
  }

  public function revisions()
  {
    return $this->hasMany(Revision::class);
  }
}
