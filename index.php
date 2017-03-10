<?php
require_once "connect.php";
if(!isset($_GET['page'])){
    $targetPage = "teletubbies";
} else {
    // sinon j'essaie d'afficher la page demandee
    $targetPage = $_GET['page'];
}
// ¬_¬
$stmt = $pdo->query("SELECT `id`, `slug`, `nav-title`, `h1`, `description`, `img-alt`, `img-src` FROM `page` WHERE `slug` = '".$targetPage."';");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
// si la page demandee existe, je l'affiche
if ($row !== false) {
    include "includes/header.php";
    include "template.php";
} else {
    // sinon, j'affiche une erreur
    header("HTTP/1.0 404 Not Found");
    include "includes/header.php";
    include "404.php";
}
include "includes/footer.php";
