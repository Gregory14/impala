var map = L.mapbox.map('map', 'mbouras.ige8aolg')
  .setView([48.8870954, 2.38773], 14);

$.ajax({
  url: "js/marker.geojson"
}).done(function(data) {
	//Recupération Données JSON
	data = $.parseJSON(data);
	var features = data.features;
	var dataCount = features.length;
	for(var i=0; i<dataCount; i++ ){
		
		var element = features[i];
		console.log(element);

		// Design Marker Partage 
		var partageIcon = L.icon({
			iconUrl: 'img/content/map/parcours-partage.png',
			//iconRetinaUrl: 'my-icon@2x.png',
			iconSize: [50, 50],
			iconAnchor: [25, 50],
			popupAnchor: [-3, -76],
			// shadowUrl: 'my-icon-shadow.png',
			// shadowRetinaUrl: 'my-icon-shadow@2x.png',
			// shadowSize: [68, 95],
			// shadowAnchor: [22, 94]
		});

		// Design Marker Nature
		var natureIcon = L.icon({
			iconUrl: 'img/content/map/parcours-nature.png',
			//iconRetinaUrl: 'my-icon@2x.png',
			iconSize: [50, 50],
			iconAnchor: [25, 50],
			popupAnchor: [-3, -76],
			// shadowUrl: 'my-icon-shadow.png',
			// shadowRetinaUrl: 'my-icon-shadow@2x.png',
			// shadowSize: [68, 95],
			// shadowAnchor: [22, 94]
		});

		// Coodronnées Géographiques (Latitude, Longitude) 
		var latlng = L.latLng(element.geometry.coordinates[1],element.geometry.coordinates[0]);
		console.log(latlng);

		// Placer les Markers de position
		var markerColor = element.properties['marker-color'];
		if (markerColor == "#9c89cc"){
			L.marker(latlng, {icon: partageIcon}).addTo(map);
		}
		else {
			L.marker(latlng, {icon: natureIcon}).addTo(map);
		}
		
	}
	// Fonction click
	// L.popup().openOn(map);

});



