<?php
/**
 * Created by PhpStorm.
 * User: Alexandre Bispo
 * Date: 14/11/14
 * Time: 12:03
 */
require_once(__DIR__ . '/head.php');

if(isset($_POST['enviar'])){
   if(!empty($_POST['title']) AND !empty($_POST['path']) AND !empty($_POST['content']) AND !empty($_POST['dat_create'])){
       require_once(__DIR__ . "/../../../engine/conexao.php");

       $conn = getDb();
       $sql = "INSERT INTO pages(title, path, content, date_create)
            VALUES(:title, :path, :content, :date_create)";
       $stmt = $conn->prepare($sql);
       $stmt->bindParam("title", $_POST['title']);
       $stmt->bindParam("path", $_POST['path']);
       $stmt->bindParam("content", $_POST['content']);
       $stmt->bindParam("date_create", $_POST['dat_create']);
       $stmt->execute();

       header('Location: painel.php');

   }else{
       echo "Não foram preenchido todos os campos! <br>";
   }

}


?>
<body>
<form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
    <input type="hidden" class="form-control" name="idpage" placeholder="idpage"><br />
    <input type="text" class="form-control" name="title" placeholder="title"><br />
    <input type="text" class="form-control" name="path" placeholder="path"><br />
    <textarea id="editor" class="form-control" name="content" placeholder="content"></textarea><br />
    <input type="date" class="form-control" name="dat_create" placeholder="dat_create"><br />
    <input type="submit" name="enviar" class="btn btn-success">
</form>
</form>
</body>
</html>