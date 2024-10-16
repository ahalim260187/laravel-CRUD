<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Aku</title>
</head>
<body>
    <h1>Author Name's</h1>
    <ul>
        @foreach ($blogs as $blog )
            <li>{{ $blog->author }}</li>
        @endforeach
    </ul>
</body>
</html>
