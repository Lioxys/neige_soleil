
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='css/style.css' rel='stylesheet'>

    
</head>
<body>
    <div class="banner">
    <div class="wrapper"> 
        <form method="POST">
            <h1>Bienvenue </h1>
            <div class="input-box">
                <i class='bx bx-user'></i>
                <input type="text" name="nom" placeholder="Nom" required>
            </div>
            <div class="input-box">
                <i class='bx bx-lock-alt'></i>
                <input type="text" name=prenom placeholder="Mot de passe" required>
            </div>
            <label>
                <div class="renember-forgot">
                    <input type="checkbox"> Rester connecté &nbsp; 
                    
                    <a href="#">Mot de passe oublié ?</a>
                </div>
            </label>
            <button type="submit"  name="connexion" value="connexion" class="btn">Connexion</button>

            <div class="register-link">
                <p>Pas encore membre ? <a href="index.php?page=8">S'inscrire</a></p>
            </div>
            </div>
        </form>
    </div>
</body>
</html>
