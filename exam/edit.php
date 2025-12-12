<?php 
include "db.php"; 
$id = $_GET["id"];
$item = $conn->query("SELECT * FROM item_sale WHERE id=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5" style="max-width: 600px;">
    <h3 class="mb-4 fw-bold">Edit Item</h3>

    <form method="POST" class="card p-4 shadow-sm">

        <div class="mb-3">
            <label>Item Code</label>
            <input type="text" name="item_code" value="<?= $item['item_code'] ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Item Name</label>
            <input type="text" name="item_name" value="<?= $item['item_name'] ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Quantity</label>
            <input type="number" name="quantity" value="<?= $item['quantity'] ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Expired Date</label>
            <input type="date" name="expired_date" value="<?= $item['expired_date'] ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label>Note</label>
            <textarea name="note" class="form-control"><?= $item['note'] ?></textarea>
        </div>

        <button type="submit" name="update" class="btn btn-warning">Update</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
</div>

</body>
</html>

<?php
if (isset($_POST["update"])) {
    $code = $_POST["item_code"];
    $name = $_POST["item_name"];
    $qty  = $_POST["quantity"];
    $date = $_POST["expired_date"];
    $note = $_POST["note"];

    $sql = "UPDATE item_sale 
            SET item_code='$code', item_name='$name', quantity=$qty, expired_date='$date', note='$note'
            WHERE id=$id";

    if ($conn->query($sql)) {
        header("Location: index.php");
    }
}
?>