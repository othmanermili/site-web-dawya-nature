<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="modifier_section.css" />
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

        <li><a href="login.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
    <section class="main">
        <div class="main-top">
          <img src="images\dawyanature.png" width="500px">
        </div>
        <?php 
          try{
            $con = new PDO("mysql:host=localhost;dbname=dawyanature","root","");
            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $id = $_GET["id"];
            $titre = $_GET["titre"];
            $contenu = $_GET["contenu"];

            }catch(PDOException $ex){
                echo "Erreur".$ex->getMessage();
            }
        ?>
        <form action="" method="POST">
          <h1 style="text-align: center;font-size: 30px;font-weight: lighter; margin: 50px; ">Modifier l'offre</h1>
            <table class="table" bordred>
                <tr>
                    <td><label for="titre">Le titre :</label></td>
                    <td><input type="text" class="input" id="titre" name="titre" placeholder="Entrer le titre" value="<?php echo $titre ; ?>"></td>
                </tr>
                <tr>
                    <td><label for="contenu">Le contenue :</label></td>
                    <td><textarea name="contenu" id="contenu" cols="138" rows="10"><?php echo $contenu ; ?></textarea></td>
                </tr>
            </table>
            <button type="submit" name="modifier" id="modifier">Modifier</button>
           
            


            <?php


              if(isset($_POST["modifier"])){
                $sh = $con->prepare("UPDATE all_slides_normal SET titre=?,contenu=? WHERE id=$id");
                $sh->execute(array($_POST["titre"],$_POST["contenu"]));
                header("location:gerer_offre.php");
              }


            ?>
            
            
            
        </form>
    </section>

    
    
  </div>
</body>
</html>