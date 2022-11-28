<?php try {
  $con = new PDO("mysql:host=localhost;dbname=dawyanature", "root", "");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
  echo "Erreur" . $ex->getMessage();
}
?>

<!doctype html>
<html lang="fr">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/brands.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style_nav.css">
  <link rel="stylesheet" href="style_footer.css">
  <link rel="stylesheet" href="swiper-bundle.min.css">
  <link rel="stylesheet" href="style_swiper.css">
</head>

<body>
  <div class="hero">

    <video autoplay loop muted plays-inline class="bg-video">
      <source src="videos/yt5s.io-.mp4" type="video/mp4">
    </video>

    <nav>
      <img src="images/dawyanature.png" class="logo">
      <ul>
        <li><a href="reservation.php">RESERVER</a></li>
        <li><a href="about_us.html">ABOUT US</a></li>
      </ul>
    </nav>
    <div class="content">
      <h1>Bienvenue chez <br>
        <p style="color: rgb(255, 128, 0);float:left;font-weight: bold;margin-left: 55px;">DAWYA</p>
        <p style="color: rgb(0, 91, 0);font-weight: bold;">NATURES</p>
      </h1>
      <div class="mask">
        <img src="images/Capture-removebg-preview (1).png" alt="MAPS" class="img-maps">
      </div>
    </div>
  </div>




  <!--___________________________________________________________________________________________________________________________________-->






  <div class="container">


    <div class="card-body">
      <h4 class="card-title" style="margin: 50px 0 50px;font-size: 32px;color: #0EB000;font-weight: bolder;">Commune de Boujmil</h4>
      <div class="row">
        <div class="col-8 text1">
          <p class="card-text" style="font-size: 24px;color: #000000;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
            Boujmil est un village perché dans une zone de moyenne montagne de l’arrière pays typique des montagnes Jbela.A flan de coteau et au pied d’une dorsale calcaire, la zone est constituée de 4 à 5 vallées ancestrales et totalement préservées.Ces espaces magnifiques, entretenues par les paysans locaux avec une vue plongeante sur Tamuda Bay, le Barrage Asmir et les montagnes du RIF sont un paradis pour les randonneurs et/ou les curieux de la nature.
          </p>
        </div>
        <div class="col-4"><img class="img1" style="margin-bottom: 120px;" src="images\bda2a887-6a1b-43e1-8286-71de32d98dde.webp  " alt="Title"></div>
      </div>
    </div>


    <!--___________________________________________________________________________________________________________________________________-->


    <hr class="hr1">
    <h1 style="position: relative;top: -87px;right: -470px;width: 80%;" class="h1-offres">LES OFFRES</h1>
    <hr class="HR1">

    <!--___________________________________________________________________________________________________________________________________-->


    <div class="card-body">
      <h4 class="card-title" style="margin: 50px 0 50px;font-size: 32px;color: rgba(255, 166, 0);font-weight: bolder;">OFFRES DAWYA NATURES</h4>
      <div class="row">
        <div class="col text2">
          <p class="card-text" style="font-size: 24px;color: #000000;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
            Les activités exclusivement outdoor en pleine nature, des micro aventures avec retour vers le local et la tradition, en quête de bien-être et
            revitalisation des sens pour tous les publics : en couple, en famille ou
            entre amis… Adultes, Ados et Enfants pour une immersion totale dans la
            nature.</p>
        </div>
      </div>
    </div>

  </div>


  <div class="slide-container swiper">
    <div class="slide-content">
      <div class="card-wrapper swiper-wrapper">




        <?php

        $sh = $con->prepare("SELECT * FROM all_slides_normal");
        $sh->execute();
        $reponce = $sh->fetchAll(PDO::FETCH_ASSOC);
        foreach ($reponce as $row) {

          echo "<div class=\"card swiper-slide\">
                  <div class=\"image-content\">
                      <span class=\"overlay\"></span>

                      <div class=\"card-image\">
                          <img src=\"administrateur/image_ajoutee/$row[images_name]\" alt=\"img\" class=\"card-img\">
                      </div>
                  </div>

                  <div class=\"card-content\">
                      <h2 class=\"name\">$row[titre]</h2>
                      <p class=\"description\">$row[contenu]</p>
                      <button class=\"button\"><a href=\"reservation.html\" style=\"color:white;text-decoration:none;\">Réserver maintenant</a></button>
                  </div>
              </div>";
        }
        ?>







      </div>
    </div>

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
  </div>


  <!--___________________________________________________________________________________________________________________________________-->



  <div class="container" style="position: relative;top: -80px;">
    <hr>
  </div>


  <!--___________________________________________________________________________________________________________________________________-->



  <div style="position:relative;top: -200px;">
    <div class="container" style="position:relative;top: -80px;">
      <div class="card-body">
        <h4 class="card-title" style="margin: 50px 0 50px;font-size: 32px;color: #0EB000;font-weight: bolder;">OFFRES SUR MESURES DAWYA NATURES</h4>
      </div>
    </div>


    <div class="slide-container swiper">
      <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">





          <?php

          $sh = $con->prepare("SELECT * FROM all_slides_mesure");
          $sh->execute();
          $reponce = $sh->fetchAll(PDO::FETCH_ASSOC);
          foreach ($reponce as $row) {

            echo "<div class=\"card swiper-slide\">
          <div class=\"image-content\">
              <span class=\"overlay\"></span>

              <div class=\"card-image\">
                  <img src=\"administrateur/image_ajoutee/$row[images_name]\" alt=\"img\" class=\"card-img\">
              </div>
          </div>

          <div class=\"card-content\">
              <h2 class=\"name\">$row[titre]</h2>
              <p class=\"description\">$row[contenu]</p>
              <button class=\"button\"><a href=\"reservation.html\" style=\"color:white;text-decoration:none;\">Réserver maintenant</a></button>
          </div>
      </div>";
          }
          ?>



        </div>
      </div>

      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>



  <!--___________________________________________________________________________________________________________________________________-->


  <div style="text-align: center; font-size: xx-large;position: relative;top: -150px;">
    Aujourd’hui avec DAWYA NATURES <br>
    fait une voyage exeptionnelle avec des guides , <br>
    des coachs spécialisés , des animateurs et des artictes land art
  </div>
  <div style="text-align: center; font-size: 45px;position: relative;top: -150px;font-weight: bolder;color: rgb(255, 167, 4);">
    Tout cela pour ravir les visiteurs
  </div>


  <div style="text-align: center;">
    <a href="reservation.html" class="btn lien-reservation">Réserver maintenant</a>
  </div>






















  <footer class="footer">
    <div class="container_footer">
      <div class="row">
        <div class="footer-col">
          <h4>company</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
            <li><a href="#">payment options</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>








  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
<script src="script.js"></script>
<script src="swiper-bundle.min.js"></script>

</html>