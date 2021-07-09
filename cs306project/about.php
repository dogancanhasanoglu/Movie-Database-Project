<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body style="background-color:#F6F4FA;">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  	<div class="container-fluid">
    <a class="navbar-brand" href="index.php">CS306 BingeWatch</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="moviefile.php">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="directorpage.php">Directors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="starpage.php">Movie Stars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="award.php">Awards</a>
        </li>
      </ul>
      <form class="d-flex" action="search.php" method="POST" autocomplete="off">
        <input class="form-control me-2" type="search" name="input" placeholder="Search Movies" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
 	</div>
	</nav>


  <div class="jumbotron">
    <h1>BingeWatch CS306 Project Team</h1> 
    <p>İlker Gül - Sabancı University</p>
    <p>Doğan Can Hasanoğlu - Sabancı University</p>  
  </div>

  <section class="my-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="images/WhatsApp Image 2021-05-21 at 10.53.43 PM.jpeg" class="img-fluid aboutimg2">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4">BingeWatch creators</h2>
        <p class="py-3">Since the first film cameras were invented in 1891, we can frankly say that movies are with us and bring joy, happiness, sadness, briefly every kind of emotion that humans are experiencing throughout their life journey. Main aim is creating a relational database with MySQL. Database mainly focuses on movies including rating, actors, directors, producers, awards etc. We will try to analyze features of movies with respect to directors, performers, awards, categories by using relational models</p>
        <p class="py-3">We hope you will find insightful features about cinema. The problem of humanity is that they haven't seen enough movies - all of life's riddles are answered in the movies.</p>
        
      </div>
    
    </div>
    </div>
</section>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>