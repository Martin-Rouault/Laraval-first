@extends('layouts.app')

@section('title', 'Article ' . $id)

@section('content')
    <h2>Article numéro {{ $id }}</h2>
@endsection

