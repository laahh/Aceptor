<?php

namespace App\Http\Controllers;

use App\Models\konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class konsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('konsultasi', [
            'title' => 'Konsultasi',
            'konsultasis' => konsultasi::all(),
            // konsultasi berdasarkan user yang create
            'konsultasi' => konsultasi::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'namaDokter' => 'required',
            'spesialis' => 'required',
            'image' => 'required'
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-images');
        }

        $validateData['user_id'] = auth()->user()->id;
        konsultasi::create($validateData);
        return redirect('konsultasi')->with('success', 'Artikel berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('konsultasi', [
            'title' => 'Edit Artikel',
            'konsultasi' => konsultasi::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'namaDokter' => 'required',
            'spesialis' => 'required',
            'image' => 'required'
        ];

        $validateData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete([$request->oldImage]);
            }


            $validateData['image'] = $request->file('image')->store('post-images');
        }

        konsultasi::where('id', $id)->update($validateData);


        return redirect('konsultasi')->with('success', 'Artikel berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
