	<!-- columns -->
	<div class="col-md-5">
		<div id="map"></div>
			<script type="text/javascript">
					function initMap(){
		
		let location = {lat: 14.655680219 , lng: 120.982966862};
		let map = new google.maps.Map(document.getElementById("map"), {
			zoom: 15,
			center: location,
			mapTypeId: google.maps.MapTypeId.HYBRID
			// draggable: false
		});

		let popContent = 'Victory Central Mall Caloocan';

		let info = new google.maps.InfoWindow({
			content: popContent
		});

		let marker = new google.maps.Marker({
			position: location,
			map: map,
			title: 'Victory Central Mall Caloocan'
		});

		marker.addListener('mouseover', function(){
			info.open(map, marker);
		});

		}
		    </script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrzBRd-5Zwq-ABwR28gRis9rqqNUwdN9E&callback=initMap" type="text/javascript"></script>
	</div>
	<!-- end of columns -->
