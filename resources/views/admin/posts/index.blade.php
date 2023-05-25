@extends('layouts.admin')



@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Slug</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th>{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>
                        <a class="button button-primary"
                            href="{{ route('admin.posts.show', ['post' => $post->id]) }}">Mostra</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
