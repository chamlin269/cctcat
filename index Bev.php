<?php
$message = '';
$error = '';

if (isset($_POST["submit"])) {
    if (empty($_POST["code"])) {
        $error = "<label class='text-danger'>Enter Code</label>";
    } elseif (empty($_POST["title"])) {
        $error = "<label class='text-danger'>Enter Title</label>";
    } elseif (empty($_POST["price"])) {
        $error = "<label class='text-danger'>Enter Price</label>";
    } elseif (empty($_POST["servings"])) {
        $error = "<label class='text-danger'>Enter Servings</label>";
    } else {
        if (file_exists('beverages.json')) {
            $current_data = file_get_contents('beverages.json');
            $array_data = json_decode($current_data, true);
            
            // Assuming image data is being posted correctly
            $extra = array(
                'code'     => $_POST['code'],
                'title'     => $_POST['title'],
                'image'     => $_POST['image'],
                'price'     => $_POST["price"],
                'servings'  => $_POST["servings"]
            );
            
            // Append the new data to the existing products array
            $array_data['products'][] = $extra;
            
            // Encode the updated data
            $final_data = json_encode($array_data);
            
            if (file_put_contents('beverages.json', $final_data)) {
                $message = "<label class='text-success'>File Appended Successfully</label>";
            } else {
                $error = "<label class='text-danger'>Error in Appending Data</label>";
            }
        } else {
            $error = "<label class='text-danger'>JSON File not exists</label>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Beverages</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Remove <script src="./products.json"></script> as it's not needed -->
</head>
<body>
<br />
<div class="container" style="width:500px;">
    <h3 align="">Add a Beverage</h3><br />
    <form method="post">
        <?php
        if (!empty($error)) {
            echo $error;
        }
        ?>
        <br />
        <label>Code</label>
        <input type="text" name="code" class="form-control" /><br />
        <label>Title</label>
        <input type="text" name="title" class="form-control" /><br />
        <!-- Correct the image input type -->
        <label>Input Image</label>
        <input type="text" name="image" class="form-control" /><br />
        <label>Price</label>
        <input type="text" name="price" class="form-control" /><br />
        <label>Quantity</label>
        <input type="text" name="servings" class="form-control" /><br />
        <input type="submit" name="submit" value="Add" class="btn btn-info" /><br />
        <?php
        if (!empty($message)) {
            echo $message;
        }
        ?>
    </form>
</div>
<br />

</body>
</html>
