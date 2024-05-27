<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class istigosah extends Model
{
    use HasFactory;
    protected $table = 'istigosah';
    protected $fillable = [
        'user_id', // Pastikan ini sesuai dengan nama kolom yang telah Anda tambahkan di dalam migrasi
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
