<!-- map.php -->
<!-- https://github.com/sylvainjule/kirby-locator --> 

<section class="map">
<?php 

	$addresses = $page->addresses()->toStructure();

	// $location = $page->map()->yaml();
	// print_r($location);
?>

<?php if( ($addresses->isNotEmpty() || $global == true )){ ?>

<?php if ( $global == false ) :  ?>
<div class="text">
<h3><?= t('location') ?>:</h3>
</div>
<?php else : ?>
<h3 class="practice-title"><?= t('locations') ?>:</h3>
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
		//center: [<?php // echo $location['lon'] ?>, <?php // echo $location['lat'] ?>],
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


	<?php 

	$lat = array();
	$lng = array();

	if ( $global == false ) :  
		foreach($addresses as $address ) :
	
		$location = $address->map()->yaml();

		$lat[] = $location['lat'];
		$lng[] = $location['lon'];

	?>

	var marker = new Array();

	// one case markers
	marker.push( new mapboxgl.Marker()
		  .setLngLat([<?= $location['lon'] ?>, <?= $location['lat'] ?>])
		  .addTo(map) );

	<?php endforeach; ?>

	map.fitBounds([[
		<?= min($lng)?>,
		<?= min($lat)?>
	], [
		<?= max($lng)?>,
		<?= max($lat)?>
	]], {padding: {top: 60, bottom:20, left: 30, right: 30}, maxZoom:8});

	<?php	
	else :  
	?>	  

	// all cases markers
	var marker = new Array();

	<?php
	$cases = page('cases')->children()
		->listed();

	$lat = array();
	$lng = array();

		foreach($cases as $page):

			foreach($page->addresses()->toStructure() as $address ) :

				$location = $address->map()->yaml();


				// $page->url()
				// $page->title()
				// 
				if( !empty( $location['lon'] ) && !empty( $location['lat'] ) ) :

				$lat[] = $location['lat'];
				$lng[] = $location['lon'];
	?>

	marker.push( new mapboxgl.Marker()
		  .setLngLat([<?= $location['lon'] ?>, <?= $location['lat'] ?>])
		  .setPopup( new mapboxgl.Popup({ offset: 35 }).setHTML('<p><a href="<?= $page->url() ?>"><?= addslashes( $page->title() ) ?></a></p>') )
		  .addTo(map) );
	
	
	
	<?php 
				endif;
			endforeach;
		endforeach;


	if(count($lng) > 0):
	?>

	map.fitBounds([[
		<?= min($lng)?>,
		<?= min($lat)?>
	], [
		<?= max($lng)?>,
		<?= max($lat)?>
	]], {padding: {top: 60, bottom:20, left: 30, right: 30}, maxZoom:8});


	<?php 
	endif;
	endif; 
	?>	  

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