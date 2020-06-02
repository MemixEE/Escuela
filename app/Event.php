<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $fillable = [
      'name', 'anEvent','description','publicEvent','location'
  ];
}
