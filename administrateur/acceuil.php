<?php
    try{
        $con = new PDO("mysql:host=localhost;dbname=dawyanature","root","");
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $ex){
        echo "Erreur".$ex->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Attendance Dashboard | By Code Info</title>
  <link rel="stylesheet" href="acceuil.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
            <img src="images/dnk.jpg" alt="">
          <span class="nav-item">Micho</span>
        </a></li>
        <li><a href="acceuil.php">
          <i class="fas fa-home"></i>
        <span class="nav-item">Acceuil</span>
      </a></li>
        <li><a href="ajouter_section.html">
            <i class="fas fa-solid fa-plus"></i>
          <span class="nav-item">Ajouter section</span>
        </a></li>
        <li><a href="modifier_supprimer.php">
            <i class="fas fa-solid fa-pen"></i>
          <span class="nav-item">Modifier section</span>
        </a></li>
        <li><a href="modifier_supprimer.php">
            <i class="fas fa-solid fa-trash"></i>
          <span class="nav-item">Supprimer section</span>
        </a></li>
        <li><a href="gerer_offre.php">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Gérer les offres</span>
        </a></li>

        <li><a href="index.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    
    <section class="main">
      <div class="main-top">
        <img src="images/dawyanature.png" width="500px">
      </div>
      <div class="users">
        <div class="card">
          <img src="images\png-clipart-computer-icons-add-button-logo-number-thumbnail-removebg-preview.png">
          <h2>Ajouter une section <br><br></h2>
          <a href="ajouter_section.html" class="button">Ajouter</a>
        </div>
        <div class="card">
          <img src="images/téléchargement.png">
          <h2>Modifier une section <br><br></h2>
          <a href="modifier_supprimer.php" class="button">Modifier</a>
        </div>
        <div class="card">
          <img src="images\1345874-removebg-preview.png">
          <h2>Supprimer une section <br><br></h2>
          <a href="modifier_supprimer.php" class="button">Supprimer</a>
        </div>
        <div class="card">
          <img src="images\4236950-removebg-preview.png">
          <h2>Gérer les offres<br><br></h2>
          <a href="gerer_offre.php" class="button">Gérer</a>
        </div>
      </div>





      







      <section class="attendance">
        <div class="attendance-list">
          <h1>LISTE DES ARTICLES</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>TITRE</th>
                <th>CONTENU</th>
                <th>IMAGE</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $sh = $con->prepare("SELECT * FROM all_articles");
                $sh->execute(); 
                $res = $sh->fetchAll(PDO::FETCH_ASSOC);
                foreach($res as $row){
                  echo  "<tr><td>$row[id]</td><td>$row[titre]</td><td>$row[contenu]</td><td><img src=\"image_ajoutee/$row[images_name]\" alt=\"img\" width=\"150px\" height=\"150px\"></td></tr>" ;
                }
                echo "</tbody>" ;
              ?>
          </table>
        </div>
      </section>
      <section class="attendance">
        <div class="attendance-list">
          <h1>LISTE DES OFFRES DAWYA NATURE</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>TITRE</th>
                <th>CONTENU</th>
                <th>IMAGE</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $sh = $con->prepare("SELECT * FROM all_slides_normal");
                $sh->execute(); 
                $res = $sh->fetchAll(PDO::FETCH_ASSOC);
                foreach($res as $row){
                  echo  "<tr><td>$row[id]</td><td>$row[titre]</td><td>$row[contenu]</td><td><img src=\"image_ajoutee/$row[images_name]\" alt=\"img\" width=\"150px\" height=\"150px\"></td></tr>" ;
                }
                echo "</tbody>" ;
              ?>
          </table>
        </div>
      </section>
      <section class="attendance">
        <div class="attendance-list">
          <h1>LISTE DES OFFRES SUR MESURE DAWYA NATURE</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>TITRE</th>
                <th>CONTENU</th>
                <th>IMAGE</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $sh = $con->prepare("SELECT * FROM all_slides_mesure");
                $sh->execute(); 
                $res = $sh->fetchAll(PDO::FETCH_ASSOC);
                foreach($res as $row){
                  echo  "<tr><td>$row[id]</td><td>$row[titre]</td><td>$row[contenu]</td><td><img src=\"image_ajoutee/$row[images_name]\" alt=\"img\" width=\"150px\" height=\"150px\"></td></tr>" ;
                }
                echo "</tbody>" ;
              ?>
          </table>
        </div>
      </section>
    </section>
  </div>

</body>
</html>
