<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file if needed -->
</head>
<body>
    <?php include 'header.php'; ?> <!-- Include your common header -->
    
    <div class="container">
        <h1>404 - Page Not Found</h1>
        <p>The page you are looking for does not exist.</p>
        <p>Please check the URL or go back to the <a href="index.php">homepage</a>.</p>
    </div>
    
    <?php include 'footer.php'; ?> <!-- Include your common footer -->

    <?php
    // Set HTTP status code to 404
    http_response_code(404);
    ?>
</body>
</html>
