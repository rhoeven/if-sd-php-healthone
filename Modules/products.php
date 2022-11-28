<?php
function getProducts(int $categoryId):array {
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM product WHERE category_id=?');
    $sth->bindParam(1,$categoryId);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS,'product');
}

function getProduct(int $productId):product {
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM product WHERE id=?');
    $sth->bindParam(1,$productId);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS,'product')[0];
}
?>