<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <div class="errors" style="color:red;">{{ $error }}</div>
            @endforeach
        @endif

    <form action="{{ route('storeComment') }}" method="post">
        @csrf
        <input type="text" name="title" value="{{old('title') }}"> <!-- za da ako padne validacijata da ni se prikazat starite vrednosti --> 
        <input type="text" name="description" value="{{old('description') }}" >
        <input type="url" name="url" value="{{old('url') }}" >
        <button>Submit</button>

    </form>
    
</body>
</html>