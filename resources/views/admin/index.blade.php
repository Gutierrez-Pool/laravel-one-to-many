@extends('layouts.app')

@section('content')

    <div class="container py-4">

        {{-- @dump($user) --}}

        <h1>Pagina Amministratore</h1>
        <hr>
        <h3>Benvenuto {{$user->name}}</h3>

        <a href="{{route('admin.projects.index')}}" class="btn btn-info">Index</a>

        <a href="{{route('admin.projects.create')}}" class="btn btn-info">Aggiungi un progetto</a>

    </div>
    
@endsection