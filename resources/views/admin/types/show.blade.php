@extends('layouts.admin')



@section('content')
    <div class="ms_container">
        <h1>Titolo : {{ $type->name }}</h1>


        <a class="btn btn-primary" href="{{ route('admin.types.index') }}">Torna indietro</a>
    </div>
@endsection
