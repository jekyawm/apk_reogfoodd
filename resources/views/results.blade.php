@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Hasil Pencarian</h1>

    @if($posts->isEmpty())
        <p>Tidak ada postingan yang ditemukan.</p>
    @else
        <ul class="list-group">
            @foreach ($posts as $post)
                <li class="list-group-item">
                    <h5>{{ $post->title }}</h5>
                    <p>{{ Str::limit($post->body, 150) }}</p>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Lihat Detail</a>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
