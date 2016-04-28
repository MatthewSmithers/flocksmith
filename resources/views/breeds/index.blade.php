@extends('layout')

@section('content')
	<h1>All Breeds</h1>

	<ul>
	@foreach($breeds as $breed)
		<a href="/breeds/{{ $breed->id }}"><li>{{ $breed->variety }} {{ $breed->name }}</li></a>
	@endforeach
	</ul>
@stop