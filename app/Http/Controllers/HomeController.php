<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $foodProducts = Product::where('type', 'food')->get();
        $drinkProducts = Product::where('type', 'drink')->get();
        return view('admin.dashboard', compact('foodProducts', 'drinkProducts'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required|in:food,drink',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $path = public_path('storage/images');
        $request->image->move($path, $imageName);

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imageName,
            'type' => $request->type,
        ]);

        return redirect()->route('admin.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $path = public_path('storage/images');
            $request->image->move($path, $imageName);
            $product->image = $imageName;
        }

        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('admin.index')->with('success', 'Product updated successfully.');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.index')->with('success', 'Product deleted successfully.');
    }
}
