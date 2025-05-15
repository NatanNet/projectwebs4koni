<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // Anda dapat mengambil data dari database, misal daftar event dan kategori olahraga.
        // Untuk contoh ini kita hardcode beberapa data.

        $upcomingEvents = [
            [
                'id' => 1,
                'title' => 'Bulu Tangkis 2025',
                'date' => '2025-06-10',
                'image' => 'marathon.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Soccer Championship',
                'date' => '2025-06-15',
                'image' => 'soccer.jpg'
            ],
            [
                'id' => 3,
                'title' => 'Basketball Tournament',
                'date' => '2025-07-20',
                'image' => 'basketball.jpg'
            ],
        ];

        $sportsCategories = [
            [
                'id' => 1,
                'name' => 'Soccer',
                'image' => 'soccer-category.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Basketball',
                'image' => 'basketball-category.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Running',
                'image' => 'running-category.jpg'
            ],
        ];

        return view('landing.index', compact('upcomingEvents', 'sportsCategories'));
    }

    // untuk fungsi search
    public function search(Request $request)
{
    $keyword = $request->get('q'); // Ambil input pencarian "q"

    // CONTOH: Jika Anda ingin mencari di array statis atau di DB.
    // Misal, kita buat array event statis (nanti kembangkan pakai DB).
    $allEvents = [
        ['title' => 'Concert & Music Fest', 'date' => '12 April 2025'],
        ['title' => 'Startup Workshop', 'date' => '18 April 2025'],
        ['title' => 'Charity Run', 'date' => '25 April 2025'],
        // ... data lainnya
    ];

    // Filter data secara sederhana (jika judul mengandung keyword)
    $results = array_filter($allEvents, function ($event) use ($keyword) {
        return stripos($event['title'], $keyword) !== false;
    });

    // Lalu lempar ke view
    return view('landing.search-result', compact('results', 'keyword'));
}

}

