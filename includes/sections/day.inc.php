<?php foreach (getVenue() as $venue): ?>
	<?= $venue['venue_address'].', '.$venue['venue_postcode']; ?>
	<iframe src="<?= $venue['venue_map_embed_url']; ?>" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
<?php endforeach; ?>
