<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Simple Validation</h2> 
<form action="{{ route('login-submit') }}" method="POST">
        @csrf
        <input type="text" name="username" placeholder="username.."/> <br>
        <input type="email" name="email" placeholder="email.."/> <br>
        <input type="date" name="date" placeholder="date.."/> <br>
        <input type="password" name="password" placeholder="password.."/> <br>
        <button> Log In </button>
    </form>



<hr> <h2>Validation with my Custom Request </h2> <hr>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="text" name="username" placeholder="username.." value="{{ old('username') }}"/> <br>
        <input type="email" name="email" placeholder="email.."  value="{{ old('email') }}"/> <br>
        <input type="date" name="date" placeholder="date.."  value="{{ old('date') }}"/> <br>
        <input type="password" name="password" placeholder="password.."  value="{{ old('password') }}"/> <br>
        <button> Log In </button>

        <!-- ako userot e logiran da go redirectira na homepage, bidejki e veke logiran -->
        @if(session()->has('username'))
            {{ route('home') }}
        @endif


        @if($errors->any())
            @foreach ($errors->all() as $error)
                <div class="errors" style="color:red;">{{ $error }}</div>
            @endforeach
        @endif

    </form>
</body>
</html>