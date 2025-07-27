<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api Demo</title>
</head>

<body>
    <h1>Posts from JSONPlaceholder</h1>

    @foreach ($posts as $post)
    <div style="margin-bottom: 20px;">
        <h3>{{ $post['title'] }}</h3>
        <p>{{ $post['body'] }}</p>
        <hr>
    </div>
    @endforeach
</body>

</html>
