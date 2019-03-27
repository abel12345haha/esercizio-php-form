<<<<<<< HEAD
<?php

$nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$cognome = (isset($_POST['cognome'])) ? $_POST['cognome'] : '';
$indirizzo = (isset($_POST['indirizzo'])) ? $_POST['indirizzo'] : '';

?>

=======
>>>>>>> 730560cb0afc2e44a15e56613437c49ac06f95c9
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<<<<<<< HEAD
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  
  </head>
  <body>
      <div class="container"> 
        <div class="alert alert-primary" role="alert"> 
        <?php
          foreach ($_POST as $key => $value) {
            print '<li>' . $key . ': ' . $value . '</li>';
             }
            ?>
           </div>
          </div>
         <h1> Insierisci i tuoi dati </h1> 
        <form action="index.php" method="post"> 
        	
       
             <div class="form-group">
              <label for="Name">nome</label>
              <input type="text" class="form-control" id="name" name="nome" aria-describedby="namelHelp" placeholder="Il tuo nome">
              <small id="emailHelp" class="form-text text-muted">Inserisci il tuo nome</small>
            </div>
            <div class="form-group">
              <label for="Name">cognome</label>
              <input type="text" class="form-control" id="name" name="cognome" aria-describedby="namelHelp" placeholder="Il tuo cognome">
              <small id="emailHelp" class="form-text text-muted">Inserisci il tuo cognome</small>
            </div>
               <div class="form-group">
              <label for="Name">indirizzo</label>
              <input type="text" class="form-control" id="name" name="nome" aria-describedby="namelHelp" placeholder="Il tuo indirizzo">
              <small id="emailHelp" class="form-text text-muted">Inserisci il tuo indirizzo</small>
               </div>
                   <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      
      <script src="js/jquery-3.3.1.slim.min.js"> </script>
      <script src="js/1.14.3/umd/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
    </div>
    </body>
  </html>  
=======
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <p>ecco un paragrafo</p>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
>>>>>>> 730560cb0afc2e44a15e56613437c49ac06f95c9
