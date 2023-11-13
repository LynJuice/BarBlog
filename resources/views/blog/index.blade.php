<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Blogs</h1>
    <a href="{{ route('blog.create') }}">
        <button class="btn btn-primary">Create Blog</button>
    </a>
    @if(session()->has('error'))
    <div class="alert alert-danger text-center">
        {{ session()->get('error') }}
    </div>
    @endif
    <hr>
    @foreach ($blogs as $blog)
    <a href="{{ route('blog.show', $blog)}}">
        <div style="max-width: 75%;" class="container text-center">
            <h1>{{ $blog->title }}</h1>
            <p >{{ $blog->description }}</p>
            <img style="max-width: 75%;" src="{{ $blog->image }}" alt="{{ $blog->title }}">
            <hr>
        </div>
    </a>
    @endforeach
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>