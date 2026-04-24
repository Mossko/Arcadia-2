<?php require_once APP_ROOT . "/templates/header.php" ?>

<section class="contact">
    <H1 class="contact T">Nous contactez</H1>
    <p>
        Formulez votre demande nous répondrons dans les plus bref delais .
    </p>

    <form action="" method="POST" id="champ">

        <div>
            <label for="pseudo">Pseudo :</label>
            <input type="pseudo" placeholder="Pseudo" id="pseudo" required>
        </div></br>

        <div>
            <label for="mail">E-mail :</label>
            <input type="email" placeholder="email" id="mail" required>
        </div></br>

        <div>
            <label for="message">Message :</label>
            <textarea name="message" placeholder="Votre message" cols="" rows="" id="message"></textarea>
        </div></br>

        <button><input type="submit" value="Envoyer" id="myInput"></button>
        <img src="" width="" height="">

    </form>
</section>

<?php require_once APP_ROOT . "/templates/footer.php" ?>