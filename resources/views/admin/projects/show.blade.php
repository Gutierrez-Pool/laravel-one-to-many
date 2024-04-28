@extends('layouts.app')

@section('content')

    <div class="container py-4">

        <div class="text-center mb-4">
            <img style="max-width: 800px;" src="{{asset('storage/' . $project->cover_image)}}" alt="immagine">
        </div>

        <h1>{{$project->title}}</h1>
        <small class="badge bg-primary">{{$project->type?->title}}</small>

        <p>
            {{$project->content}}
        </p>

        <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning">Modifica</a>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
            Elimina
        </button>
      
        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
        
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModalLabel">Elimina il progetto</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
            
                    <div class="modal-body">
                        Sei sicuro di voler eliminare il progetto?
                    </div>
            
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger">Elimina</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
    
@endsection