<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //allow filing of this field
    protected $fillable = ['title', 'is_completed'];
   
}
