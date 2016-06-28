@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ url('/snippets/create') }}">Add New Snippet</a>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		@unless ($snippets->isEmpty())
			<div class="list-group">
				@foreach ($snippets as $snippet)
				<a href="{{ url('/snippets/' . $snippet->id) }}" class="list-group-item">
					<h4 class="list-group-item-heading">{{ $snippet->title }}</h4>
					<p class="list-group-item-text">{{ $snippet->description }}</p>
				</a>
				@endforeach
			</div>
		@endunless
	</div>
</div>

@stop