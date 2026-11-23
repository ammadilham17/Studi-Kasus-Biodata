<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodataController extends Controller
{
    // Halaman Publik (Root Path)
    public function index()
    {
        $biodata = Biodata::first();
        return view('index', compact('biodata'));
    }

    // Halaman Admin / Management
    public function admin()
    {
        $biodata = Biodata::first();
        return view('admin', compact('biodata'));
    }

    // Proses Update Data
    public function update(Request $request)
    {
        $biodata = Biodata::first();
        $biodata->update([
            'welcome_message' => $request->welcome_message,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'hobi' => $request->hobi,
        ]);

        return redirect('/admin')->with('success', 'Biodata berhasil diperbarui!');
    }
}