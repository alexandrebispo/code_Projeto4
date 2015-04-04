<?php
/**
 * Created by PhpStorm.
 * User: Alexandre Bispo
 * Date: 14/11/14
 * Time: 12:03
 */
require_once(__DIR__ . '/head.php');
require_once(__DIR__ . "/../../../engine/conexao.php");

if(isset($_POST['enviar'])){
    if(!empty($_POST['title']) AND !empty($_POST['path']) AND !empty($_POST['content']) AND !empty($_POST['dat_create'])){


        $conn = getDb();
        $sql = "UPDATE pages
                SET title=:title, path=:path, content=:content, date_create=:date_create
                WHERE idpages=:idpages";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam("title", $_POST['title']);
        $stmt->bindParam("path", $_POST['path']);
        $stmt->bindParam("content", $_POST['content']);
        $stmt->bindParam("date_create", $_POST['dat_create']);
        $stmt->bindParam("idpages", $_GET['pid']);
        $stmt->execute();

        header('Location: painel.php');

    }else{
        echo "Não foram preenchido todos os campos! <br>";
    }

}
    //trazendo as informação a serem alteradas;
    $conn = getDb();
    $sql = "SELECT * FROM pages WHERE idpages=:idpages";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam("idpages", $_GET['pid']);
    $stmt->execute();
    $res =  $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($res as $row):

?>

<form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
    <input type="hidden" class="form-control" name="idpage" value="<?php $row['idpages'] ?>"><br />
    <input type="text" class="form-control" name="title" value="<?php  echo $row['title']; ?>"><br />
    <input type="text" class="form-control" name="path" value="<?php  echo $row['path']; ?>"><br />
    <textarea id="editor" class="form-control" name="content" ><?php  echo $row['content']; ?>
    </textarea><br />
    <input type="datetime" class="form-control" name="dat_create" value="<?php  echo $row['date_create']; ?>"><br />
    <input type="submit" name="enviar" value="Alterar" class="btn btn-success">
</form>

<?php endforeach; ?>
