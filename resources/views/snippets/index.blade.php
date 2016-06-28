@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ url('/snippets/create') }}">Add New Snippet</a>
		</div>
		@unless ($snippets->isEmpty())
		<ul class="list-group">
			@foreach ($snippets as $snippet)
			<li class="list-group-item"><a href="{{ $snippet->id }}">{{ $snippet->title }}</a></li>
			@endforeach
		</ul>
		@endunless
	</div>
</div>

@stop