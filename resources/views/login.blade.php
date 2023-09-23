<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Kim Denmas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles for the login page */
        body {
            background-color: #f0f0f0;
            font-family: 'Arial', sans-serif;
        }
        .login-container {
            margin-top: 100px;
            max-width: 400px;
            padding: 20px;
            background: linear-gradient(to bottom, #ffffff, #f0f0f0);
            border-radius: 8px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
        }
        .login-header {
            text-align: center;
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }
        .batik-background {
            background-image: url('images/DJIB4444.JPG');
            background-size: cover;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
        }
        .login-form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
        }
        .form-group input[type="text"], .form-group input[type="password"] {
            border: none;
            border-bottom: 2px solid #333;
            border-radius: 0;
            padding: 10px;
            margin-bottom: 20px;
            background-color: transparent;
        }
        .form-group input[type="text"]:focus, .form-group input[type="password"]:focus {
            border-color: #ff6600;
        }
        .login-button {
            background-color: #ff6600;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-button:hover {
            background-color: #ff4500;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 login-container">
            <div class="login-header">Welcome to Batik Artistry</div>
            <div class="batik-background">
                <form class="login-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-block login-button">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
