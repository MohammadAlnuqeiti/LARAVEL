<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="./CSS/singup.css">
    <link rel="icon" href="./icon/Untitled-2 (3).png">

     <title>Signup</title>
</head>
<body>

        <div class="container">


            <img src="{{asset('image/Untitled-2 (3).png')}}" style="width: 40%; margin:0 auto">

            {{-- <img src="./icon/Untitled-2 (3).png" style="width: 40%; margin:0 auto"> --}}
            <form id="form" action="{{route('user.store')}}" method="post">
                @method('GET')
                @csrf
                <input type="text" id="username" placeholder="User name" class="@error('name') is-invalid @enderror" name="name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="email" id="email" placeholder="Enter email" class="@error('email') is-invalid @enderror" name="email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text" id="phone" placeholder="Enter Phone" class="@error('phone') is-invalid @enderror" name="phone">
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="password" id="password" placeholder="Enter password" class="@error('password') is-invalid @enderror" name="password">
                <input type="password" id="repssword" placeholder="Repeat your password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit">Sign Up</button>

            </form>

    </div>
    <script src="./JS/signup.js"></script>
</body>
</html>
