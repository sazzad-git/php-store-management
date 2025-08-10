<?php
require("connection.php");
require("my_function.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Product</title>
</head>

<body>
    <?php
    if (isset($_GET["store_product_name"])) {

        $store_product_name = $_GET["store_product_name"];
        $store_product_quantity = $_GET["store_product_quantity"];
        $store_product_entry_date = $_GET["store_product_entry_date"];


        $sql = "INSERT INTO store_product (store_product_name, store_product_quantity,store_product_entry_date) VALUES ('$store_product_name', '$store_product_quantity', '$store_product_entry_date')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Data Not inserted";
        }
    }

    ?>

    <!-- Select from category -->
    <?php


    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">

        Product: <br>

        <select name="store_product_name">
            <?php
            data_list("product", "product_id", "product_name");
            ?>

        </select>

        <br> <br>
        Product Quantity: <br>
        <input type="text" name="store_product_quantity"><br> <br>
        Store Entry Date: <br>
        <input type="date" name="store_product_entry_date"><br><br>
        <input type="submit" value="submit">

    </form>

</body>

</html>