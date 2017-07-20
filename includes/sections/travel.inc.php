<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<?php foreach (getVenue() as $venue): ?>
	<?= $venue['venue_address'].', '.$venue['venue_postcode']; ?>
	<iframe src="<?= $venue['venue_map_embed_url']; ?>" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
<?php endforeach; ?>
