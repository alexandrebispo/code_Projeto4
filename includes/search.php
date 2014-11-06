<?php
require_once(__DIR__ . "/../engine/search.php");

$Searching = $_POST['procurar'];

if(!empty($Searching)):
    $search = getSearch($Searching);

    foreach($search as $res):
        ?>
        <h1><?php echo $res['title'];  ?></h1><br />
        <p><?php echo $res['content'];  ?></p>
        <?php $res++  ?>
        <hr /><br />
    <?php
    endforeach;
else:
    ?>
    <h1>Não encontrei sua busca!</h1>
<?php endif; ?>