<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="css/img/Logo/logo.png">
    <title>Quae Ludo | Inscription</title>
    <link rel="stylesheet" href="css/mise-en-page.css">
    <link rel="stylesheet" href="css/typographie.css">
</head>
<body>
<?php   require_once 'BDD/Classes/class.Joueur.php';
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
?>
<header>
    <div class="bouton-compte">
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
                  v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
            </path>
        </svg>
    </div>
    <div class="logo-nom">
        <img src="css/img/Logo/logo.png" class="logo-header" alt="Logo Quae Ludo">
        <a href="accueil.html">Quae Ludo</a>
    </div>
    <div class="bouton-annuler">
        <svg xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 352 512">
            <path fill="#FAFAFA"
                  d="M242.72 256l100.07-100.07
                  c12.28-12.28 12.28-32.19 0-44.48
                  l-22.24-22.24
                  c-12.28-12.28-32.19-12.28-44.48 0
                  L176 189.28 75.93 89.21
                  c-12.28-12.28-32.19-12.28-44.48 0
                  L9.21 111.45
                  c-12.28 12.28-12.28 32.19 0 44.48
                  L109.28 256 9.21 356.07
                  c-12.28 12.28-12.28 32.19 0 44.48
                  l22.24 22.24
                  c12.28 12.28 32.2 12.28 44.48 0
                  L176 322.72
                  l100.07 100.07
                  c12.28 12.28 32.2 12.28 44.48 0
                  l22.24-22.24
                  c12.28-12.28 12.28-32.19 0-44.48
                  L242.72 256z">

            </path>
        </svg>
    </div>
</header>

<div class="page">
    <svg xmlns="http://www.w3.org/2000/svg"
         viewBox="-2 -2 335.667 623.972"
         class="SVG-Fond">
        <path id="pion"
              data-name="Pion"
              d="M1518.71,434.474
              c.547-3.39-.786-11.5-2.844-17.19
              a60.322,60.322,0,0,0-5.325-10.348,78.3,78.3,0,0,0-4.871-6.708,100.666,100.666,0,0,0-13.284-13.314
              c-5.647-4.8-12.591-10.02-21.488-16.231-3.209-2.179-5.809-4.358-5.809-4.782a24.672,24.672,0,0,1,1.27-4.358
              c.063-.174.106-.374.163-.555
              a30.06,30.06,0,0,0,.2-15.422,25.05,25.05,0,0,0-1.6-4.076
              c-2.074-4.206-5.626-8.7-11.837-15.231-8.837-9.261-11.8-13.376-16.039-22.153a133.353,133.353,0,0,1-13.316-48.721
              c-.335-4.053-1.243-24.421-1.938-41.854-.559-14.064-.979-26.219-.846-26.355.062-.119,4.055-1.149,8.9-2.36
              a101.722,101.722,0,0,0,22.839-8.291,29.9,29.9,0,0,0,8.755-6.477
              c3.691-4.358,4.356-6.415,4.356-13.617,0-6.3-.119-6.839-1.814-9.926-2.784-5.085-8.534-9.078-18.279-12.83-3.206-1.211-3.871-1.757-4.961-4-1.817-3.693-5.206-7.264-9.867-10.289-2.3-1.392-4.114-2.906-4.114-3.268
              s3.933-4.539,8.653-9.2
              c11.259-11.137,16.341-18.7,20.64-30.685,6.96-19.247,7.566-37.767,1.816-55.379
              a81.716,81.716,0,0,0-4.19-10.282
              c-1.424-2.954-3.03-5.924-4.775-8.835-5.271-8.8-11.738-17-17.848-22.16
              a87.412,87.412,0,0,0-13.626-9.387
              A107.987,107.987,0,0,0,1387.5-41.235
              c-5.507-1.211-23.967-2.057-28.627-1.392
              a115.943,115.943,0,0,0-32.453,9.773
              c-11.029,5.277-20.373,12.227-27.343,20.55
              a110.56,110.56,0,0,0-13.27,20.16
              c-.158.31-.314.622-.468.931
              a89.763,89.763,0,0,0-7.566,21.153
              c-3.509,16.525-.241,38.613,8.171,55.379,3.812,7.566,8.232,13.195,17.006,21.848,4.661,4.541,8.413,8.6,8.413,8.958
              s-1.815,1.876-4.055,3.268
              c-4.72,3.025-8.11,6.6-9.926,10.289-1.089,2.238-1.755,2.784-4.961,4-9.686,3.69-15.495,7.807-18.339,12.89-1.635,3.027-1.757,3.633-1.757,9.867,0,7.2.667,9.259,4.358,13.617,2.085,2.5,5.739,5.025,10.53,7.39
              a106.753,106.753,0,0,0,21.064,7.378
              c4.844,1.211,8.837,2.241,8.9,2.36.126.154-.236,10.853-.741,23.768-.7,17.976-1.693,40.251-2.043,44.441-1.574,18.52-6.9,37.04-14.949,52.051-3.874,7.2-6.052,10.107-14.708,19.126-5.153,5.429-8.445,9.5-10.582,13.195
              a26.682,26.682,0,0,0-2.55,5.809,29.814,29.814,0,0,0,.362,15.977
              c.181.5.353,1,.507,1.466
              a16.57,16.57,0,0,1,.764,2.892
              c0,.424-2.6,2.6-5.81,4.782-3.108,2.17-6.256,4.44-9.261,6.665-6.293,4.663-11.933,9.128-15.13,12.036
              a88.364,88.364,0,0,0-16.642,19.809,47.784,47.784,0,0,0-3.936,8.091
              c-2.057,5.69-3.39,13.8-2.844,17.19.3,2.117.06,2.6-3.268,6.777
              a59.5,59.5,0,0,0-4.658,6.885,66.754,66.754,0,0,0-6.357,14
              c-2,6.9-2,20.153,0,27.173,3.027,10.591,9.2,20.88,19.791,33.045,12.444,14.25,20.033,21.1,31.4,27.639,2.344,1.351,4.837,2.688,7.58,4.076,21.128,10.608,46.8,17.362,73.727,20.3
              a290.8,290.8,0,0,0,65.7-.335
              c25.823-3.105,50.37-9.754,70.708-19.967,3.415-1.725,6.447-3.378,9.271-5.071,10.451-6.261,17.891-13.112,29.708-26.644,10.592-12.165,16.763-22.453,19.791-33.045,2-7.02,2-20.275,0-27.173a64.2,64.2,0,0,0-5.385-12.282,62.857,62.857,0,0,0-5.631-8.6
              C1518.65,437.077,1518.407,436.591,1518.71,434.474Z"
              transform="translate(-1203.325 43.381)"
              fill="#fcfcfc00"
              stroke="rgba(0,0,0,0.18)"
              stroke-miterlimit="10"
              stroke-width="3"/>
    </svg>
    <form action="inscription.php" method="post">
        <p>
            <label>
                <input type="text" name="Pseudo" value="Pseudo" onclick="this.select()">
            </label>
            <label>
                <input type="text" name="NOM" value="NOM" onclick="this.select()">
            </label>
            <label>
                <input type="text" name="Prenom" value="Prénom" onclick="this.select()">
            </label>
            <label>
                <input type="date" name="datenaissance" value="Date de Naissance"  onclick="this.select()">
            </label>
            <label>
                <input type="text" name="AdresseMail" value="Adresse mail" onclick="this.select()">
            </label>
            <label>
                <input type="text" name="Mdp" value="Mot-de-passe" onclick="this.select()">
            </label>
            <label>
                <input type="text" name="ConfirmationMdp" value="Confimation mot-de-passe" onclick="this.select()">
            </label>
            <input type="submit" value="valider">
        </p>
    </form>
    <!--<form action="inscription.php" method="post">
        <p>
            <label>
                <input type="text" name="Pseudo" value="Pseudo" onclick="this.select()">
            </label>
            <label>
                <input type="text" name="NOM" value="NOM" onclick="this.select()">
            </label>
            <label>
                <input type="text" name="Prenom" value="Prénom" onclick="this.select()">
            </label>
            <p class="fallbackLabel">Date de Naissance</p>
            <div class="fallbackDatePicker">
                <span>
                    <label for="day"></label>
                    <select id="day" name="month">
                        <option selected>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                    </select>
                    <span>
                        <label for="month">/</label>
                        <select id="month" name="month">
                            <option selected>Janvier</option>
                            <option>Février</option>
                            <option>Mars</option>
                            <option>Avril</option>
                            <option>Mai</option>
                            <option>Juin</option>
                            <option>Juillet</option>
                            <option>Août</option>
                            <option>Septembre</option>
                            <option>Octobre</option>
                            <option>Novembre</option>
                            <option>Décembre</option>
                        </select>
                    </span>
                    <span>
                        <label for="year">/<input type="date" value="aaaa" onclick="this.select()"></label>
                    </span>
                </span>
            </div>

            <label>
                <input type="text" name="AdresseMail" value="Adresse mail" onclick="this.select()">
            </label>
            <label>
                <input type="text" name="Mdp" value="Mot-de-passe" onclick="this.select()">
            </label>
            <label>
                <input type="text" name="ConfirmationMdp" value="Confimation mot-de-passe" onclick="this.select()">
            </label>
            <input type="submit" value="valider">
    </form>-->
</div>
<?php
if(isset($_POST['Pseudo']) AND isset($_POST['NOM']) AND isset($_POST['Prenom']) AND isset($_POST['datenaissance']) AND isset($_POST['AdresseMail']) AND isset($_POST['Mdp']) AND isset($_POST['ConfirmationMdp'])){
    $joueur  = new Joueur($_POST['Pseudo'], $_POST['NOM'],$_POST['Prenom'], $_POST['datenaissance'], $_POST['AdresseMail'], $_POST['Mdp'], $_POST['ConfirmationMdp']);
    $joueur->inscription();
    echo $_POST['Pseudo'];
    echo $_POST['NOM'];
    echo $_POST['Prenom'];
    echo $_POST['datenaissance'];
    echo $_POST['AdresseMail'];
    echo $_POST['Mdp'];
    echo $_POST['ConfirmationMdp'];
    echo $joueur->pseudo;
}
?>


</body>
</html>