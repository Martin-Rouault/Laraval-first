@extends('layouts.app')

@section('title', 'Article ' . $article['id'])

@section('content')
    <article>
        <h2>Article numéro {{ $article['id'] }}</h2>
        <h3>{{ $article['title'] }}</h3>
        <p>{{ $article['description'] }}</p>
    </article>
@endsection

