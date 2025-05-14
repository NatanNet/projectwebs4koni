<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Tentukan kolom yang bisa diisi
    protected $fillable = ['title', 'date', 'image', 'description'];
}

