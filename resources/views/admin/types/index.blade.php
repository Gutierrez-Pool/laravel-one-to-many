@extends('layouts.app')

@section('content')

    <div class="container py-4">

        <h1>Tipi di progetti</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Contenuto</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
    
                
                {{-- @dump($posts) --}}
                @foreach($types as $type)
                <tr>
                    <th scope="row">{{$loop->index + 1}}</th>
                    <td>{{$type->title}}</td>
                    <td>{{$type->content}}</td>
                    <td><a href="{{route('admin.types.show', $type->id)}}" class="btn btn-info">Mostra</a></td>
                    <td><a href="{{route('admin.types.edit', $type->id)}}" class="btn btn-warning">Modifica</a></td>
                </tr>
                @endforeach
    
            </tbody>
          </table>

    </div>
    
@endsection