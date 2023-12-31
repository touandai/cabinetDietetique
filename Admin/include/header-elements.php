<header>
    <div class="logo"><img src="../images/dietetique.png"/></div>
    <div class="information-user">
        <span>Bonjour <?= $userConnecte['prenom'] . " (".$userConnecte['name'].")" ?></span>
        <span class="btn-deconnexion"><a href="?page=deconnexion">Me déconnecter? <img src="/<?= $document_root  ?>/admin/images/logout.png" title="Déconnexion" alt="Déconnexion"/></a></span>
    </div>
    <div class="clear"></div>
</header>