@extends('layouts.admin')

@section('title', 'Create tag')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<h1>Create tag</h1>
			
			<form action="{{ route('tags.store') }}" method="post" enctype="multipart/form-data">
				<div class="form-group">
	<label for="title">Title</label>
	<input type="text" name="title" value="{{ old('title') }}" class="form-control">
	<div>{{ $errors->first('title') }}</div>
</div>
				<button type="submit" class="btn btn-dark mt-2">Submit</button>	
				@csrf			
			</form>			
		</div>
	</div>
</div>
@endsection