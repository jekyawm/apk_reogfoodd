<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    // Method untuk menangani pencarian
    public function search(Request $request)
    {
        // Ambil kata kunci dari parameter 'query'
        $query = $request->input('query');
        
        // Cari posts berdasarkan 'title' atau 'body' yang mengandung kata kunci pencarian
        $posts = Post::where('title', 'like', "%$query%")
                     ->orWhere('body', 'like', "%$query%")
                     ->get();
        
        // Kembalikan hasil pencarian ke view
        return view('posts.search_results', compact('posts', 'query'));
    }

    // Menampilkan semua postingan
    public function index()
    {
        $posts = Post::with('category')->latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }

    // Menampilkan form untuk membuat postingan baru
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    // Menyimpan postingan baru
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|unique:posts,title',
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Gambar optional
        ]);

        // Handle upload gambar
        if ($request->hasFile('image')) {
            // Generate nama gambar yang unik dan simpan di public path (lebih disarankan menggunakan Storage)
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/posts'), $imageName);
        } else {
            $imageName = null; // Jika tidak ada gambar, biarkan null
        }

        // Simpan postingan baru
        Post::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'image' => $imageName,
        ]);

        return redirect()->route('posts.index')->with('success', 'Postingan berhasil ditambahkan.');
    }

    // Menampilkan postingan berdasarkan id
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Menampilkan form untuk mengedit postingan
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }

    // Mengupdate postingan
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|unique:posts,title,' . $post->id,
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Gambar optional
        ]);

        // Handle upload gambar jika ada gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($post->image) {
                $oldImagePath = public_path('images/posts/' . $post->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Menghapus file gambar lama
                }
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/posts'), $imageName);
        } else {
            $imageName = $post->image; // Jika tidak ada gambar baru, gunakan gambar lama
        }

        // Update postingan
        $post->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'image' => $imageName,
        ]);

        return redirect()->route('posts.index')->with('success', 'Postingan berhasil diupdate.');
    }

    // Menghapus postingan
    public function destroy(Post $post)
    {
        // Hapus gambar terkait saat menghapus post
        if ($post->image) {
            $oldImagePath = public_path('images/posts/' . $post->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Hapus gambar terkait
            }
        }

        // Hapus post
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Postingan berhasil dihapus.');
    }
}
