<?php

namespace App\Http\Controllers;

use App\Models\page;
use App\Models\metadata;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index()
    {
        return view('admin.page.index', [
            'title' => 'Page Apa Itu TBC',
            'pages' => page::all()
        ]);
    }

    public function update(Request $request)
    {
        if ($request->method() == 'POST') {
            $request->validate([
                'judul' => 'required',
                'isi' => 'required'
            ], [
                'judul.required' => 'Silakan masukkan bahasa pemrograman yang kamu kuasai',
                'isi.required' => 'Silakan masukkan workflow yang kamu kuasai',
            ]);

            metadata::updateOrCreate(['meta_key' => 'judul'], ['meta_value' => $request->judul]);
            metadata::updateOrCreate(['meta_key' => 'isi'], ['meta_value' => $request->isi]);

            return redirect()->route('page.index')->with('success', 'skill berhasil ditambahkan');
        }
    }

    public function upload()
    {
        $metadata = new metadata();
        $metadata->id = '0';
        $metadata->exists = true;

        $images = $metadata->addMediaFromRequest('upload')->toMediaCollection('images');
        return response()->json([
            'url' => $images->getUrl()
        ]);
    }
}
