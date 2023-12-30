<?php
include 'header.php';

?>
    <main id="espaceclient" class="container">
         <div class="login">
                <form method="POST" action="">
                     <fieldset>
                              <legend> Adhérants</legend>
                              <div class="mb-3">
                              <label>Identifiant/Email </label>
                              <input type="email" class="form-control" name="email" id="email">
                              </div>
                              <div class="mb-3">
                              <label>Mot de pass</label>
                              <input type="password" class="form-control" name="password" id="password">
                              </div>
                              <button type="submit" name ="connexion" id="connexion" class="btn btn-primary">Connexion</button> 
                              <br>
                              <br>
                              Nouveau? <a href="Inscription.php">inscrivez-vous d'abord</a>
                     </fieldset>
                </form>
         </div> 
    </main>
    
<?php
include 'footer.php';
?>
    
