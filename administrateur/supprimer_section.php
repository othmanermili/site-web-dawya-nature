<?php
    try{
        $con = new PDO("mysql:host=localhost;dbname=dawyanature","root","");
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sh = $con->prepare("DELETE FROM all_articles WHERE id=?");
        $sh->execute(array($_GET['id']));
        header("location:modifier_supprimer.php");

    }catch(PDOException $ex){
        echo "Erreur".$ex->getMessage();
    }
?>