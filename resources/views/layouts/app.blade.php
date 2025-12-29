<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
</head>
<body>
    <div style="max-width: 900px; margin: 20px auto; font-family: Arial, sans-serif;">
        <h2>Laravel CRUD (Exercise 3)</h2>
        <hr>

        {{-- نمایش خطاهای validation --}}
        @if ($errors->any())
            <div style="background: #ffe5e5; padding: 10px; margin-bottom: 15px;">
                <strong>Validation Errors:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
