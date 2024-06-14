<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function menu()
    {
        $foodProducts = Product::where('type', 'food')->get();
        $drinkProducts = Product::where('type', 'drink')->get();
        return view('menu', compact('foodProducts', 'drinkProducts'));
    }

    public function reviews()
    {
        $comments = Comment::all();

        return view('reviews', compact('comments'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->bintang = $request->bintang;
        $comment->nama = $request->nama;
        $comment->comment = $request->comment;
        $comment->save();

        return redirect()->route('reviews');
    }

    public function edit($id)
    {
        $comment = Comment::find($id);
        return view('edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
        $comment->update($request->except(['_token', '_method', 'submit']));
        return redirect('/reviews');
    }

    public function delete($id)
    {
        Comment::destroy($id);
        return back();
    }
}
