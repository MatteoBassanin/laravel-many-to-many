@extends('layouts.admin')



@section('content')
    <div class="ms_container">
        <h1>Titolo : {{ $project->title }}</h1>
        <h6> Tipo :{{ $project->type ? $project->type->name : 'Nessun tipo' }}</h6>
        <p> Contenuto :{{ $project->content }}</p>

        <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Torna indietro</a>
    </div>
@endsection
