<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Ludiflex | Login</title>
</head>
<body>
    <form method="post">
    <div class="box">
        <div class="container">
            <div class="top-header">
                <span>Have an account?</span>
             
            </div>

            <div class="input-field">
                <input type="text" class="input" placeholder="Username" required>
             
            </div>
            <div class="input-field">
                <input type="password" class="input" placeholder="Password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <input type="submit" class="submit" name="connexion" value="connexion">
            </div>

            <div class="bottom">
                <div class="left">
                    <input type="checkbox"  id="check">
                    <label for="check">Se souvenir de moi</label>
                </div>
                <div class="right">
                    <label><a href="#">Mot de passe oublié
                    </a></label>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>