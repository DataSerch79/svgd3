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

        <style>
            .inside
            {
                font-size:20px;
                font-weight:bold;
                fill:black;
            }
            .label
            {
                font-size:15px;
                font-weight:bold;
            }
            .tooltip
            {
                position: absolute;
                background:silver;
                color:white;
                font-size: 20px;
                padding:5px;
            }
        </style>

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

    

        <h3>Porcentaje de Usuarios de internet 6+ años por escolaridad </h3>
        <p>Encuesta ENDUTIH 2019 (México)</p>
      </div>
      <!-- /proyectos -->
    </div>
  </div>

  <script>
    var width = 800, height= 500;
     var colors = d3.scaleOrdinal(d3.schemeDark2);
     var svg = d3.select("body").append("svg")
                 .attr("width", width).attr("height", height)
                 .style("background", "pink");
     var details = [{grade:"Hasta educación básica", number:20}, {grade:"Secundaria y Media Superior", number:52}, 
                    {grade:"Superior", number:28} 
                    ];
     var data = d3.pie().sort(null).value(function(d){return d.number;})(details);
     console.log(data);
     var segments = d3.arc()
                      .innerRadius(0)
                      .outerRadius(200)
                      .padAngle(.05)
                      .padRadius(50);
     var sections = svg.append("g").attr("transform", "translate(220, 220)")
                        .selectAll("path").data(data);
     sections.enter()  
     .append("path").attr("d", segments)
     .attr("fill", function(d){return colors(d.data.number);})
     .on("mouseover", function(){
         d3.select(this).transition().duration(300).attr("fill", "darkgray");
     })
     .on("mouseout", function(){
          d3.select(this).transition().duration(300).attr("fill", function(d){return colors(d.data.number);});
     })
     .on("mousedown", function(d){
         var total = d3.sum(details.map(function(d){return d.number;}));
         var percent = Math.round(10000*d.data.number/total)/100;
         var position = d3.mouse(svg.node());
         console.log(position);
         d3.select("body").append("div").classed("tooltip", true)
                .style("left", position[0] +20 + "px")
                .style("top", position[1] + "px")
                .html(d.data.grade + " : " + percent + "%");
     })
     .on("mouseup", function(){
         d3.select(".tooltip").remove();
     });
     
     var content = d3.select("g").selectAll("text").data(data);
     content.enter().append("text").classed("inside", true).each(function(d){
         var center = segments.centroid(d);
         d3.select(this).attr("x", center[0]).attr("y", center[1]).text(d.data.number);
     });
     
     var legends = svg.append("g").attr("transform", "translate(500, 100)")
                        .selectAll(".legends").data(data);
     var legend = legends.enter().append("g").classed("legends", true).attr("transform", function(d,i){return "translate(0," + (i+1)*30 + ")";});
     legend.append("rect").attr("width", 10).attr("height", 10).attr("fill", function(d){return colors(d.data.number);});
     legend.append("text").classed("label", true).text(function(d){return d.data.grade;})
            .attr("fill", function(d){return colors(d.data.number);})
            .attr("x", 20)
            .attr("y", 20);
 </script>
</body>
</html>

