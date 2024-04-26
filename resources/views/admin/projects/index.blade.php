@extends('layouts.app')

@section('content')

    <div class="container py-4">

        <h1>I tuoi progetti</h1>

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
                @foreach($projects as $project)
                <tr>
                    <th scope="row">{{$loop->index + 1}}</th>
                    <td>{{$project->title}}</td>
                    <td>{{$project->content}}</td>
                    <td><a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-info">Mostra</a></td>
                    <td><a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning">Modifica</a></td>
                </tr>
                @endforeach
    
            </tbody>
          </table>

    </div>
    
@endsection