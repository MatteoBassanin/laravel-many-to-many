@extends('layouts.admin')



@section('content')
    <div class="ms_container">
        <a class="btn btn-primary"href="{{ route('admin.types.create') }}">
            Crea nuovo tipo
        </a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Numero progetti</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <th>{{ $type->id }}</th>
                    <td>{{ $type->name }}</td>
                    <td>{{ count($type->projects) }}</td>
                    <td>
                        <a class="btn btn-primary"href="{{ route('admin.types.show', ['type' => $type->slug]) }}">
                            Mostra
                        </a>
                        <a class="btn btn-warning"href="{{ route('admin.types.edit', ['type' => $type->slug]) }}">
                            Modifica
                        </a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $type->slug }}">
                            Cancella
                        </button>
                    </td>
                </tr>
            @endforeach
            <div class="modal fade" id="exampleModal{{ $type->slug }}" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            <form action="{{ route('admin.types.destroy', ['type' => $type->slug]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    DELETE
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </tbody>
    </table>
@endsection
