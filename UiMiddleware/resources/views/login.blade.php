<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <title>Login</title>
</head>
<body>

    <div class="containerr">
        <div class="sec1">
            <figure>
                <img src="./icon/Untitled-2 (3).png">
                <!-- <figcaption>lorem ipsum</figcaption> -->
            </figure>
            <form id="form">

                <input type="email" id="mail" placeholder="Enter email">
                <input type="password" id="pass" placeholder="Enter password">
                <p class="error" id="err">ccccccccc</p>

                <button type="submit">Login</button>

            </form>
        </div>
        <div class="sec2">

            <img src="./icon/photo-1521737711867-e3b97375f902.avif" >

        </div>
    </div>
    <script src="./JS/login.js"></script>
</body>
</html>
