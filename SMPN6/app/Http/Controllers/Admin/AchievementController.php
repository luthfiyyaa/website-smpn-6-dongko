<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    /**
     * Display a listing of achievements
     */
    public function index()
    {
        $achievements = Achievement::ordered()->get();
        return view('admin.achievement.index', compact('achievements'));
    }

    /**
     * Show the form for creating a new achievement
     */
    public function create()
    {
        return view('admin.achievement.create');
    }

    /**
     * Store a newly created achievement
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'achievement' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'year' => 'required|integer|min:2000|max:' . (date('Y') + 1),
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $data = $request->only(['title', 'achievement', 'level', 'year', 'order']);
        
        // Set default order jika tidak diisi
        if (!$request->filled('order')) {
            $maxOrder = Achievement::max('order') ?? 0;
            $data['order'] = $maxOrder + 1;
        }

        // Set default is_active
        $data['is_active'] = $request->has('is_active') ? true : false;

        Achievement::create($data);

        return redirect()->route('admin.achievement.index')
                        ->with('success', 'Prestasi berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified achievement
     */
    public function edit(Achievement $achievement)
    {
        return view('admin.achievement.edit', compact('achievement'));
    }

    /**
     * Update the specified achievement
     */
    public function update(Request $request, Achievement $achievement)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'achievement' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'year' => 'required|integer|min:2000|max:' . (date('Y') + 1),
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $data = $request->only(['title', 'achievement', 'level', 'year', 'order']);
        
        // Handle is_active checkbox
        $data['is_active'] = $request->has('is_active') ? true : false;

        $achievement->update($data);

        return redirect()->route('admin.achievement.index')
                        ->with('success', 'Prestasi berhasil diperbarui!');
    }

    /**
     * Remove the specified achievement
     */
    public function destroy(Achievement $achievement)
    {
        $achievement->delete();

        return redirect()->route('admin.achievement.index')
                        ->with('success', 'Prestasi berhasil dihapus!');
    }
}