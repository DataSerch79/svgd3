<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mis Proyectos de D3</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/d3.js"></script>
</head>

<body>

  <!-- navbar -->
  <div class="navbar-navbar-expand-lg navbar-light bg-light shadow mb-4">
    <div class="container-fluid-nav text-center">
      <a href="index.php"><img src="img/logo-unir.png" class="logo"></a>
    </div>
  </div>
  <!-- /navbar -->

  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1>Herramientas de Visualización</h1>
      </div>
    </div>

   

      <!-- proyectos -->
      <div class="col-md-8">

        

        <div class="grafica mb-4 shadow" id="grafica">
        </div>

        <h3>Total hospitalizados COVID Ciudad de México Marzo - Julio 2020</h3>
    
      </div>
      <!-- /proyectos -->
    </div>
  </div>

  <script>

datos = [328, 2900, 6355, 5288, 4512]

function render(data) {
  vbars = d3.select('#grafica')
            .selectAll('div.hbar')
            .data(data)

  vbars.enter()
        .append('div').attr('class', 'hbar')
        .style('width', function(d) {
          return (d/10) + 'px'
        })
        .text(function(d) {
          return d
        })
}

render(datos)

  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
</body>

</html>