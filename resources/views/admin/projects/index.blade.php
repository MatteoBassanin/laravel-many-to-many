@extends('layouts.admin')



@section('content')
    <div class="ms_container">
        <a class="btn btn-primary"href="{{ route('admin.projects.create') }}">
            Crea nuovo progetto
        </a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Slug</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th>{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->type ? $project->type->name : 'Nessun tipo' }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>
                        <a class="btn btn-primary"href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">
                            Mostra
                        </a>
                        <a class="btn btn-warning"href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}">
                            Modifica
                        </a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $project->slug }}">
                            Cancella
                        </button>
                    </td>
                </tr>
            @endforeach
            <div class="modal fade" id="exampleModal{{ $project->slug }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form action="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    DELETE
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

        </tbody>
    </table>
@endsection
