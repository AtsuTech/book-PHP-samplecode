<?php
$user = " ●●● ";
$pass = " ●●● ";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=db1;charset=utf8', $user, $pass);
    $sql = "SELECT * FROM recipes WHERE id = " .$_GET['id'];
    $result = $dbh->query($sql);
    var_dump($result);
    echo "<pre>";
    print_r($result->fetchall());
} catch (Exception $e) {
    echo " エラー発生: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . "<br>";
    die();
}