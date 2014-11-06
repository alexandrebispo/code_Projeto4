<?php
/**
 * Created by PhpStorm.
 * User: Alexandre Bispo
 * Date: 01/10/14
 * Time: 10:34
 */

require_once(__DIR__ . "/engine/conexao.php");
require_once(__DIR__ . "/admin/painel/engine/password.php");


echo "#### Conectando com banco ####";
$conn = getDb();
echo " - ok </ br>";

echo "##### removendo tabela do Banco de dados ######";
$conn->query("DROP TABLE pages");
echo " - ok! </ br>";

echo "######### Criando tabela de pages #########";
$conn->query("
    /*!40101 SET @saved_cs_client     = @@character_set_client */;
    /*!40101 SET character_set_client = utf8 */;
    CREATE TABLE `pages` (
      `idpages` int(11) NOT NULL AUTO_INCREMENT,
      `title` varchar(45) NOT NULL,
      `path` varchar(45) NOT NULL,
      `content` longtext NOT NULL,
      `date_create` datetime NOT NULL,
      PRIMARY KEY (`idpages`)
    ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
    /*!40101 SET character_set_client = @saved_cs_client */;
");
echo " - ok </ br>";

echo "########## Inserindo dados no database #######";
$conn->query("
    LOCK TABLES `pages` WRITE;
    /*!40000 ALTER TABLE `pages` DISABLE KEYS */;
    INSERT INTO `pages` VALUES (1,'home','includes/paine.php','<h1>home - Banco de Dados!</h1>','2014-08-16 00:04:00'),
                               (2,'empresa','includes/empresas.php','<h1>Empresa - Banco de dados!</h1>','2014-08-16 00:07:00'),
                               (3,'route','model/route.php','<h1>Página de teste para rota</h1>','2014-08-16 01:28:00');
    /*!40000 ALTER TABLE `pages` ENABLE KEYS */;
    UNLOCK TABLES;
");

echo " - ok </ br>";

echo "############# Tabela com dados inseridos #############";

echo "############# Criando tabelas de usuarios #############";

$conn->query("
     DROP TABLE IF EXISTS `user`;
    /*!40101 SET @saved_cs_client     = @@character_set_client */;
    /*!40101 SET character_set_client = utf8 */;
    CREATE TABLE `user` (
      `iduser` int(11) NOT NULL AUTO_INCREMENT,
      `nome` varchar(100) DEFAULT NULL,
      `sobrenome` varchar(100) DEFAULT NULL,
      `datadecadastro` datetime NOT NULL,
      `email` varchar(100) DEFAULT NULL,
      `senha` varchar(100) NOT NULL,
      PRIMARY KEY (`iduser`)
    ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
    /*!40101 SET character_set_client = @saved_cs_client */;
");

echo " - ok! </ br>";
echo "############# Tabelas user criada #############";

echo "############# inserindo usuario e senha #############";

$senha = password_hash('1234', PASSWORD_DEFAULT);

$conn->query("
    INSERT INTO `user`
    VALUES (1,'Alexandre','bispo','2012-08-20 14:00:00','alexandrebispo.mestre@gmail.com', '{$senha}');
");


echo " - ok! </ br>";
echo "Usuario inserido!";