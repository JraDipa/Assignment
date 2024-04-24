<?php
include 'dbconfig.php';
include 'Item.php';

$item = new Item($pdo);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $item_data = $item->getItem($id);
}

if (isset($_POST['id']) && isset($_POST['name'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $item->updateItem($id, $name);
    header('Location: index.php');
    exit;
}

?>

<form action="update_item.php" method="post">
    <input type="hidden" name="id" value="<?= $id?>">
    <label for="name">Item Name:</label>
    <input type="text" id="name" name="name" value="<?= $item_data['name']?>"><br><br>
    <input type="submit" value="Update Item">
</form>