<?php

ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

$field = $_POST;

if($field != NULL){
    $headers = "From: {$field['email']}" . "\r\n" .
               "Reply-To: {$field['email']}" . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

    $nome = filter_var($field['nome'], FILTER_SANITIZE_STRING);
    $mail = filter_var($field['email'], FILTER_VALIDATE_EMAIL);
    $assunto = filter_var($field['assunto'], FILTER_SANITIZE_STRING);
    $menssagem = filter_var($field['mensagem'], FILTER_SANITIZE_STRING);

    $to = "alexandrebispo.mestre@gmail.com";
    $dados = array();
    $dados = "Nome: $nome";
    $dados = "Assunto: $assunto";
    $header = "From: $to";
    $msg = $menssagem;

    mail($to,$dados,$msg,$header);
}

include_once(__DIR__."/../includes/head.php");
?>
<body role="document">
<?php
    require_once(__DIR__."/../includes/navbar.php");

if( $nome != NULL && $mail != NULL && $assunto != NULL && $menssagem != NULL) {
    ?>
    <script language="javascript">
        window.alert("Sua mensagem foi enviada com sucesso!");
    </script>
    <div style="width: 300px; margin-left: 500px">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Segue abaixo menssagem enviada para:</h3>
            </div>
                <div class="panel-body">

                    Nome:     <?php echo $nome; ?><br />
                    email:    <?php echo $mail; ?><br />
                    Assunto:  <?php echo $assunto; ?><br />
                    Mensagem: <?php echo $menssagem; ?>

                </div>
        </div>
    </div>
    <script language="javascript">
        window.alert("Sua mensagem foi enviada com sucesso!");
    </script>

<?php
}
else{
?>
    <script language="javascript">
        window.alert("Você precisa preencher todos os campos!");
    </script>

    <footer>
<?php
}
     require_once(__DIR__ . "/../includes/footer.php");
?>
    </footer>
</body>
</html>