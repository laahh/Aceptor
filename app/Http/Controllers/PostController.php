<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        return view('artikel', [
            "title" => 'Artikel',
            "posts" => post::latest()->filter(request(['search', 'category']))->paginate(7)
        ]);
    }

    public function show(post $post) //ini adalah route binding yang akan mengambil data dari database berdasarkan parameter yang dikirimkan
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
