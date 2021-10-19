<!doctype html>
<html>
    <head>
        <title>Accueil</title>
        <meta charset='utf-8'>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
        
      
    </head>
    
    <body>
        <br>
        <h1 style="text-align:center">Félicitations  <?php session_start(); echo $_SESSION['username']?> , vous êtes connecté ! <br> Accédez à vos différents composants.</h1>
        <br><br><br>
        
        
        <div class="container">
            <div class="row">
                <a href="https://www.google.fr/" target="_blank"><img class="col-sm" src="img/github.png" width="200px" height="220px"></a>
                <a href="" target="_blank"><img class="col-sm" src="img/jenkins.png" width="200px" height="220px"></a>
                <a href="" target="_blank"><img class="col-sm" src="img/sonarqube.png" width="350px" height="220px"></a>
            </div>
        </div>
     
    </body>
</html>