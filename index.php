<?php include('layout/precontent.inc.php'); ?>

	<?php include('includes/hero.inc.php'); ?>

	<?php $showSections = false; if ($showSections) foreach($sections as $section): ?>
		<section class="section" id="<?= $section->slug; ?>">
			<div class="wrap section__wrap">
				<h2><?= $section->title; ?></h2>
				<?php include('includes/sections/'.$section->slug.'.inc.php'); ?>
			</div>
		</section>
	<?php endforeach; ?>

<?php include('layout/postcontent.inc.php'); ?>
