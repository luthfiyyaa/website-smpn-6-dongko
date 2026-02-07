<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function index()
    {
        // URL Google Sheets yang sudah dipublish sebagai web
        $spreadsheetUrl = env('GOOGLE_SHEETS_PPDB_URL', '');
        
        return view('admin.ppdb.index', compact('spreadsheetUrl'));
    }
}