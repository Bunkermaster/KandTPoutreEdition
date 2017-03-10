<?php
require_once "../connect.php";
$stmt = $pdo->query("DELETE FROM`page` WHERE `id` = ".$_GET['id'].";");
header('Location: index.php');
