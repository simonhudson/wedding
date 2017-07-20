<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<form class="rsvp js-live-search">
	<fieldset>
		<legend class="visuallyhidden">RSVP</legend>
		<label class="visuallyhidden">Search for your name</label>
		<input class="js-live-search__input" id="rsvp-name" placeholder="Search for your name" type="text" />
		<fieldset>
			<legend>Will you be able to join us?</legend>
			<input id="attendance-yes" name="rsvp-attendance" type="radio" value="yes" />
			<label for="attendance-yes">Yes, I will be there</label>
			<input id="attendance-no" name="rsvp-attendance" type="radio" value="no" />
			<label for="attendance-no">No, I will not be able to attend</label>
		</fieldset>
		<fieldset>
			<legend>What would you like to eat?</legend>
			<?php foreach (getMeals() as $meal): ?>
				<input id="meal-<?= $meal['meal_id']; ?>" name="rsvp-meal" type="radio" value="<?= $meal['meal_id']; ?>" />
				<label for="meal-<?= $meal['meal_id']; ?>"><?= $meal['meal_description']; ?></label>
			<?php endforeach; ?>
		</fieldset>
		<label for="rvsp-message">Any other message for the Bride &amp; Groom?</label>
		<textarea id="rsvp-message"></textarea>
	</fieldset>
</form>
