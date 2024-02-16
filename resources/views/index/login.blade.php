<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/authStyle.blade.css')
    <title>Вход</title>
</head>
<body>

<div class="login-container">
    <h2>Вход</h2>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <button type="submit">Войти</button>
    </form>
</div>

</body>
</html>