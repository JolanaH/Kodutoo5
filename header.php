<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kodutöö5</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="jumbotron position-relative" style="background-image: url('images/image1.jpg'); background-size: cover; background-position: center; height: 400px;">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><b>Jolana Hiiesalu</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php"><b>AVALEHT</b></a></li>
              <li class="nav-item"><a class="nav-link" href="minust.php"><b>MINUST</b></a></li>
              <li class="nav-item"><a class="nav-link" href="kontakt.php"><b>KONTAKT</b></a></li>
              <li class="nav-item"><a class="nav-link" href="admin.php"><b>ADMIN</b></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container-fluid text-center text-white">
        <h1 class="display-4"><b>Praktika Maltal</b></h1>
        <p class="lead">Minu välipraktika HKHK-s</p>
      </div>
    </div>
    <a class="carousel-control-prev" href="#" role="button" data-bs-slide="prev" onclick="changeImage(-1)" style="top: 50%; transform: translateY(-50%); left: 10px;">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#" role="button" data-bs-slide="next" onclick="changeImage(1)" style="top: 50%; transform: translateY(-50%); right: 10px;">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>

  <script>
    var images = ['image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg', 'image5.jpg'];
    var currentIndex = images.indexOf(document.querySelector('.jumbotron').style.backgroundImage.replace('url("images/', '').replace('")', ''));

    function changeImage(direction) {
      currentIndex = (currentIndex + direction + images.length) % images.length;
      document.querySelector('.jumbotron').style.backgroundImage = 'url("images/' + images[currentIndex] + '")';
    }
  </script>

  <!-- Bootstrap JS and jQuery (needed for navbar toggler and dropdown functionality) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
