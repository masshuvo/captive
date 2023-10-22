<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Make sure the email address is not empty
    if (!empty($email)) {
        // Open the file for appending
        $file = fopen("email.txt", "a");
        if ($file) {
            // Write the email address to the file
            fwrite($file, $email . "\n");
            fclose($file);
            echo "Email address has been saved successfully.";
        } else {
            echo "Error opening the file.";
        }
    } else {
        echo "Email address is empty.";
    }
} else {
    echo "Invalid request method.";
}
?>
