<!DOCTYPE html>
<html ng-app="plunker">

  <head>
    <meta charset="utf-8" />
    <title>Test</title>
    <script>document.write('<base href="' + document.location + '" />');</script>
    <style>
    #map-canvas {
				  height: 500px;
				  width: 700px;
				}
    </style>
  <script data-require="angular.js@1.3.x" src="https://code.angularjs.org/1.3.16/angular.js" data-semver="1.3.16"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuIyR8iIHunjrHCEyPH-AmTeUQxKamejI&callback=myMap"></script>
  <script src="https://raw.githubusercontent.com/LintasBumi/peta.github.io/master/peta.js"></script>  
  </head>
  
  
  <body ng-controller="MainCtrl">
    <div id="map-canvas"></div>
  </body>

</html>
