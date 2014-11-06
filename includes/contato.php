<form method="post" action="engine/mail.php" enctype="multipart/form-data">
    <label class="control-label">Nome:</label><br />
        <input type="text" class="form-control" name="nome" placeholder="Nome" /><br />
    <label class="control-label">E-mail:</label><br />
        <input type="text" class="form-control" name="email" placeholder="e-mail" /><br />
    <label class="control-label">Assunto:</label><br />
        <input type="text" class="form-control" name="assunto" placeholder="Assunto" /><br />
    <label class="control-label">Mensagem:</label><br />
        <textarea name="mensagem" class="form-control"></textarea><br />

    <input type="submit" class="btn btn-default" name="enviar" value="enviar">
</form>