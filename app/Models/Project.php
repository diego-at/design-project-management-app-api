<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  use HasFactory;
  protected $fillable = ['name', 'revision_rounds', 'status'];

  public function image()
  {
    return $this->hasMany(Image::class);
  }

  public function companies()
  {
    return $this->belongsToMany(Company::class, 'company_project', 'company_id', 'project_id');
  }
}
