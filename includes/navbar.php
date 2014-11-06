<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Fundation PHP</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="home">Home</a></li>
                <li><a href="empresa">Empresa</a></li>
                <li><a href="produtos">Produtos</a></li>
                <li><a href="contato">Contato</a></li>
            </ul>

            <!-- form search -->
            <form class="navbar-form navbar-right" role="form" method="post" action="includes/search.php" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" placeholder="Procurar" name="procurar" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Search</button>
            </form>
        </div><!--/.nav-collapse -->
    </div>
</div>


