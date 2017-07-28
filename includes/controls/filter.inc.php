<div class="control">
	<label for="guests-filter">Filter</label>
	<select class="js-filter" data-data-source="guests-table" id="guests-filter">
		<option>Show all</option>
		<optgroup label="Relationship">
			<option data-filter-by="relationship" value="Family">Family&nbsp;(<?= getRelationship('Family')->count; ?>)</option>
			<option data-filter-by="relationship" value="Friend">Friend&nbsp;(<?= getRelationship('Friend')->count; ?>)</option>
			<option data-filter-by="is_child" value="Yes">Children&nbsp;(<?= getChildren()->count; ?>)</option>
		</optgroup>
	</select>
</div>
