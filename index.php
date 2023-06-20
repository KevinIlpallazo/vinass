<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <script src="https://kit.fontawesome.com/0e16635bd7.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins&display=swap" rel="stylesheet">
    <style>
    * {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      scroll-behavior: smooth;
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .boxtwo {
      width: 100%;
      max-width: 400px;
      padding: 20px;
      background-color: #fff;
    }
  </style>

    <title>Fiorella</title>
  </head>
  <body>
    <div class="container-fluid">
      <div id="home">
        <nav class="navbar navbar-expand-lg px-5 pt-4">
          <a class="navbar-brand" href="index.php">Fiorella</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <div></div>
            <div></div>
            <div></div>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-link active" href="index.php">HOME</a>
              <a class="nav-link" href="menu.php">MENU</a>
              <a class="nav-link" href="reservation.php">RESERVATIONS</a>
              <?php
              session_start();
              if (isset($_SESSION['name']))
                echo '<a class="nav-link" href="logout.php">LOGOUT</a>';
              else
                echo '<a class="nav-link" href="login.php">LOGIN</a>';
              ?>
              <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
            </div>
          </div>
        </nav>
        <div class="hometext d-none d-md-block">
          <div data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1500">
            <h1>Where Flavor Meets Serenity: Brew Your Perfect Moment at Fiorella!</h1><br>
          </div>
        </div>
        <div class="scrolldown d-none d-lg-block">
    <a href="menu.php" class="scroll-button-container">
    <button class="scroll-button" onclick="this.classList.add('clicked')">Pesan</button>
      </a>
    </div>
    </div>
    </div>
    <div class="what-you-can-do">
  <div class="subtitle">
    <h1>BUKAN SEKEDAR MINUMAN BIASA</h1>
  </div>
  <div class="row">
  <div class="col-md-6">
    <div class="column">
      <i class="fas fa-coffee" style="color: black;"></i>
      <span class="what-you-can-do-subtitle">Kopi Segar</span>
      <span class="what-you-can-do-text">Nikmati segarnya secangkir kopi pilihan dengan biji kopi berkualitas tinggi yang dipanggang dengan sempurna.</span>
    </div>
  </div>
  <div class="col-md-6">
    <div class="column">
      <i class="fas fa-mug-hot" style="color: black;"></i>
      <span class="what-you-can-do-subtitle">Non coffe</span>
      <span class="what-you-can-do-text">Nikmati berbagai minuman Non-Coffe yang segar dan lezat untuk menemani waktu santai Anda .</span>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="column">
      <i class="fas fa-bread-slice" style="color: black;"></i>
      <span class="what-you-can-do-subtitle">Pastry</span>
      <span class="what-you-can-do-text">Nikmati aneka pastry dengan bahan organik terbaik yang kami sediakan untuk menghadirkan cita rasa sempurna.</span>
    </div>
  </div>
  <div class="col-md-6">
    <div class="column">
      <i class="fas fa-seedling" style="color: black;"></i>
      <span class="what-you-can-do-subtitle">Bahan Organik</span>
      <span class="what-you-can-do-text">Nikmati kelezatan minuman kami dengan bahan organik kami yang ditanam dengan cara yang ramah lingkungan, tanpa bahan kimia berbahaya.</span>
    </div>
  </div>
</div>

<footer>
    <div class="container">
      <div class="row">
        <section class="col-md-4">
          <h4>Jam Kerja :</h4>
          <p>Senin - Kamis : 11:00am - 11:00pm<br>
          Jumat - Minggu : 09:00am - 11:30pm</p>
          <br>
        </section>
        <section class="col-md-4">
          <h4>Address :</h4>
           <p>Cisarua - Jalan Raya Puncak<br>
           Bogor, Jawa Barat, Indonesia</p>
          <br>
        </section>
        <section class="col-md-3 offset-md-1">
          <h4>Contact Us :</h4>
          <i class="fab fa-facebook"></i>
          <i class="fab fa-twitter"></i>
          <i class="fas fa-envelope"></i>
          <i class="fab fa-instagram"></i><br>
          <a href="">Fiorella@gmail.com</a>
          <br>
        </section>
      </div>
      <div class="text-center">&copy; Copyright Fiorella 2023</div>
    </div>
  </div>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
