<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'poster',
        'link_event',
        'nama_event',
        'is_show'
    ];
    public $timestamps = false;
}
