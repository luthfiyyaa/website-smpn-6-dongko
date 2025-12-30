<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ppdb;

class PpdbController extends Controller
{
    public function index()
    {
        $ppdb = Ppdb::latest()->get();
        return view('admin.ppdb.index', compact('ppdb'));
    }

    public function destroy(Ppdb $ppdb)
    {
        $ppdb->delete();
        return back()->with('success', 'Data PPDB dihapus');
    }
}



// namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
// use App\Models\Registration;
// use Illuminate\Http\Request;

// class RegistrationController extends Controller
// {
//     public function index(Request $request)
//     {
//         $query = Registration::query();

//         if ($request->has('status') && $request->status !== 'all') {
//             $query->where('status', $request->status);
//         }

//         $registrations = $query->latest()->paginate(15);
        
//         return view('admin.registrations.index', compact('registrations'));
//     }

//     public function show(Registration $registration)
//     {
//         return view('admin.registrations.show', compact('registration'));
//     }

//     public function update(Request $request, Registration $registration)
//     {
//         $validated = $request->validate([
//             'status' => 'required|in:pending,reviewed,accepted,rejected',
//             'admin_notes' => 'nullable|string',
//         ]);

//         $registration->update($validated);

//         return redirect()->route('admin.registrations.index')->with('success', 'Registration updated successfully!');
//     }

//     public function destroy(Registration $registration)
//     {
//         $registration->delete();

//         return redirect()->route('admin.registrations.index')->with('success', 'Registration deleted successfully!');
//     }
// }
