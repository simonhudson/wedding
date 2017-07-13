<?php include('layout/precontent.inc.php'); ?>
<h1>Guests</h1>
<ul>
	<?php foreach (getGuests() as $guest): ?>
		<li>
			<a href="guest.php?guestId=<?= $guest['guest_id']; ?>"><?= $guest['first_name'].' '. $guest['last_name']; ?></a>
		</li>
	<?php endforeach; ?>
</ul>

<?php include('layout/postcontent.inc.php'); ?>
