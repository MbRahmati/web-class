@extends('layouts.app')

@section('content')
    <h3>User Details</h3>

    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>

    <p>
        <a href="{{ route('users.edit', $user->id) }}">Edit</a>
        |
        <a href="{{ route('users.index') }}">Back</a>
    </p>
@endsection
