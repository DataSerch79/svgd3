<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mis Proyectos de D3</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/d3.js"></script>
</head>
<body>

  <!-- navbar -->
  <div class="navbar-navbar-expand-lg navbar-light bg-light shadow mb-4">
    <div class="container-fluid-nav text-center">
      <a href="#"><img src="img/logo-unir.png" class="logo"></a>
    </div>
  </div>
  <!-- /navbar -->

  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1>Herramientas de Visualización</h1>
      </div>
    </div>

    <div class="row mt-4">
      <!-- Biografia -->
      <div class="col-md-4">
        <div class="text-center">
          <img src="img/Sergio_foto.png" class="avatar rounded-circle"><br>
          <h3>Sergio Rodriguez</h3>
        </div>
        <p>Actuario, cientifico de Datos y especialista en Investigación de mercado. Ha trabajado en los últimos 15 años en agencias de investigación y medios digitales</p>
        <p>Actualmente está estudiando una Maestria en Análisis y Visualización de Datos Masivos (Big Data) en la Universidad Internacional de la Rioja en México</p>
      </div>
      <!-- /biografia -->

      <!-- proyectos -->
      <div class="col-md-8">
        <div class="card shadow">
          <div class="card-header">
            <h3>Proyectos</h3>
          </div>
          <div class="card-body">
            <div class="media mb-4">
              <img src="img/Tarea1.png" class="captura rounded mr-3">
              <div class="media-body">
                <a href="tarea1.html">
                  <h5 class="mt-0">Tarea Uno</h5>
                </a>
                Gráfica de barras horizontal básica usando D3
              </div>
            </div>

          </div>
          <div class="card-body">
            <div class="media mb-4">
              <img src="img/Tarea2.png" class="captura rounded mr-3">
              <div class="media-body">
                <a href="tarea2.html">
                  <h5 class="mt-0">Tarea dos</h5>
                </a>
                Gráfica de Pastel utilizando SVG,con relleno interactivo al pasar sobre los sectores con el mouse
              </div>
            </div>

          </div>          
        </div>
      </div>
      <!-- /proyectos -->
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>