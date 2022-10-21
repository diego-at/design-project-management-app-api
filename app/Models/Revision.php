<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
  use HasFactory;
  protected $fillable = ['message', 'is_done', 'geometry_object', 'image_id'];


  public function version()
  {
    return $this->belongsTo(Version::class);
  }

  public function image()
  {
    return $this->belongsTo(Image::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
