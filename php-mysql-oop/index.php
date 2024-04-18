<?php
include 'Item.php';

$item = new Item($pdo);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemName = $_POST['name'] ?? '';
    if (!empty($itemName))
    {
        $item->addItem($itemName);
    }
}

$items = $item->getAllItems();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CRUD App</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Add Item</h2>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Item name">
        <input type="submit" value="Add">
    </form>

    <h2>Item list</h2>
    <ul>
        <?php
        foreach ($items as $item):
            echo "<li>";
            echo $item['name'];
            echo "</li>";
        endforeach;
        ?>
    </ul>
</body>
</html>
