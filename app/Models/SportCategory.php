<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportCategory extends Model
{
    use HasFactory;

    // Tentukan kolom yang bisa diisi jika diperlukan
    protected $fillable = ['name', 'image'];
}

