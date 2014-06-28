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
		// Design Marker  
		var myIcon = L.icon({
			iconUrl: 'img/content/map/parcours-partage.png',
			iconRetinaUrl: 'my-icon@2x.png',
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
		var geometryType = element.geometry.type;

		console.log(latlng);

		// var polygon = L.multiPolygon(latlng);
		// alert(polygon);
		if (geometryType == 'Point'){
		console.log(geometryType);
		}
		
		// Placer les Markers de position
		L.marker(latlng, {icon: myIcon}).addTo(map);

		
	}
	L.control.zoom('topright', '+', '-').addTo(map);
});



