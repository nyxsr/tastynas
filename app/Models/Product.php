<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'categories_id',
        'harga',
        'deskripsi',
        'foto_produk1',
        'foto_produk2',
        'best_seller',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'categories_id');
    }
}
