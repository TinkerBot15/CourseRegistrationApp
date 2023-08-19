<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to Course Registration</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url("images/wow.webp");
            background-size: cover;
            background-color: rgba(0, 0, 0, 0.7); 
            color: #ffffff;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
        }

        .heading {
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .description {
            text-align: center;
            font-size: 18px;
            margin-bottom: 40px;
        }

        .buttons {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .buttons a {
            margin: 10px;
            padding: 10px 20px;
            background-color: #4c51bf;
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .buttons a:hover {
            background-color: #667eea;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="heading">Welcome to Course Registration</h1>
        <p class="description">E-Registration Software</p>

        <div class="buttons">
            <a href="">Login</a>
            <a href="{{ route('signup') }}">Register</a>
        </div>
    </div>
</body>
</html>
