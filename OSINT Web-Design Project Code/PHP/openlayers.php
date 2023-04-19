<script>
        var map = new ol.Map({
    target: 'map',
    layers: [
      new ol.layer.Tile({
        source: new ol.source.OSM()
      })
    ],
    view: new ol.View({
      center: ol.proj.fromLonLat([0, 0]),
      zoom: 2
    })
  });

  var coordinates = <?php echo json_encode($coordinates); ?>;
  var vectorSource = new ol.source.Vector();

  for (var i = 0; i < coordinates.length; i++) {
    var longitude = coordinates[i][1];
    var latitude = coordinates[i][0];
    var feature = new ol.Feature({
      geometry: new ol.geom.Point(ol.proj.fromLonLat([longitude, latitude]))
    });
    vectorSource.addFeature(feature);
  }

  var vectorLayer = new ol.layer.Vector({
    source: vectorSource
  });

  map.addLayer(vectorLayer);
  </script>