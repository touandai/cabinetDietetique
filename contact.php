<?php
include 'header.php';

    if(isset($_POST["envoyer"])){
        extract($_POST);
        if (!empty($objet) AND !empty($name) AND !empty($email) AND !empty($message)){
            $objet = $_POST["objet"];
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];


            if(mail($to, $objet, $message)){
                echo "votre message est bien envoyé";
            }else{
                echo "erreur envoi.., veuillez réessayer";
            }
     
       }
    
    } echo "";
    

   
?>
    <main id="contact" class="container">

        <div class="contact">
            <form method="POST" action="">
                <fieldset>
                     <legend>Nous-contactez ?</legend>          
                     <div class="mb-3">
                         <label class="mb-3" for="nom">Nom : *</label>
                         <input class="form-control" type="text" name="Name" id="name" placeholder="Dupont" required/>
                     </div>
                     <div class="mb-3">
                         <label>E-mail: *</label>
                         <input class="form-control" type="email" name="email" id="inputemail" placeholder="monadresse@....." required/>
                     </div>
                     <div class="mb-3">
                         <label>Message: * </label>
                         <textarea class="form-control" name="message" id="inputmessage"placeholder=" Ecrivez ici votre message..." required></textarea>
                     </div>
                     <br>
                         <button class="btn btn-primary" name="envoyer" type="submit" id="envoyer">Envoyer</button>
                     <strong> <?php echo "votre message est bien envoyé" ?></strong>
                </div>
            </form>  
        </div>  
    </main>

<?php
include 'footer.php';

?>