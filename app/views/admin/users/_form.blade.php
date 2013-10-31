<div class="row">

	<div class="col-sm-3">

		{{ Former::text('email')->required()->autofocus()->autocomplete('off'); }}

	</div>

	<div class="col-sm-3">
		@if(isset($user->id))
		{{ Former::password('password')->label('Change password (if not empty)')->autocomplete('off'); }}
		@else
		{{ Former::password('password')->required()->autocomplete('off'); }}
		{{ Former::password('password_confirmation')->required()->autocomplete('off'); }}
		@endif
	</div>

</div>

<div class="row">

	<div class="col-sm-3">

		{{ Former::text('first_name'); }}

	</div>

	<div class="col-sm-3">

		{{ Former::text('last_name'); }}

	</div>

</div>

<div class="row">

	<div class="col-sm-3">

	{{ Former::checkboxes('Groups')->checkboxes($groups)->check($selectedGroups) }}

	</div>

</div>

<div>
	{{ Former::hidden('activated', 1); }}
	{{ Former::hidden('id'); }}
	{{ Former::primary_button()->type('submit')->value('Sauver') }}
	{{ Former::link()->class('btn btn-default')->href(route('admin.users.index'))->value('Annuler') }}
</div>