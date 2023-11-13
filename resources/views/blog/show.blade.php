<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $blog->title }}</title>
</head>

<body>
    <h1>{{ $blog->title }} - Parašyta {{ $blog->user->name ?? 'Anonimiškai' }} </h1>
    <p>{{ $blog->description }}</p>
    <img src="{{ $blog->image }}" alt="{{ $blog->title }}">
    <br>
    <a href="{{ route('blog.index') }}">
        <button class="btn btn-primary">Back</button>
    </a>
    @if( auth()->user() && auth()->user()->id == $blog->user_id)
    <a href="{{ route('blog.edit',$blog) }}">
        <button class="btn btn-primary">Edit</button>
    </a>
    @endif

    @if( auth()->user() && auth()->user()->id == $blog->user_id)
    <form action="{{ route('blog.destroy',$blog) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Delete</button>
    </form>
    @endif
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>