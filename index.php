<?php include('layout/precontent.inc.php'); ?>

	<div class="hero">
	</div>

	<?php foreach($sections as $section): ?>
		<section class="section" id="<?= $section->slug; ?>">
			<div class="wrap section__wrap">
				<h2><?= $section->title; ?></h2>
				<?php include('includes/sections/'.$section->slug.'.inc.php'); ?>
				<p><a href="#top">Back to top</a></p>
			</div>
		</section>
	<?php endforeach; ?>

<?php include('layout/postcontent.inc.php'); ?>
