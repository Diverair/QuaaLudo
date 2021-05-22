<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="css/img/Logo/logo-Quae-Ludo.png">
    <title>QuaeLudo | Inscription</title>
    <link rel="stylesheet" href="css/mise-en-page-generale.css">
    <link rel="stylesheet" href="css/mise-en-page-css-page-avec-php.css">
    <link rel="stylesheet" href="css/typographie.css">
</head>
<body class="Page-Inscription">
<?php   require_once 'BDD/Classes/class.Joueur.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<header>
    <div class="header-bouton header-bouton-compte">
        <a href="Compte.html">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="#FAFAFA"
                      d="M224 256
                      c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128
                      s57.3 128 128 128z
                      m89.6 32h-16.7
                      c-22.2 10.2-46.9 16-72.9 16
                      s-50.6-5.8-72.9-16
                      h-16.7
                      C60.2 288 0 348.2 0 422.4
                      V464
                      c0 26.5 21.5 48 48 48
                      h352
                      c26.5 0 48-21.5 48-48
                      v-41.6
                      c0-74.2-60.2-134.4-134.4-134.4z">
                </path>
            </svg>
        </a>
    </div>
    <div class="header-logo-nom">
        <div class="header-logo">
            <a href="Accueil.html"><img src="css/img/Logo/logo-Quae-Ludo.png" class="logo-header" alt="Logo QuaeLudo"></a>
        </div>
        <div class="header-nom">
            <a href="Accueil.html">QuaeLudo</a>
        </div>
    </div>
    <div class="header-bouton">
    </div>
</header>


<div class="page Inscription">
    <h1>Je m'inscris</h1>
    <section>
        <form action="Inscription.php" method="post">

            <input type="file"
                   id="avatar" name="avatar"
                   accept="image/png, image/jpeg">

            <br/>
            <label class="Label-pseudo">
                <input type="text" name="Pseudo" placeholder="test" onclick="this.select()" class="bluegrey">
            </label>
            <br/>
            <label class="Label-nom">
                <input type="text" name="NOM" placeholder="NOM" onclick="this.select()" class="bluegrey">
            </label>
            <br/>
            <label class="Label-prenom">
                <input type="text" name="Prenom" placeholder="Prénom" onclick="this.select()" class="bluegrey">
            </label>
            <br/>
            <label class="Label-datenaissance">
                <input type="date" name="datenaissance" placeholder="Date de Naissance"  onclick="this.select()" class="bluegrey typo-grey">
            </label>
            <br/>
            <label class="Label-adressemail">
                <input type="email" name="AdresseMail" placeholder="Adresse mail" onclick="this.select()" class="bluegrey">
            </label>
            <br/>
            <label class="Label-mdp">
                <input type="password" name="Mdp" placeholder="Mot-de-passe" onclick="this.select()" class="bluegrey">
            </label>
            <br/>
            <label class="Label-confirmationmpd">
                <input type="password" name="ConfirmationMdp" placeholder="Confirmation Mot-de-passe" onclick="this.select()" class="bluegrey">
            </label>
            <br/>
            <input type="checkbox" id="casementionslegale" name="scales">
            <label for="casementionslegale" class="label-casementionlegale">En cliquant sur S’inscrire, vous acceptez nos <a href="MentionsLegales.html" class="typo-blue">Conditions générales</a>. Découvrez comment nous recueillons, utilisons et partageons vos données en lisant notre <a href="MentionsLegales.html#section-CollecteDonnees" class="typo-blue">Politique d’utilisation des données</a> et comment nous utilisons les cookies et autres technologies similaires en consultant notre <a href="MentionsLegales.html#section-Cookies" class="typo-blue">Politique d’utilisation des cookies</a>. Vous recevrez peut-être des notifications par mail de notre part et vous pouvez à tout moment<a href="Desabonner.html" class="typo-blue">vous désabonner</a>.</label>
            <br/>
            <label class="Label-valider bouton">
                <input type="submit" value="S'inscrire" class="green typo-white">
            </label>
        </form>
    </section>
</div>

<?php
if(isset($_POST['Pseudo']) AND isset($_POST['NOM']) AND isset($_POST['Prenom']) AND isset($_POST['datenaissance']) AND isset($_POST['AdresseMail']) AND isset($_POST['Mdp'])){
    $date = new DateTime($_POST['datenaissance']);
    $test = $date->format('Y-m-d');
    $joueur  = new Joueur($_POST['Pseudo'], $_POST['NOM'],$_POST['Prenom'], $test, $_POST['AdresseMail'], $_POST['Mdp']);
    $joueur->inscription();
}
?>
</body>
</html>