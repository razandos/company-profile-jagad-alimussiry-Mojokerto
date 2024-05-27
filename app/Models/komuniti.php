<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komuniti extends Model
{
    use HasFactory;
    protected $table = 'komuniti';
    protected $fillable = [
        'user_id', 
        'title',
        'description',
        'descriptionlengkap',
        'image',
    ];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
