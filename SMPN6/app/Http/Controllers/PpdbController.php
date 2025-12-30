<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function create()
    {
        return view('pages.ppdb');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'asal_sekolah' => 'required',
            'no_hp' => 'required',
        ]);

        Ppdb::create($request->all());

        return redirect()->back()->with('success', 'Pendaftaran berhasil dikirim');
    }
}

