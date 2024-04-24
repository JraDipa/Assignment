<?php
include 'dbconfig.php';
include 'Item.php';

$item = new Item($pdo);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $item->deleteItem($id);
    header('Location: index.php');
    exit;
}

?>