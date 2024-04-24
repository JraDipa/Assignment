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
<html>

<head>
    <title>Simple CRUD App</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2>Add Item</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Item name">
        <input type="submit" value="Add">
    </form>

    <h2>Items List</h2>
    <ul>
        <?php
foreach ($items as $item):
            echo "<li>". $item['name']. " 
            <a href='update_item.php?id=". $item['id']. "'><input type=submit value='Update' href></a> 
            <form action='delete_item.php' method='get'><input type='hidden' name='id' value='". $item['id']. "'><input type='submit' value='Delete' onclick=\"return confirm('Are you sure you want to delete this item?')\"></form></li>";
        endforeach;
   ?>
    </ul>
</body>

</html>