@extends('layouts.main')

@section('container')
    @foreach ($posts as $p)
    <article class="mb-5">
        <h2>
            <a href="/info/{{ $p["slug"] }}">{{ $p["tittle"] }}</h2></a>
        <h5>{{ $p["author"] }}</h5>
        <p>{{ $p["body"] }}</p>
    </article>
    @endforeach
@endsection