@extends('layouts.app')

@section('title', 'Article ' . $id)

@section('content')
<h1>Article numéro {{ $id }}</h1>
@endsection
