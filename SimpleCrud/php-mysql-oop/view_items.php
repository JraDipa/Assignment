<?php
include 'dbconfig.php';
include 'Item.php';

$item = new Item($pdo);

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $item_data = $item->getItem($id);
}

?>

<h2>Item Details</h2>
<ul>
    <li><strong>ID:</strong> <?= $item_data['id']?></li>
    <li><strong>Name:</strong> <?= $item_data['name']?></li>
</ul>