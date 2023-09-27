<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="assets/css/admin_login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card-1">
                <form onsubmit="event.preventDefault()" class="box">
                    <h1>Login</h1>
                    <p class="text-white"> Please enter your login and password!</p> 
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password"> 
                    <a class="forgot text-white" href="#">Forgot password?</a> 
                    <input type="submit" name="submit" value="Login" href="#">
                </form>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.8.1/css/all.css"></script>
</body>
</html>