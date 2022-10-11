<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'user_id',
        'kategori',
        'isi',
        'gambar',
        'is_spotlight'
        ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
