@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<h1>Breed: {{ $breed->name }} </h1>
		<h2>Classification: {{ $breed->classification }}</h2>

		<ul class="list-group">
		@foreach( $breed->chickens as $chicken)
			<li class="list-group-item">Name: {{ $chicken->name }}</li>
			<li class="list-group-item">Legband: {{ $chicken->legband }}</li>
		@endforeach
		</ul>
		<h3>Add New Flock Member</h3>
		<form method="post" action="/breeds/{{ $breed->id }}/chicken">
			<div class="form-group">
				<label for="name">Name:</label>
				<input name="name" class="form-control">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Bird</button>
			</div>
		</form>
		</div>
	</div>
@stop