<?php
require("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>

<body>
    <?php
    if (isset($_GET["product_name"])) {

        $product_name = $_GET["product_name"];
        $product_category = $_GET["product_category"];
        $product_code = $_GET["product_code"];
        $product_entry_date = $_GET["product_entry_date"];

        $sql = "INSERT INTO product (product_name, product_category,product_code, product_entry_date ) VALUES ('$product_name', '$product_category', '$product_code', '$product_entry_date')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Not inserted";
        }


    }
    ?>

    <?php
    $sql = "SELECT * category";
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        Product: <br>
        <input type="text" name="product_name"><br> <br>
        Product Category: <br>

        <select name="product_category" id="">
            <option value=""></option>
        </select>

        <input type="text" name="product_category"><br> <br>
        Product Code: <br>
        <input type="text" name="product_code"><br> <br>
        Product Entry Date: <br>
        <input type="date" name="product_entry_date"><br><br>
        <input type="submit" value="submit">

    </form>

</body>

</html>