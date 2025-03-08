<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit();
}

// Evitar que el usuario vuelva atrás después de cerrar sesión
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Usuarios</title>

      <!--BOOSTRAP-->
      <link href="public/CSS/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> <!--iconos-->

    
    <!--se ocupara JQUERY-->
    <script>src = "public/js/jquery-3.7.1.min.js" </script>

    <link rel="stylesheet" href="public/CSS/style.css">

</head>
<body>

<script>
    window.history.pushState(null, "", window.location.href);
    window.onpopstate = function () {
        window.history.pushState(null, "", window.location.href);
    };
</script>

    <h2>Bienvenido, <?php echo $_SESSION['Nombre']; ?>!</h2>
    <p>Este es tu menú exclusivo.</p>
    <a href="logout.php"><button>Cerrar Sesión</button></a>


<br><br>

 <!----seccmento de libros --->
 <section id="libros">
      <div class="container">
        <div class="row">
          <div class="col-ml-12">
            <h3 style="text-align: center">Guias de  <span style="color: brown;">Libros</span></h3>
            <br>
          </div>

          <div class="row"> <!--.col-md-3*4-->
            
            <div class="col-md-3 zoomP">
              <div class="card">
                <img src="public/image/livro2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center;">Card title</h5>
                  <p class="card-text" style="text-align: justify;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <center>
                    <a href="examenes.php" class="btn btn-danger">realizar examen</a>
                  </center>
                </div>
                <br>
              </div>
              

            </div>
            <div class="col-md-3 zoomP">

              <div class="card">
                <img src="public/image/livro2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center;">Card title</h5>
                  <p class="card-text" style="text-align: justify;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <center>
                    <a href="lecciones.php" class="btn btn-danger">realizar examen</a>
                  </center>
                </div>
               <br> 
              </div>

            </div>
            <div class="col-md-3 zoomP">

              <div class="card" >
                <img src="public/image/livro2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center;">Card title</h5>
                  <p class="card-text" style="text-align: justify;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <center>
                    <a href="lecciones.php" class="btn btn-danger">realizar examen</a>
                  </center>
                </div>
                <br>
              </div>


              </div>
            <div class="col-md-3 zoomP">

              <div class="card" >
                <img src="public/image/livro2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center;">Card title</h5>
                  <p class="card-text" style="text-align: justify;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <center>
                    <a href="lecciones.php" class="btn btn-danger">realizar examen</a>
                  </center>
                </div>
                <br>
              </div>


              </div>
      </div>

    </section>
</body>
</html>