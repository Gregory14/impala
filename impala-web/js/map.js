var map = L.mapbox.map('map', 'mbouras.ige8aolg')
  .setView([48.8870954, 2.38773], 14);

$.ajax({
  url: "js/marker.geojson"
}).done(function(data) {
	data = $.parseJSON(data);
	var features = data.features;
	var dataCount = features.length;
	for(var i=0; i<dataCount; i++ ){
		
		var element = features[i];
		console.log(element);
		var myIcon = L.icon({
			iconUrl: 'my-icon.png',
			iconRetinaUrl: 'my-icon@2x.png',
			iconSize: [38, 95],
			iconAnchor: [22, 94],
			popupAnchor: [-3, -76],
			shadowUrl: 'my-icon-shadow.png',
			shadowRetinaUrl: 'my-icon-shadow@2x.png',
			shadowSize: [68, 95],
			shadowAnchor: [22, 94]
		});

		L.marker([50.505, 30.57], {icon: myIcon}).addTo(map);
	}
});

// initialize the map on the "map" div with a given center and zoom
// var map = L.map('map', {
// 	center: [48.8870954, 2.38773],
// 	zoom: 14,
// });
// var geojson = L.mapbox.featureLayer().loadURL('https://a.tiles.mapbox.com/v3/mbouras.ige8aolg/markers.geojson').addTo(map);

// L.tileLayer('http://{s}.tile.mapbox.com/v3/mbouras.ige8aolg/{z}/{x}/{y}.png').addTo(map);
//L.marker([setGeoJSON(geojson)]).addTo(map);

//alert(geojson);