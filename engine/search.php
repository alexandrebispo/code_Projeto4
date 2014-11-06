<?php

require_once(__DIR__ . "/conexao.php");
//Busca os valores pedidos na caixa de busca.
function getSearch($search){
    $conn = getDb();
    $sql = "SELECT * FROM pages WHERE content like :searching";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue("searching", "%{$search}%");
    $stmt->execute();
    $knownSearch = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $knownSearch;
}

