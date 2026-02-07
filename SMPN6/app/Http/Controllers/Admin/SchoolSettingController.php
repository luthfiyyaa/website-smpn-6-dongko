<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchoolSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SchoolSettingController extends Controller
{
    /**
     * Display the school settings form
     */
    public function index()
    {
        $settings = SchoolSetting::first();
        
        // Jika belum ada data, buat record kosong
        if (!$settings) {
            $settings = SchoolSetting::create([]);
        }
        
        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Update school settings
     */
    public function update(Request $request)
    {
        $request->validate([
            'principal_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'principal_name' => 'nullable|string|max:255',
            'principal_title' => 'nullable|string|max:255',
            'principal_message' => 'nullable|string',
            'ppdb_start_date' => 'nullable|date',
            'ppdb_end_date' => 'nullable|date|after_or_equal:ppdb_start_date',
            'test_start_date' => 'nullable|date',
            'test_end_date' => 'nullable|date|after_or_equal:test_start_date',
            'announcement_date' => 'nullable|date',
            'reregistration_start_date' => 'nullable|date',
            'reregistration_end_date' => 'nullable|date|after_or_equal:reregistration_start_date',
            'academic_year_start' => 'nullable|date',
        ]);

        $settings = SchoolSetting::first();
        
        if (!$settings) {
            $settings = new SchoolSetting();
        }

        // Handle foto kepala sekolah
        if ($request->hasFile('principal_photo')) {
            // Hapus foto lama jika ada
            if ($settings->principal_photo && Storage::disk('public')->exists($settings->principal_photo)) {
                Storage::disk('public')->delete($settings->principal_photo);
            }
            
            // Upload foto baru
            $path = $request->file('principal_photo')->store('principal', 'public');
            $settings->principal_photo = $path;
        }

        // Update data lainnya
        $settings->principal_name = $request->principal_name;
        $settings->principal_title = $request->principal_title;
        $settings->principal_message = $request->principal_message;
        $settings->ppdb_start_date = $request->ppdb_start_date;
        $settings->ppdb_end_date = $request->ppdb_end_date;
        $settings->test_start_date = $request->test_start_date;
        $settings->test_end_date = $request->test_end_date;
        $settings->announcement_date = $request->announcement_date;
        $settings->reregistration_start_date = $request->reregistration_start_date;
        $settings->reregistration_end_date = $request->reregistration_end_date;
        $settings->academic_year_start = $request->academic_year_start;
        
        $settings->save();

        return redirect()->route('admin.settings.index')
                        ->with('success', 'Pengaturan sekolah berhasil diperbarui!');
    }
}