<?php require_once APP_ROOT . "/templates/header.php" ?>

<section class="raisma">
    <div>
        <h1 class="marais_title">L'habitat marais</h1>
        <div>
            <p>Les marais se forment dans des zones peu accidentées ,c'est une couche d'eau stagnante, en
                général peu profonde, et envahie par la végétation aquatique ou herbacée. C'est une zone
                humide.
                La végétation des marais est constituée d'espèces adaptées au milieu humide .Voici nos
                animaux vous avez accès a leurs desciptions ainsi que leur êtat de santé .</p>
        </div>
    </div>


    <aside class="animaux-marais">
        <div class="centre">
            <div class="carte">
                <h1>Crocodile</h1>
                <img src="croco.jpg" alt="image d'un crocodile" width="300" height="280">
                <p class="texte"><strong>Description</strong><br />Prénom : Lacoste<br />Race
                    :alligator<br /><strong>Avis vétérinaire</strong><br />Etat : Affaiblie car
                    vieux<br />Nourriture : Se nourrit de viande<br />Volume nourriture :
                    3kilo/jour<br />Dernier
                    passage
                    du véto : Passe tout les jours car très vieux<br />Attitude : Observateur et calme</p>
            </div>
            <div class="carte">
                <h1>hippopotame</h1>
                <img src="hippo.webp" alt="image d'un hippopotame" width="300" height="280">
                <p class="texte"><strong>Description</strong><br />Prénom : Dabbon<br />Race : Hippopotame
                    amphibie<br /><strong>Avis vétérinaire</strong><br />Etat : En bonne santé<br />Nourriture :
                    De la végétation<br />Volume nourriture : <br />Dernier
                    passage
                    du véto : 16/07/2024<br />Attitude : Très protectrice et joyeuse</p>
            </div>
        </div>
    </aside>
    <button class="Retour" onclick="history.back();">Retour</button>
</section>

<?php require_once APP_ROOT . "/templates/footer.php" ?>