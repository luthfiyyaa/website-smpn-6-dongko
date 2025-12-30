<?php

// namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
// use App\Models\News;
// use App\Models\Gallery;
// use App\Models\Ppdb;

// class DashboardController extends Controller
// {
//     public function index()
//     {
//         return view('admin.dashboard', [
//             'newsCount' => News::count(),
//             'galleryCount' => Gallery::count(),
//             'ppdbCount' => Ppdb::count(),
//         ]);
//     }
// }


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Ppdb;
use App\Models\Registration;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_news' => News::count(),
            'published_news' => News::published()->count(),
            'total_galleries' => Gallery::count(),
            //'pending_registrations' => Ppdb::pending()->count(),
            //'total_registrations' => Ppdb::count(),
        ];

        $recent_news = News::latest()->take(5)->get();
        //$recent_registrations = Ppdb::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_news'));

        //return view('admin.dashboard', compact('stats', 'recent_news', 'recent_registrations'));
    }
}
