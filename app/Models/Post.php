<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Menambahkan kolom yang bisa di-assign secara massal
    protected $fillable = [
        'name',
        'email',
        'phone',
        'drink',
        'quantity',
        'address',
    ];
}
