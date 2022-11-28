<?php
    try{
        $con = new PDO("mysql:host=localhost;dbname=dawyanature","root","");
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        session_start();

    }catch(PDOException $ex){
        echo "Erreur".$ex->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FOR ADMIN</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
    <span><img src="images/blob.png" alt="zefzf" width="250px" height="250px"></span>
    <span><img src="images/blob.png" alt="zefzf" width="350px" height="350px"></span>
    <span><img src="images/blob.png" alt="zefzf" width="450px" height="450px"></span>
    <span><img src="images/blob.png" alt="zefzf" width="200px" height="200px"></span>
    <div class="main">
        <div class="login-box">
            <h2>LOGIN FOR ADMIN</h2>
            <form action="" method="get">
                <div class="user-box">
                    <input type="text" name="username" id="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="user-box">
                    <input type="password" class="pass" name="password" id="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="check">
                    <input type="checkbox" class="show" id="passwordshow">
                    <label for="passwordshow">Show</label>
                </div>
                <button type="submit" name="login" id="login">
                    LOGIN
                </button>
            </form>
        </div>
    </div>
    <script>
        const show = document.querySelector(".show");
        const pass = document.querySelector(".pass");
        

        show.addEventListener("click",()=>{
            if(show.checked){
                pass.setAttribute("type","text");
            }
            else{
                pass.setAttribute("type","password");
            }
        })
    </script>




<?php
    

    if(isset($_GET["login"])){
        session_start();


        try{
            $con = new PDO("mysql:host=localhost;dbname=dawyanature","root","");
            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $req = $con->prepare("SELECT * FROM admin WHERE username=? AND mot_de_passe=?");
            $req->execute(array($_GET["username"],$_GET["password"]));
           
            $count = $req->rowCount();
            
            if($count>0){
                $_SESSION["username"] = $_GET["username"];
                $_SESSION["password"] = $_GET["password"];
                header("location:acceuil.php");
                
            }
            else{
                $message = "non valide !";
                header("location:login.php?msg=$message");
            }


        }catch(PDOException $ex){
            echo "Erreur".$ex->getMessage();
        }
    }

?>

</body>
</html>