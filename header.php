

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?php if (isset($title)) : ?>
            <?= $title ?>
        <?php else : ?>
            Page d'accueil
        <?php endif ?>
    </title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome5/css/all.css">
    <link rel="stylesheet" href="font-awesome5/css/all.min.css">
</head>

<body>
    <?php require "menu.php";?>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">Mon site</a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] === '/index.php'):?>active <?php endif ; ?> ">
                <a class="nav-link" href="/index.php">Accueil</a>
            </li>
            <li class="nav-item" <?php if ($_SERVER['SCRIPT_NAME'] === '/contact.php'):?>active <?php endif ; ?>">
                <a class="nav-link" href="/contact.php">Contact</a>
            </li>
        </ul>
    </nav>

    <script src="js/jquery/jquery.js"></script>
    <script src="js/jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

