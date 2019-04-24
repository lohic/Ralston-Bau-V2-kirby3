<!-- map.php -->
<!-- https://github.com/sylvainjule/kirby-locator --> 

<section class="map">
<?php 

	$location = $page->map()->yaml();
	// print_r($location);
?>

<?php if( (!empty( $location['lon'] ) && !empty( $location['lat'] ) || $global == true )){ ?>

<?php if ( $global == false ) :  ?>
<div class="text">
<h3><?= t('location') ?>:</h3>
</div>
<?php else : ?>
<h3 class="practice-title">Cases location</h3>
<?php endif; ?>
<div id="map"></div>
<style>
/*.marker {
	display: block;
	border: none;
	border-radius: 50%;
	cursor: pointer;
	padding: 0;
}*/

.mapboxgl-marker>svg>g>g:nth-child(2){
	fill:#333 !important;
}
</style>
<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoicmFsc3RvbmJhdSIsImEiOiJjanNibnJ5MHYwZGZ3M3lxY3JlaGtmN3EwIn0.MgaZrw-LmGirQgoE4cht2g';


	<?php if ( $global == false ) :  ?>
	const map = new mapboxgl.Map({
		container: 'map',
		style: 'mapbox://styles/ralstonbau/cjsbogl7o159o1fqe26pdxzh2',
		center: [<?= $location['lon'] ?>, <?= $location['lat'] ?>],
		zoom: 10.0
	});
	<?php else:  ?>
	const map = new mapboxgl.Map({
		container: 'map',
		style: 'mapbox://styles/ralstonbau/cjsbogl7o159o1fqe26pdxzh2',
		zoom: 2,
		minZoom: 1.0
	});
	<?php endif;  ?>

	// add markers to map
	// geojson.features.forEach(function(marker) {
	// create a DOM element for the marker
	// var el = document.createElement('div');
	// el.className = 'marker';
	// el.style.backgroundImage = 'url(https://placekitten.com/g/' + marker.properties.iconSize.join('/') + '/)';
	// el.style.width = marker.properties.iconSize[0] + 'px';
	// el.style.height = marker.properties.iconSize[1] + 'px';
	 
	// el.addEventListener('click', function() {
	// 	window.alert(marker.properties.message);
	// });
	 
	// add marker to map
	// new mapboxgl.Marker(el)
	// 	.setLngLat(marker.geometry.coordinates)
	// 	.addTo(map);
	// });
	
	// https://docs.mapbox.com/mapbox-gl-js/api/#marker

	<?php if ( $global == false ) :  ?>

	var marker = new mapboxgl.Marker()
		  .setLngLat([<?= $location['lon'] ?>, <?= $location['lat'] ?>])
		  .addTo(map);


	<?php else :  ?>	  

	var marker = new Array();

	<?php
	$cases = page('cases')->children()
		->listed();
	foreach($cases as $page):

		$location = $page->map()->yaml();


		// $page->url()
		// $page->title()
		// 
		if( !empty( $location['lon'] ) && !empty( $location['lat'] ) ) :



		$avLon[] = $location['lon'];
		$avLat[] = $location['lat'];
	?>

	marker.push( new mapboxgl.Marker()
		  .setLngLat([<?= $location['lon'] ?>, <?= $location['lat'] ?>])
		  .setPopup( new mapboxgl.Popup({ offset: 35 }).setHTML('<p><a href="<?= $page->url() ?>"><?= $page->title() ?></a></p>') )
		  .addTo(map) );
	
	
	<?php 
	
		endif;
	endforeach;

	?>


	map.setCenter([<?= array_sum( $avLon )/count($avLon) ?>, <?= array_sum( $avLat )/count($avLat) ?>]);


	<?php endif;  ?>	  

	$(function(){

		// https://stackoverflow.com/questions/2794148/css3-transition-events
		$("#main").one('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', 
		function() {
			console.log("END main bloc transition");

			map.resize();

			setTimeout(function(){ 
				console.log("relayout");
				map.resize();
			}, 1500);
		});

	});
</script>
<?php } ?>
</section>
<!-- fin map.php -->