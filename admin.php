<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container" style="padding-top: 80px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Loo postitus</h2>
                <form method="post" action="add_post.php">
                    <div class="mb-3">
                        <label for="title" class="form-label">Pealkiri</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Sisu</label>
                        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Lisa postitus</button>
                </form>

                <hr class="mt-4">

                <h2>Manage Posts</h2>
                <ul class="list-group">
                    <?php
                    // Read the contents of the file line by line
                    $file = fopen("postitus1.txt", "r");
                    if ($file) {
                        while (($line = fgets($file)) !== false) {
                            // Split each line into title and content
                            $parts = explode(",", $line);
                            if (count($parts) >= 2) {
                                $title = $parts[0];
                                $content = $parts[1];
                                // Display the post
                                echo "<li class='list-group-item'><strong>$title</strong><br>$content";
                                echo "<form method='post' action='delete_post.php'>";
                                echo "<input type='hidden' name='title' value='$title'>";
                                echo "<button type='submit' class='btn btn-danger btn-sm'>Delete</button>";
                                echo "</form>";
                                echo "</li>";
                            }
                        }
                        fclose($file);
                    } else {
                        echo "Unable to open file.";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
