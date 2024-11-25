<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mendapatkan data kategori dengan pagination
        $categories = Category::latest()->paginate(10);
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input dari user
        $request->validate([
            'name' => 'required|unique:categories,name',
        ], [
            'name.required' => 'Nama kategori harus diisi.',
            'name.unique' => 'Nama kategori sudah ada.',
        ]);

        // Menyimpan kategori baru
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('categories.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // Validasi input dari user
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
        ], [
            'name.required' => 'Nama kategori harus diisi.',
            'name.unique' => 'Nama kategori sudah ada.',
        ]);

        // Mengupdate kategori yang ada
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('categories.index')->with('success', 'Kategori berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        // Pastikan kategori ada dan tidak terkait dengan data lain (misalnya produk)
        // Anda bisa menambahkan pengecekan hubungan jika perlu

        // Hapus kategori
        $category->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('categories.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
