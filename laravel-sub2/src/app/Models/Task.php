<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  // $fillable
  protected $fillable = ["task", "status"];
}
