<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($id)
    {
        // Ambil data event berdasarkan ID (nanti kamu bisa ganti ambil dari database)
        $event = [
            'id' => $id,
            'title' => 'Contoh Event',
            'description' => 'Ini adalah deskripsi lengkap dari event yang dipilih.',
            'date' => '2025-05-01',
            'image' => 'contoh.jpg'
        ];

        return view('landing.events.show', compact('event'));
    }
}


// namespace App\Http\Controllers;

// use App\Models\Event;
// use App\Models\SportCategory;

// class EventController extends Controller
// {
//     public function index()
//     {
        // Ambil semua event dari database sebagai koleksi model
        // $upcomingEvents = Event::all();  // Ini mengembalikan koleksi model, bukan array
    
        // Kirim data ke view
        // return view('landing.index', compact('upcomingEvents'));
//     }
    

// }
