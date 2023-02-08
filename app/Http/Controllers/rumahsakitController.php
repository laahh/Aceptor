<?php

namespace App\Http\Controllers;

use App\Models\rumahsakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class rumahsakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.rumah-sakit.index', [
            'title' => 'Rumah Sakit',
            'rumahsakits' => rumahsakit::latest()->paginate(5)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rumah-sakit.create', [
            'title' => 'Tambah Rumah Sakit'
        ]);
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
            'nama_rs' => 'required',
            'alamat' => 'required',
            'image' => 'image|file|max:5000',

        ]);
        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-images');
        }

        rumahsakit::create($validateData);
        return redirect('rumah-sakit')->with('success', 'berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.rumah-sakit.show',[
            'title' => 'Show Rumah Sakit',
            'rumahsakit' => rumahsakit::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.rumah-sakit.edit', [
            'title' => 'Edit artikel',
            'rumahsakit' => rumahsakit::find($id)
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
            'nama_rs' => 'required',
            'alamat' => 'required',
            'image' => 'image|file|max:5000',
        ];

        $validateData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete([$request->oldImage]);
            }


            $validateData['image'] = $request->file('image')->store('post-images');
        }


        rumahsakit::where('id', $id)->update($validateData);
        return redirect('rumah-sakit')->with('success', 'Rumah Sakit berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        rumahsakit::where('id', $id)->delete();
        // return redirect('admin-artikel')->with('success', 'Artikel berhasil dihapus!');
        return response()->json(['success' => 'Artikel berhasil dihapus!']);
    }
}
