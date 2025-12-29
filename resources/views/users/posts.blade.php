@extends('layouts.app')

@section('content')
    <h3>Posts of {{ $user->name }}</h3>
    
    @if ($posts->count() > 0)
        <ul>
            @foreach ($posts as $post)
                <li>{{ $post->title }} - <a href="{{ route('users.comments', $user->id) }}">View Comments</a></li>
            @endforeach
        </ul>
    @else
        <p>No posts found.</p>
    @endif
@endsection
