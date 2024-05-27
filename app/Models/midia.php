<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class midia extends Model
{
    use HasFactory;
    protected $table = 'midia';
    protected $fillable = [
        'title', 'description', 'image'
    ];
}
