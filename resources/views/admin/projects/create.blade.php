@extends('layouts.admin')

@section('title', 'create')

@section('content')
    <form method="POST" action="{{ route('admin.projects.store') }}">

        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <input type="text" class="form-control @error('category') is-invalid @enderror" id="category"
                name="category" value="{{ old('category') }}">
            @error('category')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content">
                {{ old('content') }}
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

                <option value="" @selected(old('type_id') == '')>Nessun Tipo</option>
                @foreach ($types as $type)
                    <option @selected(old('type_id') == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach

            </select>
            @error('type_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">


            @foreach ($tecnologies as $tecnology)
                <input type="checkbox" id="tecnology_{{ $tecnology->id }}" name="tag[]" value="{{ $tecnology->id }}">
                <label for="tecnology_{{ $tecnology->id }}" class="form-label">{{ $tecnology->name }}</label>
            @endforeach

            @error('tecnology')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
