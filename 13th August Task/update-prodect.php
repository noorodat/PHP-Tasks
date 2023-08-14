<?php
include_once('dbh-inc.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $p_name = $_POST["productName"] ?? '';
    $p_desc = $_POST["productDescription"] ?? '';
    $p_price = $_POST["price"] ?? '';
    $p_cate = $_POST["category"] ?? '';

    $sql = "UPDATE products SET name='$p_name', description='$p_desc', price='$p_price', category='$p_cate' WHERE id='$id'";

    $result = mysqli_query($db_connection, $sql);

    if ($result) {
        header("Location: page.php");
    } else {
        echo "Failed to Update product" . "<br>";
        exit();
    }
} else {
    echo "Product ID not provided for Update" . "<br>";
}
?>
