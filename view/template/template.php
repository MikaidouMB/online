<?php
$backOfficeAdmin = '<li></li>';
?>
<?php
$logout = '<li></li>';
?>
<?php
if (user_is_admin()) {
    ?>
    <?php ob_start(); ?>

    <li class="nav-item">
        <a class="nav-link">|</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?action=listUsers">Membres</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?action=listRooms">Salles</a>
    </li>
    <a href="?action=add"></a>
    <li class="nav-item">
        <a class="nav-link" href="?action=listOrders">Commandes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?action=listRatings">Avis</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?action=listProducts">Produits</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?action=listStats">Statistiques</a>
    </li>
    <?php $backOfficeAdmin = ob_get_clean(); ?>
    <?php
}
?>

<?php
if (user_is_connected()) {
    ?>
    <?php ob_start(); ?>
    <li class="nav-item">
        <a class="nav-link">|</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?action=deconnexion">Déconnexion</a>
    </li>
    <?php $logout = ob_get_clean(); ?>
    <?php
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Switch | <?= $title ?></title>
    <link href="<?php echo URL; ?>css/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo URL; ?>css/shop-homepage.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>css/styles.css" rel="stylesheet" >
</head>


<!------------>
<!-- HEADER -->
<!------------>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href=""><?= $title ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="?action=listProductsIndex">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=login">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=signup">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=listDetails">Profil</a>
                    </li>
                    <?= $backOfficeAdmin ?>
                    <?= $logout ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!------------>
<!-- HEADER -->
<!------------>

<!------------->
<!-- CONTENT -->
<!------------->
<body>
<p id="phpMsg"><?php if (!empty($msg)) {
        echo $msg;
    } ?></p>
<?= $content ?>
</body>
<!------------->
<!-- CONTENT -->
<!------------->

<!------------>
<!-- FOOTER -->
<!------------>
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; SwitchCo 2020</p>
    </div>
    <script src="<?php echo URL; ?>css/vendor/jquery/jquery.min.js"></script>
</footer>
<!------------>
<!-- FOOTER -->
<!------------>
</html>
