<?php
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require_once(__DIR__ . "/../includes/head.php"); ?>
    <?php require_once(__DIR__ . "/../../../engine/conexao.php") ?>
    <?php require_once(__DIR__ . "/../../../engine/config.php") ?>

</head>

<body role="document">
<div>
    <?php require_once(__DIR__ . "/../includes/navbar.php"); ?>
</div>
<div class="page-header">
    <?php

    $conn = getDb();
    $sql = "SELECT * FROM education.pages";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($res);




   if(isset($_SESSION['authing'])){

   }else{

   }

    ?>
</div>
<!-- /container -->
<footer style="background: #333333; margin: 0px ; padding: 0px" ><?php   require_once(__DIR__ . "/../../../includes/footer.php"); ?></footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="assets/js/docs.min.js"></script>
</body>
</html>
