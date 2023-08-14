<?php include('./dbh-inc.php');

$result = $db_connection->query("SELECT * FROM products");
$row = $result->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="./page.css">
</head>

<body>

    <div class="crud">
        <button id="showAdd">Add</button>
        <a href=""><button>Clear all</button></a>
    </div>
    <div class="add-form">
        <form action="./add-product.php" method="post">
            <label for="productName">Product Name:</label>
            <input type="text" id="productName" name="productName" required><br><br>

            <label for="productDescription">Product Description:</label>
            <input type="text" id="productDescription" name="productDescription" required>
            <br><br>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required><br><br>

            <label for="category">Category:</label>
            <select id="category" name="category" required>
                <option value="">Select a category</option>
                <option value="electronics">Electronics</option>
                <option value="clothing">Clothing</option>
                <option value="home">Home</option>
                <option value="books">Books</option>
            </select><br><br>

            <input type="submit" value="Add Product">
        </form>
    </div>

    <div class="products">

        <table id="products-table">
            <thead>
                <th>Product_name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Operation</th>
            </thead>

            <tbody>
                <?php
                $result = $db_connection->query("SELECT * FROM products");
                while ($row = $result->fetch_assoc()) {


                ?>

                    <tr>

                        <td>
                            <?php echo $row['name']; ?>
                            <input type="text" id="productName" name="productName">
                        </td>
                        <td>
                            <?php echo $row['description']; ?>
                            <input type="text" id="productDescription" name="productDescription">
                        </td>
                        <td>
                            <?php echo "$" . $row['price']; ?>
                            <input type="number" id="price" name="price">
                        </td>
                        <td>
                            <?php echo $row['category']; ?>
                            <select id="category" name="category">
                                <option value="">Select a category</option>
                                <option value="electronics">Electronics</option>
                                <option value="clothing">Clothing</option>
                                <option value="home">Home</option>
                                <option value="books">Books</option>
                            </select>
                        </td>
                        <td>
                            <button class="updateBtn" type="button">Update</button>
                            <a style="color: white; text-decoration: none" href="delete-product.php?id=<?php echo $row['id']; ?>"><button class="deleteBtn" type="button">Delete</button></a>
                            <div class="confirm-update">
                                <button class="no" type="button">Cancle</button>
                                <button>Ok</button>
                            </div>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="./page.js"></script>
</body>

</html>

<?php 

