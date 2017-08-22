<div class="hero section">
	<h1 class="ribbon">
		<strong class="ribbon-content">
			<span><?= $sitename; ?></span>
		</strong>
	</h1>
	<?php foreach (getVenue()->data as $venue): ?>
		<h2>
			<span><?= formatDateTime(); ?></span>
			<span><?= $venue['venue_name'].', '.$venue['venue_address'].', '.$venue['venue_postcode']; ?></span>
			<a href="<?= $venue['venue_map_url']; ?>" rel="noopener" target="_blank"><?= icon('map-marker'); ?>&nbsp;View map<?= newTabWindowWarning(); ?></a>
		</h2>
	<?php endforeach; ?>
</div>
