@extends('layouts.admin')

@section('title', 'edit')

@section('content')
    <form method="POST" action="{{ route('admin.projects.update', ['project' => $project->slug]) }}">


        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title', $project->title) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <input type="text" class="form-control @error('category') is-invalid @enderror" id="category"
                name="category" value="{{ old('category', $project->category) }}">
            @error('category')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content">
                {{ old('content', $project->content) }}
            </textarea>
            @error('content')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type_id" class="form-label">Seleziona il Tipo</label>
            <select class="form-select" id="type_id" name="type_id" @error('content') is-invalid @enderror>

                <option value="" @selected(old('type_id', $project->type_id) == '')>Nessun Tipo</option>
                @foreach ($types as $type)
                    <option @selected(old('type_id', $project->type_id) == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach

            </select>
            @error('type_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        @foreach ($tecnologies as $tecnology)
            @if ($errors->any())
                <input type="checkbox" id="tecnology_{{ $tecnology->id }}" name="tecnologies[]"
                    value="{{ $tecnology->id }}" @if (in_array($tecnology->id, old('tecnologies', []))) checked @endif>
            @else
                <input type="checkbox" id="tecnology_{{ $tecnology->id }}" name="tecnologies[]"
                    value="{{ $tecnology->id }}" @if ($project->tecnologies->contains($tecnology->id)) checked @endif>
            @endif
            <label for="tecnology_{{ $tecnology->id }}" class="form-label">{{ $tecnology->name }}</label>
        @endforeach

        @error('tecnology')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <div class="ms_container">

            <button type="submit" class="btn btn-primary">Salva</button>
        </div>
    </form>
@endsection
