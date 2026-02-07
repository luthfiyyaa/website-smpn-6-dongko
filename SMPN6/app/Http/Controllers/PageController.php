<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;
use App\Models\SchoolSetting; 
use App\Models\Facility;

class PageController extends Controller
{
    public function home()
    {
        $latestNews = News::published()->latest()->take(3)->get();
        $galleries = Gallery::active()->ordered()->take(8)->get();
        $settings = SchoolSetting::first();
        
        return view('pages.home', compact('latestNews', 'galleries', 'settings'));
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function academics()
    {
        return view('pages.academic');
    }

    public function studentAffairs()
    {
        return view('pages.student-affairs');
    }

    public function news()
    {
        $newsItems = News::published()->latest()->paginate(9);
        return view('pages.news', compact('newsItems'));
    }

    public function newsDetail($id)
    {
        $news = News::published()->findOrFail($id);
        
        $relatedNews = News::published()
            ->where('category', $news->category)
            ->where('id', '!=', $id)
            ->take(2)
            ->get();

        return view('pages.news-detail', compact('news', 'relatedNews'));
    }

    public function facilities()
    {
        $facilities = Facility::active()->ordered()->get();
        $galleries = Gallery::active()->ordered()->get();
        return view('pages.facilities', compact('facilities','galleries'));
    }

    public function ppdb()
    {
        $settings = SchoolSetting::first();
        return view('pages.ppdb', compact('settings'));
    }
}