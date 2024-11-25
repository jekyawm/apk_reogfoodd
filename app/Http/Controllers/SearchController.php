<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Mendapatkan nilai dari form pencarian
        $query = $request->input('query');

        // Validasi jika input pencarian kosong
        if (empty($query)) {
            // Jika query kosong, bisa memberikan pesan atau langsung ambil semua data
            return redirect()->back()->with('error', 'Pencarian tidak boleh kosong!');
        }

        // Mencari postingan berdasarkan judul atau body yang mengandung query
        $posts = Post::where('title', 'like', '%' . $query . '%')
                     ->orWhere('body', 'like', '%' . $query . '%')
                     ->latest()  // Anda bisa menambahkan pengurutan terbaru jika ingin
                     ->paginate(10);  // Menggunakan paginasi agar hasil pencarian tidak terlalu banyak dalam satu halaman

        // Kirim hasil pencarian ke view 'posts.index' yang sudah ada
        return view('posts.index', compact('posts'));
    }
}
