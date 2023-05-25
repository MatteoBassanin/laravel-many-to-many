@extends('layouts.admin')

@section('title', 'create')

@section('content')
    <form method="POST" action="{{ route('admin.types.store') }}">

        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
