<?php
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require_once(__DIR__ . "/painel/includes/head.php"); ?>
</head>

<body role="document">
<div>
    <?php require_once(__DIR__ . "/painel/includes/navbar.php"); ?>
</div>
<div class="page-header">
    <?php

    //Página para tratamento de rotas
    require_once(__DIR__ . "/painel/engine/rotas.php");


    ?>
</div>
<!-- /container -->
<footer style="background: #333333; margin: 0; padding: 0" ><?php   require_once(__DIR__ . "/../includes/footer.php"); ?></footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="assets/js/docs.min.js"></script>
</body>
</html>
