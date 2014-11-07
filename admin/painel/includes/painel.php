<?php
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require_once(__DIR__ . "/../includes/head.php"); ?>
    <?php require_once(__DIR__ . "/../../../engine/conexao.php"); ?>

</head>

<body role="document">
<div>
    <?php require_once(__DIR__ . "/../includes/navbar.php"); ?>
</div>
<div class="page-header">
    <?php

    $conn = getDb();
    $sql = "SELECT * FROM pages";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($res as $key => $value){
?>

    <table class="table table-bordered">
            <thead>
              <tr>
                <th>idpages</th>
                <th>title</th>
                <th>content</th>
                <th>date_create</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $value['idpages']; ?></td>
                <td><?php echo $value['title']; ?></td>
                <td rowspan="4"><?php echo $value['content']; ?></td>
                <td><?php echo $value['date_create']; ?></td>
              </tr>
            </tbody>
          </table>
    <?php   }  ?>
        </div>


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
