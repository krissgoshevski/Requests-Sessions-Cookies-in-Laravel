<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(session()->has('username'))
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('comment') }}">Comment</a>
    <a href="{{ route('logout') }}">Logout</a>

    @if(session()->has('title') && session()->has('description') && session()->has('url'))
        <h4>Your latest comment</h4>
        <p>Title: {{ session()->get('title') }}</p>
        <p>Description: {{ session()->get('description') }}</p>
        <p>Url: <img src="{{ session()->get('url') }}" width="100px" height="100px"/></p>
    @endif
@else
    <p>You need to be logged in to see this page!</p>
@endif

<!-- zemanje na sesii -->
@if(session()->has('email') && session()->has('datum'))
    <h3>Hello {{ session()->get('username') }} <hr>
    your email is: {{ session()->get('email') }} <hr>
    The date of submitting the form is: {{ session()->get('datum') }}</h3>
@endif

   
</body>
</html>