<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Termwind\Components\Dd;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.artikel', [
            'title' => 'Artikel',

            'posts' => post::latest()->filter(request(['search', 'category']))->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create', [
            'title' => 'Create Artikel',
            'categories' => Category::all()
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
            'tittel' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'excerpt' => 'required',
            'image' => 'image|file|max:5000',
            'category_id' => 'required',

            'body' => 'required',

            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-images');
        }

        // $validateData['user_id'] = auth()->user()->id[90];

        post::create($validateData);



        return redirect('admin-artikel')->with('success', 'Artikel berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        return view('admin.show', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        return view('admin.edit', [
            'title' => 'Edit artikel',
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $rules = [
            'tittel' => 'required|max:255',
            'excerpt' => 'required',
            'image' => 'image|file|max:5000',
            'category_id' => 'required',

            'body' => 'required',

            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validateData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete([$request->oldImage]);
            }


            $validateData['image'] = $request->file('image')->store('post-images');
        }


        post::where('id', $post->id)->update($validateData);
        return redirect('admin-artikel')->with('success', 'Artikel berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {

        if ($post->image) {
            Storage::delete($post->image);
        }
        post::destroy($post->id);
        // return redirect('admin-artikel')->with('success', 'Artikel berhasil dihapus!');
        return response()->json(['success' => 'Artikel berhasil dihapus!']);
    }

    public function CheckSlug(Request $request)
    {
        $slug = SlugService::createSlug(post::class, 'slug', $request->tittel);
        return response()->json(['slug' => $slug]);
    }
}
