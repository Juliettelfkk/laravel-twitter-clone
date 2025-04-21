<!DOCTYPE html>
<html>
<head>
    <title>Welcome to {{ config('app.name') }}</title>
</head>
<body>
    <h1>Thanks for joining, {{ $user->name }} </h1>
    <p>We are excited to have you on board.</p>
</body>
</html>
