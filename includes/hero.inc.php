<div class="hero section">
	<h1 class="ribbon">
		<strong class="ribbon-content">
			<span><?= $sitename; ?></span>
		</strong>
	</h1>
	<?php foreach (getVenue()->data as $venue): ?>
	<div class="hero__info">
		<h2>
			<span><?= formatDateTime(); ?></span>
			<span><?= $venue['venue_name'].', '.$venue['venue_address'].', '.$venue['venue_postcode']; ?></span>
		</h2>
		<a href="<?= $venue['venue_map_url']; ?>" rel="noopener" target="_blank"><?= icon('map-marker'); ?>&nbsp;View map<?= newTabWindowWarning(); ?></a>
	</div>
	<?php endforeach; ?>
</div>
