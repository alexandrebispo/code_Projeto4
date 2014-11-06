<div class="jumbotron">
        <div style="padding: 5%; margin-left: 30%" class="navbar-collapse collapse">
            <form class="form-horizontal" role="form" method="post" action="/admin/painel/engine/auth.php" enctype="multipart/form-data">
                <div class="col-xs-4">
                    <?php
                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                        }
                    ?>


<input type="text" class="form-control" name="email" placeholder="email"><br />
<input type="password" class="form-control" name="password" placeholder="password"><br />
<button type="submit" class="btn btn-success">Entrar</button>
</div>
</form>

</div><!--/.navbar-collapse -->
</div>