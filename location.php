<?php
include('navbar.php');
?>

<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
    <style>
      .map {
        height: 400px;
        width: 100%;
      }



    </style>
    <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
    <title>OpenLayers example</title>
  </head>


  <body>
    <center><h2>Women And Children Center Map Location</h2>
    <h4>Del Carmen, Iligan City, Lanao del Norte</h6>
    <h4>The blue circle is the location.. yeah i know its small</h6></center>
    <div id="map" class="map"></div>
    <script type="text/javascript">
      var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.OSM()
          })
        ],
        view: new ol.View({
          center: ol.proj.fromLonLat([124.25441623, 8.23138953]),
          zoom: 16 
        })
      });

     //Adding a marker on the map
var marker = new ol.Feature({
  geometry: new ol.geom.Point(
    ol.proj.fromLonLat([124.25441623,8.23138953])
  ),  // Cordinates of New York's Town Hall
});
var vectorSource = new ol.source.Vector({
  features: [marker]
});
var markerVectorLayer = new ol.layer.Vector({
  source: vectorSource,
});
map.addLayer(markerVectorLayer);

    </script>
  </body>
</html>