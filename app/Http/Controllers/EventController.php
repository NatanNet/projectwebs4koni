<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    // Fungsi untuk menampilkan form untuk menambah event
    public function create()
    {
        return view('events.create');
    }

    // Fungsi untuk menyimpan event ke database
    public function store(Request $request)
    {
        // Validasi data yang diupload
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Mengunggah gambar
        $imagePath = $request->file('image')->store('events', 'public');

        // Menyimpan data ke database
        Event::create([
            'title' => $request->title,
            'date' => $request->date,
            'image' => $imagePath,
        ]);

        // Redirect ke halaman yang menampilkan event
        return redirect()->route('events.index')->with('success', 'Event added successfully');
    }

    // Fungsi untuk menampilkan semua event
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }
}


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class EventController extends Controller
// {
//     public function show($id)
//     {
        // Ambil data event berdasarkan ID (nanti kamu bisa ganti ambil dari database)
//         $event = [
//             'id' => $id,
//             'title' => 'Contoh Event',
//             'description' => 'Ini adalah deskripsi lengkap dari event yang dipilih.',
//             'date' => '2025-05-01',
//             'image' => 'contoh.jpg'
//         ];

//         return view('landing.events.show', compact('event'));
//     }
// }


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
