<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <h1>Submit Data via POST</h1>

    <!-- Form that sends POST request to /submit -->
    <form action="/submit" method="POST">
        @csrf <!-- CSRF token for Laravel security -->
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
