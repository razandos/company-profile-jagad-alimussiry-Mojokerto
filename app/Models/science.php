<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class science extends Model
{
    use HasFactory;
    protected $table = 'science';
    protected $fillable = [
        'user_id', 
        'title',
        'description',
        'image',
    ];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
