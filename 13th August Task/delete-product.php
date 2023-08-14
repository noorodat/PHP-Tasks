<?php
include_once('dbh-inc.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM products WHERE id = ?";
    
    $stmt = $db_connection->prepare($sql);
    $stmt->bind_param("i", $id); // "i" indicates integer type
    
    if ($stmt->execute()) {
        session_start();
        header("Location: page.php");
    } else {
        echo "Failed to delete product" . "<br>";
        exit();
    }
} else {
    echo "Product ID not provided for deletion" . "<br>";
}
?>
