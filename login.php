
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
   
    <div class="background_login">
        <div class="kotak_login">
            <form action="cek_login.php" method="post">
                <h1>Login SI Perpus</h1>
                <br>
                <br>
                <label>Username</label>
                <input type="text" name="username" class="form_login" placeholder="Masukkan Username" required="required" /><br /><br />
                <label>Password</label>
                <input type="password" name="password" class="form_login" placeholder="Masukkan Password" required="required" /><br /><br />
                <input type="submit" name="login" value="Login" />
            </form>
        </div>
   
    </div>   
</body>
</html>