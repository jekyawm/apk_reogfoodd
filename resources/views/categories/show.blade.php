@extends('master.layout')
@section('content')
<div class="container" style="padding-top: 150px;"></div>
<h1>{{ $category->name }}</h1>
    <p>Slug: {{ $category->slug }}</p>
</div>
@endsection
