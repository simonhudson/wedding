<form class="rsvp js-live-search">
	<fieldset>
		<legend class="visuallyhidden">RSVP</legend>
		<label class="visuallyhidden">Search for your name</label>
		<input class="js-live-search__input" id="rsvp-name" placeholder="Search for your name" type="text" />

		<ul class="js-live-search__suggestions">

		</ul>

		<fieldset>
			<legend>Will you be able to join us?</legend>
			<div class="input-row">
				<input id="attendance-yes" name="rsvp-attendance" type="radio" value="yes" />
				<label for="attendance-yes">Yes, I will be there</label>
			</div>
			<div class="input-row">
				<input id="attendance-no" name="rsvp-attendance" type="radio" value="no" />
				<label for="attendance-no">No, I will not be able to attend</label>
			</div>
		</fieldset>
		<label for="rvsp-message">Any other message for the Bride &amp; Groom?</label>
		<textarea id="rsvp-message"></textarea>
	</fieldset>
	<input class="btn btn--primary" type="submit" value="Send" />
</form>
