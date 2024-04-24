<?php
include 'dbconfig.php';
include 'Item.php';

$item = new Item($pdo);

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $item->addItem($name);
    header('Location: view_items.php');
    exit;
}

?>

<form action="add_item.php" method="post">
    <label for="name">Item Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <input type="submit" value="Add Item">
</form>