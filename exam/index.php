<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sale Items</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h2 class="fw-bold">Sale Items</h2>
        <a href="add.php" class="btn btn-primary">+ Add New</a>
    </div>

    <table class="table table-bordered table-striped shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Item Code</th>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Expired Date</th>
                <th>Note</th>
                <th width="110px">Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM item_sale";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['item_code']}</td>
                    <td>{$row['item_name']}</td>
                    <td>{$row['quantity']}</td>
                    <td>{$row['expired_date']}</td>
                    <td>{$row['note']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}' class='btn btn-sm btn-warning'>Edit</a>
                    </td>
                </tr>
                ";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
