@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<h2>Bienvenue sur le site de {{ $name }}</h2>

    @foreach ($articles as $article)

        @if (!$loop->last)
            <x-article title="{{ $article['title'] }}" description="{{ $article['description'] }}" />
        @endif

    @endforeach

@endsection
