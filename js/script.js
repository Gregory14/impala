// function initialize() {
//   directionsDisplay = new google.maps.DirectionsRenderer();
//   var paris = new google.maps.LatLng(48.8588589, 2.3470599);
//   var mapOptions = {
//     zoom:7,
//     center: paris
//   }
//   map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
//   directionsDisplay.setMap(map);
// }

// function calcRoute() {
//   var directionsDisplay;
// var directionsService = new google.maps.DirectionsService();
// var map;
// var start = document.getElementById('start').value;
//   var end = document.getElementById('end').value;
//   var request = {
//       origin:start,
//       destination:end,
//       travelMode: google.maps.TravelMode.WALKING
//   };
//   directionsService.route(request, function(response, status) {
//     if (status == google.maps.DirectionsStatus.OK) {
//       directionsDisplay.setDirections(response);
//     }
//   });
// google.maps.event.addDomListener(window, 'load', initialize);
// }

// function loadScript() {
//   var script = document.createElement('script');
//   script.type = 'text/javascript';
//   script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' +
//       'callback=initialize';
//   document.body.appendChild(script);
// }

// window.onload = loadScript;
var map;
var directionsDisplay;
var directionsService;
var stepDisplay;
var paris = new google.maps.LatLng(48.8588589, 2.3470599);
var trocadero = new google.maps.LatLng(48.8629509, 2.2864108);
var tourEiffel = new google.maps.LatLng(48.85837, 2.294481);
var markerArray = [paris, trocadero, tourEiffel];

function initialize() {
  // Instantiate a directions service.
  directionsService = new google.maps.DirectionsService();

  // Create a map and center it on Paris.
  var paris = new google.maps.LatLng(48.8588589, 2.3470599);
  var mapOptions = {
    zoom: 13,
    center: paris
  }
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  // Create a marker to initialize position
  var marker = new google.maps.Marker({
      position: paris,
      map: map,
      title: 'Paris !'
  });

  // Create a renderer for directions and bind it to the map.
  var rendererOptions = {
    map: map
  }
  directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions)

  // Instantiate an info window to hold step text.
  stepDisplay = new google.maps.InfoWindow();
}

function calcRoute() {

  // First, remove any existing markers from the map.
  for (var i = 0; i < markerArray.length; i++) {
    markerArray[i].setMap(null)
  }

  // Now, clear the array itself.
  markerArray = [];

  // Retrieve the start and end locations and create
  // a DirectionsRequest using WALKING directions.
  var start = document.getElementById('start').value;
  var end = document.getElementById('end').value;
  var request = {
      origin: start,
      destination: end,
      travelMode: google.maps.TravelMode.WALKING
  };

  // Route the directions and pass the response to a
  // function to create markers for each step.
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      var warnings = document.getElementById('warnings_panel');
      warnings.innerHTML = '<b>' + response.routes[0].warnings + '</b>';
      directionsDisplay.setDirections(response);
      showSteps(response);
    }
  });
}

function showSteps(directionResult) {
  // For each step, place a marker, and add the text to the marker's
  // info window. Also attach the marker to an array so we
  // can keep track of it and remove it when calculating new
  // routes.
  var myRoute = directionResult.routes[0].legs[0];

  for (var i = 0; i < myRoute.steps.length; i++) {
    var marker = new google.maps.Marker({
      position: myRoute.steps[i].start_location,
      map: map
    });
    attachInstructionText(marker, myRoute.steps[i].instructions);
    markerArray[i] = marker;
  }
}

function attachInstructionText(marker, text) {
  google.maps.event.addListener(marker, 'click', function() {
    // Open an info window when the marker is clicked on,
    // containing the text of the step.
    stepDisplay.setContent(text);
    stepDisplay.open(map, marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);










