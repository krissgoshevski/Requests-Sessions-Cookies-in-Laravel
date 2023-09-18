<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('form-submit') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title.."/> <br>
        <input type="text" name="desc" placeholder="description.."/> <br>
        <input type="url" name="photo" placeholder="photo.."/><br>
        <input type="text" name="post" placeholder="post.."/><br>
        <input type="text" name="author" placeholder="author.."/><br>
        <button> Create </button>

    </form>
    
</body>
</html>