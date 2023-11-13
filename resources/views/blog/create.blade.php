<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>

<body>
    <div class="container">
        <form method="POST" action="{{ route('blog.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" name="title" id="title" type="text">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input class="form-control" name="image" id="image" type="text">
            </div>
            <label for="annonymous">Viešinti anonimiškai</label>
            <input type="checkbox" name="annonymous" id="annonymous" value="1"> <br>
            <button class="btn btn-primary" type="submit">Create Blog</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    document.getElementById('annonymous').addEventListener('change', function() {
    if(this.checked) {
        alert('Jeigu jus viešinsite anonimiškai nebegalėsite redaguoti blogo ar jo ištrinti.');
    }
});
</script>
</html>