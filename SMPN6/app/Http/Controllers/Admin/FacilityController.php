<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FacilityController extends Controller
{
    /**
     * Display a listing of facilities
     */
    public function index()
    {
        $facilities = Facility::orderBy('order', 'asc')->get();
        return view('admin.facilities.index', compact('facilities'));
    }

    /**
     * Show the form for creating a new facility
     */
    public function create()
    {
        return view('admin.facilities.create');
    }

    /**
     * Store a newly created facility
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable|string',
            'order' => 'nullable|integer|min:0',
        ]);

        $data = $request->only(['name', 'description', 'order', 'is_active']);
        
        // Upload image
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('facilities', 'public');
        }

        // Set default order jika tidak diisi
        if (!$request->filled('order')) {
            $maxOrder = Facility::max('order') ?? 0;
            $data['order'] = $maxOrder + 1;
        }

        // Set default is_active
        $data['is_active'] = $request->has('is_active');

        Facility::create($data);

        return redirect()->route('admin.facilities.index')
                        ->with('success', 'Fasilitas berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified facility
     */
    public function edit(Facility $facility)
    {
        return view('admin.facilities.edit', compact('facility'));
    }

    /**
     * Update the specified facility
     */
    public function update(Request $request, Facility $facility)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable|string',
            'order' => 'nullable|integer|min:0',
        ]);

        $data = $request->only(['name', 'description', 'order']);
        
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($facility->image && Storage::disk('public')->exists($facility->image)) {
                Storage::disk('public')->delete($facility->image);
            }
            
            // Upload new image
            $data['image'] = $request->file('image')->store('facilities', 'public');
        }

        // Handle is_active checkbox
        $data['is_active'] = $request->has('is_active');

        $facility->update($data);

        return redirect()->route('admin.facilities.index')
                        ->with('success', 'Fasilitas berhasil diperbarui!');
    }

    /**
     * Remove the specified facility
     */
    public function destroy(Facility $facility)
    {
        // Delete image
        if ($facility->image && Storage::disk('public')->exists($facility->image)) {
            Storage::disk('public')->delete($facility->image);
        }

        $facility->delete();

        return redirect()->route('admin.facilities.index')
                        ->with('success', 'Fasilitas berhasil dihapus!');
    }

    /**
     * Update order of facilities
     */
    public function updateOrder(Request $request)
    {
        $request->validate([
            'orders' => 'required|array',
            'orders.*.id' => 'required|exists:facilities,id',
            'orders.*.order' => 'required|integer|min:0',
        ]);

        foreach ($request->orders as $orderData) {
            Facility::where('id', $orderData['id'])
                   ->update(['order' => $orderData['order']]);
        }

        return response()->json(['success' => true]);
    }
}