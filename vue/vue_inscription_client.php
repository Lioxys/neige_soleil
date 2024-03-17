
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='css/style.css' rel='stylesheet'>

    
</head>
<body>
    <div class="banner">
    <div class="wrapper"> 
        <form method="POST">
            <h1>Inscriptions</h1>
            <div class="input-box">
            <select name="role" id="role-select">
                      <option value="">--Choisir son rôle--</option>
                      <option value="client">Client</option>
                      <option value="proprietaire">Proprietaire</option>
                      </select>
            </div>
            <div class="input-box">
               
                <input type="text" name="nom" placeholder="Nom" required>
            </div>
            <div class="input-box">
              
                <input type="text" name="Prenom" placeholder="Prenom" required>
            </div>
            <div class="input-box">
               
                <input type="text" name="adresse" placeholder="Adresse" required>
            </div>
            <div class="input-box">
               
                <input type="text" name="Code postal" placeholder="Code postal" required>
            </div>
            <div class="input-box">
               
                <input type="text" name="Ville" placeholder="Ville" required>
            </div>
            <div class="input-box">
               
                <input type="text" name="téléphone" placeholder="Téléphone" required>
            </div>
          
            <button type="submit"  name="Valider" value="Valider" class="btn">Valider l'inscription</button>
         
            </div>
            <label>
              
            </label>
           
            <div class="register-link">
                <p>Déjà membre ? <a href="index.php?page=9">Se connecter</a></p>
            </div>
            </div>
        </form>
    </div>
</body>
</html>
