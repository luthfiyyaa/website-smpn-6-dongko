<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Registration;

class PageController extends Controller
{
    public function home()
    {
        $latestNews = News::published()->latest()->take(3)->get();
        $galleries = Gallery::active()->ordered()->take(4)->get();
        
        return view('pages.home', compact('latestNews', 'galleries'));
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
        $galleries = Gallery::active()->ordered()->get();
        return view('pages.facilities', compact('galleries'));
    }

    public function ppdb()
    {
        return view('pages.ppdb');
    }

    public function submitRegistration(Request $request)
    {
        $validated = $request->validate([
            'student_name' => 'required|max:255',
            'parent_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:20',
            'birth_date' => 'required|date',
            'address' => 'required',
            'grade_level' => 'required',
            'previous_school' => 'nullable|max:255',
            'message' => 'nullable',
        ]);

        Ppdb::create($validated);

        return redirect()->route('ppdb')->with('success', 'Registration submitted successfully! We will contact you soon.');
    }
}