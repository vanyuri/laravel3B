<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif
    @if(session('message'))
        <p style="color: green;">{{ session('message') }}</p>
    @endif

    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
