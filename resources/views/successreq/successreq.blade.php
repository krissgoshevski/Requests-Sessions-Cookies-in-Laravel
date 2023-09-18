<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!-- zemanje na sesii -->
    @if (session()->has('username') && session()->has('email') && session()->has('datum'))
        <h3> Hello {{ session()->get('username') }} <hr>
        your email is : {{session()->get('email') }} <hr>
        The date of submiting the form is: {{ session()->get('datum') }}</h3> 
    @endif
   
</body>
</html>