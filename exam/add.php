<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5" style="max-width: 600px;">
    <h3 class="mb-4 fw-bold">Add New Item</h3>

    <form action="" method="POST" class="card p-4 shadow-sm">

        <div class="mb-3">
            <label>Item Code</label>
            <input type="text" name="item_code" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Item Name</label>
            <input type="text" name="item_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Quantity</label>
            <input type="number" step="0.01" name="quantity" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Expired Date</label>
            <input type="date" name="expired_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Note</label>
            <textarea name="note" class="form-control"></textarea>
        </div>

        <button type="submit" name="save" class="btn btn-primary">Save</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
</div>

</body>
</html>

<?php
if (isset($_POST["save"])) {
    $code = $_POST["item_code"];
    $name = $_POST["item_name"];
    $qty  = $_POST["quantity"];
    $date = $_POST["expired_date"];
    $note = $_POST["note"];

    $sql = "INSERT INTO item_sale (item_code, item_name, quantity, expired_date, note)
            VALUES ('$code', '$name', '$qty', '$date', '$note')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success mt-3'>Thêm thành công!</div>";
    } else {
        echo "<div class='alert alert-danger mt-3'>SQL Error: " . $conn->error . "</div>";
    }
}
?>