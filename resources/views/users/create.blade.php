@extends('layouts.app')

@section('content')
    <h3>Create User</h3>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div style="margin-bottom: 10px;">
            <label>Name:</label><br>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label>Password:</label><br>
            <input type="password" name="password" required>
        </div>

        <button type="submit">Save</button>
        <a href="{{ route('users.index') }}">Cancel</a>
    </form>
@endsection
