<?php
include 'header.php';

?>
    <main id ="inscriptions" class="container">
        <div class="inscription">
            <form action="" method="POST" id="souscribe">
                <fieldset>
                       <legend> M'inscrire </legend>
                             <div class="mb-3">
                                 <label>Email</label>
                                 <input type="email" class="form-control" id="email" name="email">
                             </div>
                             <div class="mb-3">
                                 <label>Mot de pass</label>
                                 <input type="password" class="form-control" id="password" name="Password">
                             </div>
                             <div class="mb-3">
                                 <label>Confirmé votre mot de pass</label>
                                 <input type="password" class="form-control" id="password" name="Password">
                             </div>
                             <span id="erreur"></span>
                                 <button type="submit" name ="envoyer" id="envoyer" class="btn btn-primary">Valider</button> 
                             <br><br>
                             Déjà inscrit(e)? <a href="monespace.php">Je m'identifie</a>
                </fieldset>             
            </form>
        </div> 
    </main>
    
<?php
include 'footer.php';
?>
    
