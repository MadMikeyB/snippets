@extends('layouts.app')

@section('content')
<form class="form-horizontal" method="POST" action="{{ url('/snippets') }}">
	{!! csrf_field() !!}
	<fieldset>
		<legend>Create Snippet</legend>
		<div class="form-group">
			<label for="title" class="col-lg-2 control-label">Title</label>
			<div class="col-lg-10">
				<input type="text" class="form-control" id="title" placeholder="Title">
			</div>
		</div>
		<div class="form-group">
			<label for="content" class="col-lg-2 control-label">Textarea</label>
			<div class="col-lg-10">
				<textarea class="form-control" rows="30" id="content"></textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-10 col-lg-offset-2">
				<button type="submit" class="btn btn-primary btn-block pull-right">Submit</button>
			</div>
		</div>
	</fieldset>
</form>
@stop