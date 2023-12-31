<div class="menu">
    
    <a href="?page=tableau-de-bord">Tableau de bord</a>

    <!-- Créer un patient : on autorise seul l'administrateur à créer des patients -->
    <?php if(in_array($userConnecte['roles_id'], [1])) : ?>
    <a href="?page=patients.php">Patients</a>
    <?php endif; ?>

        <!-- Les avis : on autorise seul l'administrateur à les modérer -->
        <?php if(in_array($userConnecte['roles_id'], [1])) : ?>
    <a href="?page=avis.php">Modérer les avis</a>
    <?php endif; ?>

    <!-- Les recettes : on autorise l'administrateur à les ajouter -->
    <?php if(in_array($userConnecte['roles_id'], [1,])) : ?>
    <a href="?page=gestion-recettes.php">Gérer les Recettes supplémentaires</a>
    <?php endif; ?>

    <!-- Les recettes : on autorise l'administrateur et les patients à les voir -->
    <?php if(in_array($userConnecte['roles_id'], [1, 2])) : ?>
    <a href="?page=recettes-sup.php">Recettes supplémentaires à consulter</a>
    <?php endif; ?>

</div>