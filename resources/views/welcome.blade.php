<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to PhotoApp</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Instrument Sans', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 2rem;
        }
        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            padding: 3rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2);
            max-width: 600px;
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        .btn-group {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
        .btn {
            padding: 0.75rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }
        .btn-login {
            background-color: #fff;
            color: #6a11cb;
        }
        .btn-login:hover {
            background-color: #ddd;
        }
        .btn-register {
            background-color: #42b72a;
            color: #fff;
        }
        .btn-register:hover {
            background-color: #36a420;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to PhotoApp</h1>
        <p>Capture and cherish every moment. Join us today!</p>
        <div class="btn-group">
            <a href="{{ url('/login') }}" class="btn btn-login">Log in</a>
            <a href="{{ url('/register') }}" class="btn btn-register">Register</a>
        </div>
    </div>
</body>
</html>
