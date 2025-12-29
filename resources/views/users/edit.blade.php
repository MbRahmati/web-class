@extends('layouts.app')

@section('content')
    <h3>Edit User</h3>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 10px;">
            <label>Name:</label><br>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label>Password (optional):</label><br>
            {{-- کامنت فارسی: اگر خالی بماند، پسورد تغییر نمی‌کند --}}
            <input type="password" name="password">
        </div>

        <button type="submit">Update</button>
        <a href="{{ route('users.index') }}">Cancel</a>
    </form>
@endsection
