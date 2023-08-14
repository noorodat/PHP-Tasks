<?php 

include_once('./dbh-inc.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $pro_name = $_POST["productName"];
    $pro_desc = $_POST["productDescription"];
    $pro_price = $_POST["price"];
    $pro_cate = $_POST["category"];

    $stmt = $db_connection -> prepare("INSERT INTO products(name, description, price, category) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssds', $pro_name, $pro_desc, $pro_price, $pro_cate);

    if($stmt->execute()) {
        header("Location: page.php");
        exit();
    } else {
        echo "<p style='color: red;'>Error while inserting data</p>";
    }

    $stmt->close();
    $db_connection->close();
}

?>