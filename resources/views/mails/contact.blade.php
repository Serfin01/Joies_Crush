<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <b>{{ $name }}</b><span> (<i>{{ $email ?? "Email not available" }}</i>)</span>
    <p>{{ $mailmessage }}</p>
</body>
</html>
