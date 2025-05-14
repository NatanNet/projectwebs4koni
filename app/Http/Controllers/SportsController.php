<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function show($id)
    {
        $sports = [
            'id' => $id,
            'name' => 'Contoh Olahraga',
            'description' => 'Ini adalah deskripsi lengkap dari olahraga yang dipilih.',
            'image' => 'contoh-sports.jpg'
        ];

        return view('landing.sports.show', compact('sports'));
    }
}

