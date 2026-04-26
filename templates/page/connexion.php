<?php require_once APP_ROOT . "/templates/header.php" ?>

<section class="connexion">

    <H1 class="connex T">Connexion</H1>
    <p>Espace de connexion réservée au personnel du zoo </p>

    <form action="" method="POST">
        <div>
            <h4>Pseudo :</h4>
            <input type="text" name="pseudo" autocomplete="off">
            </br>

            <H4>Mot de passe :</H4>
            <input type="password" name="mdp">
            </br><br>

            <input type="submit" name="valider" value="se connecter">
        </div>
    </form>

</section>

<?php require_once APP_ROOT . "/templates/footer.php" ?>