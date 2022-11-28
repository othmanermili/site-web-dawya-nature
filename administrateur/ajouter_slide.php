<?php
    try{
        $con = new PDO("mysql:host=localhost;dbname=dawyanature","root","");
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        extract($_POST);
        $content_dir = 'image_ajoutee/';
        $tmp_file = $_FILES['image']['tmp_name'];
        if(!is_uploaded_file($tmp_file)){
            echo "<script>alert('image est introuvable')</script>;";
        }
        $type_file = $_FILES['image']['type'];
        if(!strstr($type_file,'jpeg') && !strstr($type_file,'png')){
            echo "<script>alert('ce fichier \"n'\"est pas une image')</script>;";
        }
        $name_file = time().'.jpg';
        if(!move_uploaded_file($tmp_file,$content_dir.$name_file)){
            echo "<script>alert('imposible de copier le fichier')</script>;";
        }
        $sh = $con->prepare("INSERT INTO all_slides_normal(titre,contenu,images_name) VALUES (?,?,?)");
        $sh->execute(array($titre,$contenu,$name_file));
        echo "<script>alert('opération réussite')</script>;" ;
        header("Location: ajouter_slide.html");
    }catch(PDOException $ex){
        echo "Erreur".$ex->getMessage();
    }
?>