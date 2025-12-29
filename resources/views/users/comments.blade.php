@extends('layouts.app')

@section('content')
    <h3>Comments of {{ $user->name }}</h3>

    @if ($comments->count() > 0)
        <ul>
            @foreach ($comments as $comment)
                <li>{{ $comment->content }} - on post: {{ $comment->post->title }}</li>
            @endforeach
        </ul>
    @else
        <p>No comments found.</p>
    @endif
@endsection
