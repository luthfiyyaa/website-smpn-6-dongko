<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = News::with('author')->latest();

        // Search filter
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // Category filter
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Published status filter
        if ($request->filled('is_published')) {
            $query->where('is_published', $request->is_published);
        }

        $news = $query->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'content' => 'required',
            'category' => 'required|max:100',
            'image' => 'nullable|image|max:2048',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('news', 'public');
        }

        $validated['created_by'] = auth()->id();
        $validated['is_published'] = $request->has('is_published');
        $validated['published_at'] = $request->published_at ?? now();

        News::create($validated);

        return redirect()->route('admin.news.index')->with('success', 'News created successfully!');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'content' => 'required',
            'category' => 'required|max:100',
            'image' => 'nullable|image|max:2048',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
            'remove_image' => 'boolean',
        ]);

        // Handle image removal
        if ($request->has('remove_image') && $request->remove_image) {
            if ($news->image && Storage::disk('public')->exists($news->image)) {
                Storage::disk('public')->delete($news->image);
            }
            $validated['image'] = null;
        }

        // Handle new image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($news->image && Storage::disk('public')->exists($news->image)) {
                Storage::disk('public')->delete($news->image);
            }
            $validated['image'] = $request->file('image')->store('news', 'public');
        }

        // Handle is_published checkbox
        $validated['is_published'] = $request->has('is_published');

        $news->update($validated);

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully!');
    }

    public function destroy(News $news)
    {
        // Delete image
        if ($news->image && Storage::disk('public')->exists($news->image)) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully!');
    }
}


// namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
// use App\Models\News;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

// class NewsController extends Controller
// {
//     public function index()
//     {
//         $news = News::latest()->paginate(10);
//         return view('admin.news.index', compact('news'));
//     }

//     public function create()
//     {
//         return view('admin.news.create');
//     }

//     public function store(Request $request)
//     {
//         $validated = $request->validate([
//             'title' => 'required|max:255',
//             'excerpt' => 'required',
//             'content' => 'required',
//             'category' => 'required|max:100',
//             'image' => 'nullable|image|max:2048',
//             'is_published' => 'boolean',
//             'published_at' => 'nullable|date',
//         ]);

//         if ($request->hasFile('image')) {
//             $validated['image'] = $request->file('image')->store('news', 'public');
//         }

//         $validated['created_by'] = auth()->id();
//         $validated['published_at'] = $validated['published_at'] ?? now();

//         News::create($validated);

//         return redirect()->route('admin.news.index')->with('success', 'News created successfully!');
//     }

//     public function edit(News $news)
//     {
//         return view('admin.news.edit', compact('news'));
//     }

//     public function update(Request $request, News $news)
//     {
//         $validated = $request->validate([
//             'title' => 'required|max:255',
//             'excerpt' => 'required',
//             'content' => 'required',
//             'category' => 'required|max:100',
//             'image' => 'nullable|image|max:2048',
//             'is_published' => 'boolean',
//             'published_at' => 'nullable|date',
//         ]);

//         if ($request->hasFile('image')) {
//             // Delete old image
//             if ($news->image && Storage::disk('public')->exists($news->image)) {
//                 Storage::disk('public')->delete($news->image);
//             }
//             $validated['image'] = $request->file('image')->store('news', 'public');
//         }

//         $news->update($validated);

//         return redirect()->route('admin.news.index')->with('success', 'News updated successfully!');
//     }

//     public function destroy(News $news)
//     {
//         // Delete image
//         if ($news->image && Storage::disk('public')->exists($news->image)) {
//             Storage::disk('public')->delete($news->image);
//         }

//         $news->delete();

//         return redirect()->route('admin.news.index')->with('success', 'News deleted successfully!');
//     }
// }
