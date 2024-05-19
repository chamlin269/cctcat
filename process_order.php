<?php
if(isset($_POST['cart_contents'])) {
    $cart_contents = $_POST['cart_contents'];
    // Define the file path where you want to save the cart contents
    $file_path = 'cart_contents.txt';

    // Open the file (create if it doesn't exist) in append mode
    $file_handle = fopen($file_path, 'a');

    // Write the cart contents to the file
    fwrite($file_handle, $cart_contents . PHP_EOL);

    // Close the file handle
    fclose($file_handle);

    echo "Cart contents saved to file successfully.";
} else {
    echo "No cart contents received.";
}
?>
