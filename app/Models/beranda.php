<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beranda extends Model
{
    use HasFactory;
    protected $table = 'beranda';
    protected $fillable = [
        'title', 'description', 'image'
    ];
}
