</div>
<!-- fin div #section content -->
</section>
<footer>
	
</footer>
<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
  <script>
  var map = L.map('map').setView([51.505, -0.09], 13);
  L.tileLayer('http://{s}.tiles.mapbox.com/v3/mbouras.ig14pp8e/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18}).addTo(map);

  var circle = L.circle([51.508, -0.11], 500, {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5
}).addTo(map);
  </script>
</body>
</html>