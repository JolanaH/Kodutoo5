<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodutöö5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php include 'header.php'; ?>
       
    <div class="container" style="padding-top: 80px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center"> 
                    <h1><b>MINUST</b></h1>
                    <p>
                        <?php
                            $failinimi = "minust.txt";
                            $sisu = file_get_contents($failinimi);
                            echo nl2br($sisu); 
                        ?>
                    </p> 
                    <img src="about%20me.jpg" alt="About Me" class="img-fluid mb-3">
                </div>
            </div>
        </div>
    </div>
       
    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-rz9yuG9N7VSsFzAGzJxu2Be2anXz1s1sRTBAAKc4F2Jp2HyqD6Cd3uInAi1GgU3E" crossorigin="anonymo"></script>
</body>
</html>
