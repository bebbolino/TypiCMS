@section('header')

	<h1>Edit {{ trans_choice('global.modules.projects', 1) }}</h1>

@stop


@section('main')

	{{ Former::vertical_open()->method('PATCH')->action(route('admin.categories.projects.update', array($category->id, $model->id)))->role('form') }}

		@include('admin.projects._form')

	{{ Former::close() }}

@stop