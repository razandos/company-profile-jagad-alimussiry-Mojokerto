<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jamedia extends Model
{
    use HasFactory;
    protected $table = 'jamedia';
    protected $fillable = [
        'title', 'description', 'image'
    ];
}
