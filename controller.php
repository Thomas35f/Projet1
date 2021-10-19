        <?php
            
        header("Access-Control-Allow-Origin: *");
        header("Content_Type: application/json");
    
            if(isset($_POST)){
                
              require('database.php');
//              session_start();
                
              $username = stripslashes($_POST['username']);
              $username = mysqli_real_escape_string($conn, $username);
           
                
              $password = stripslashes($_POST['password']);
              $password = mysqli_real_escape_string($conn, $password);
            
              //$hash_password = hash('sha256', $password);
                
              //$query = "SELECT * FROM `infos` WHERE user='$username' and pass='$hash_password'";
              $query = "SELECT * FROM `infos` WHERE user='$username' and pass='$password'";
                
              $result = mysqli_query($conn,$query) or die(mysql_error());
              $rows = mysqli_num_rows($result);

              if($rows==1){
                  $_SESSION['username'] = $username;
                  header("Location: accueil.php");
              }else{
                header("Location: erreur.html");
              }
            }
        ?>
