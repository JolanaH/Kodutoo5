<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the title parameter exists
    if (isset($_POST["title"])) {
        // Get the title of the post to be deleted
        $titleToDelete = $_POST["title"];

        // Open the file in read mode
        $file = fopen("postitus1.txt", "r");
        // Check if the file was opened successfully
        if ($file) {
            // Create a temporary array to hold posts
            $posts = [];

            // Read the contents of the file line by line
            while (($line = fgets($file)) !== false) {
                // Split each line into title and content
                $parts = explode(",", $line);
                // Check if the title matches the title to be deleted
                if (count($parts) >= 2 && trim($parts[0]) !== $titleToDelete) {
                    // If it doesn't match, add the post to the temporary array
                    $posts[] = $line;
                }
            }
            // Close the file
            fclose($file);

            // Open the file in write mode to overwrite it with updated posts
            $file = fopen("postitus1.txt", "w");
            // Check if the file was opened successfully
            if ($file) {
                // Write each post from the temporary array back to the file
                foreach ($posts as $post) {
                    fwrite($file, $post);
                }
                // Close the file
                fclose($file);
                
                // Redirect back to the admin page after deleting the post
                header("Location: admin.php");
                exit();
            } else {
                // Display an error message if unable to open the file
                echo "Unable to open file for writing.";
            }
        } else {
            // Display an error message if unable to open the file
            echo "Unable to open file for reading.";
        }
    } else {
        // Display an error message if the title parameter is missing
        echo "Title parameter is missing.";
    }
} else {
    // Display an error message if the form was not submitted
    echo "Form was not submitted.";
}
?>
