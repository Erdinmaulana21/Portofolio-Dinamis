<?php
include 'koneksi.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Coming+Soon&family=Open+Sans&display=swap" rel="stylesheet">
 
    <title>Portofolio</title>
    
  </head>
  <body>

    <?php

        $sql = "SELECT * FROM profil";
        $query = mysqli_query($connect,$sql);

        while($profil = mysqli_fetch_array($query)){


      ?>
    
    <div id="home"></div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top p-3" style="background-color: #596e79;">

      <div class="container-sm">
        <a href="https://www.instagram.com/erdinm21_/" class="nav-link  active me-4 fs-5 fw-bold" style="color: black;"><?php echo $profil['nama'] ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse-sm navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link  active me-4 fw-boldder" aria-current="page" href="#home"><b>HOME</b></a>
            <a class="nav-link  active me-4 fw-boldder" href="#about"><b>ABOUT</b></a>
            <a class="nav-link  active me-4 fw-boldder" href="#gallery"><b>GALLERY</b></a>
            <a class="nav-link  active me-4 fw-boldder" href="#contact"><b>CONTACT</b></a>
            <a class="nav-link  active me-4 fw-boldder" href="admin.php"><b>ADMIN</b></a>
          </div>
        </div>
      </div>
    </nav>


    <!-- Jumbotron -->
    
    <div class="jumbotron-sm jumbotron-fluid mb-5" style="height: 600px; background-color: #596e79; background-size: cover; background-position-y: -150px;">
      <div class="container-sm text-light text-center">
      
        <img class="img-thumbnail rounded-circle shadow" src="<?php echo $profil['gambar'] ?>" alt="Erdin Maulana" width="250px" height="250px" style="margin-top: 220px ;">
        <p class="lead text-center mt-2 fw-bold fs-2"><?php echo $profil['nama'] ?></p>

        
      </div>
    </div>
    <?php
        }
        ?>

    <!-- Waves -->
    <svg id="about" style="margin-top: -48px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#596e79" fill-opacity="1" d="M0,256L24,245.3C48,235,96,213,144,208C192,203,240,213,288,218.7C336,224,384,224,432,197.3C480,171,528,117,576,128C624,139,672,213,720,208C768,203,816,117,864,96C912,75,960,117,1008,149.3C1056,181,1104,203,1152,224C1200,245,1248,267,1296,256C1344,245,1392,203,1416,181.3L1440,160L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>


    <?php

        $sql = "SELECT * FROM about";
        $query = mysqli_query($connect,$sql);

        while($about = mysqli_fetch_array($query)){


      ?>
    <!-- About -->
    <div class="container-sm" style="margin-top: px;">
      <h1 class="text-center fw-bold mb-5 display-5">About</h1>
      <div class="col-sm justify-content text-center fs-5">
        <p class="col-sm"><?php echo $about['about'] ?></p>
      </div>
    </div>

    <?php } ?>
    
    

    <!-- Waves 2 -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#596e79" fill-opacity="1" d="M0,128L40,122.7C80,117,160,107,240,117.3C320,128,400,160,480,144C560,128,640,64,720,64C800,64,880,128,960,133.3C1040,139,1120,85,1200,80C1280,75,1360,117,1400,138.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>



    <!-- Gallery -->
    <span id="gallery"></span>
   <section class="pb-5" style="background-color: #ffff;">
    <h1 class="text-center fw-bold mb-5 display-5 text-light">Gallery</h1>
     <div class="container-sm ">
       <div class="row text-center">

       <div class="card-group justify-content-evenly">
       <?php               
            $id = mysqli_query($connect,'SELECT * FROM gallery ORDER BY gallery.id');
            while ($isi = mysqli_fetch_array($id)){
                $idp = $isi['id'];
        ?>
         <div class="col-md-4 mb-5">
          <div class="card shadow-sm" style="width: 98%;">
            <img src="<?php echo $isi['gambar'] ?>" style="height:230px;" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title fw-bold text-center"><?php echo $isi['judul'] ?></h5>
              <p class="card-text"><?php echo $isi['isi'] ?></p>
            </div>
          </div>
         </div>
        <?php 
            } 
        ?>
       </div>
       </div>
     </div>
   </section>


   <!-- Waves 3 -->
    <svg id="about" style="margin-top: -48px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#596e79" fill-opacity="1" d="M0,256L24,245.3C48,235,96,213,144,208C192,203,240,213,288,218.7C336,224,384,224,432,197.3C480,171,528,117,576,128C624,139,672,213,720,208C768,203,816,117,864,96C912,75,960,117,1008,149.3C1056,181,1104,203,1152,224C1200,245,1248,267,1296,256C1344,245,1392,203,1416,181.3L1440,160L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>

   <!-- Contact -->
   <br id="contact"><br><br><br>
   <div class="container-sm">
    <h1 class="text-center mb-5"><b>Contact</b></h1>
    <form action="contact.php" method="POST">
      
      <input type="hidden" name="id">

      <div class="form-group mb-3">
        <label for="name">Nama</label>
        <input id="name" class="form-control" type="text" name="nama" placeholder="Masukkan Nama">
      </div>
      <div class="form-group mb-3">
        <label for="email">Alamat Email</label>
        <input id="email" class="form-control" type="email" name="email" placeholder="name@example.com">
      </div>
      <div class="form-group mb-3">
        <label for="comment">Komentar</label>
        <textarea id="comment" class="form-control" name="komentar" rows="3" placeholder="Komentar disini"></textarea>
      </div>

      <button class="btn btn-outline-primary" type="submit" name="simpan" style="width: 100%;">Kirim</button>

    </form>
   </div>



   <!-- Footer -->
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#596e79" fill-opacity="1" d="M0,128L40,122.7C80,117,160,107,240,117.3C320,128,400,160,480,144C560,128,640,64,720,64C800,64,880,128,960,133.3C1040,139,1120,85,1200,80C1280,75,1360,117,1400,138.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
   <footer class="footer position-relative text-center pb-3" style="background-color: #596e79;">
     <p>Created by <a href="https://www.instagram.com/erdinm21_/" class="text-white fw-bold">Erdin Maulana</a></p> 
     </div>
   </footer>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>