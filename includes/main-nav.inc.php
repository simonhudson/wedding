<nav class="main-nav header__nav js-main-nav">
	<ul class="main-nav__list">
		<?php foreach($sections as $section): ?>
			<li class="main-nav__item"><a class="main-nav__link" href="<?= $root; ?>#<?= $section->slug; ?>"><?= $section->title; ?></a></li>
		<?php endforeach; ?>
	</ul>
</nav>
