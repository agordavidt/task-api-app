<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{

    use HasFactory;
    // allows users to make input to these fields
    protected $fillable = [
        'title',
        'content'

    ];


    
    // relationship definition
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


