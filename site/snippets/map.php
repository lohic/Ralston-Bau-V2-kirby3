<!-- map.php -->
<!-- https://github.com/sylvainjule/kirby-locator --> 
<?php 

	$location = $page->map()->yaml();
	// print_r($location);
?>

<?php if(!empty( $location['lon'] ) && !empty( $location['lat'] )){ ?>
<div id="map" style='width: 400px; height: 300px;'></div>

<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoicmFsc3RvbmJhdSIsImEiOiJjanNibnJ5MHYwZGZ3M3lxY3JlaGtmN3EwIn0.MgaZrw-LmGirQgoE4cht2g';
	const map = new mapboxgl.Map({
		container: 'map',
		style: 'mapbox://styles/ralstonbau/cjsbogl7o159o1fqe26pdxzh2',
		center: [<?= $location['lon'] ?>, <?= $location['lat'] ?>],
		zoom: 10.0
	});
</script>
<?php } ?>

<!-- fin map.php -->