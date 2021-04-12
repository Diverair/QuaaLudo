<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <?php require_once 'BDD/Classes/class.Groupe.php';
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

    <div>
        <form action="Test.php" method="post">
            <p>
                <input type="text" name="Nom">
                <input type="text" name="Description">
                <input type="submit" value="valider">
            </p>
        </form>
    </div>

    <?php


        if(isset($_POST['Nom']) AND isset($_POST['Description']))
        {
            $groupe  = new Groupe($_POST['Nom'], $_POST['Description']);
            $groupe->addIdGroupe();
            echo $_POST['Nom'];
            echo $_POST['Description'];
        }

    ?>
















</body>
</html>



