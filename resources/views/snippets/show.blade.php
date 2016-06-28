@extends('layouts.app')

@section('content')

<div class="page-header">
	<h1>{{ $snippets->title }} <small>{{ $snippets->description }}</small></h1>
</div>

<div role="tabpanel">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active">
			<a href="#html" aria-controls="html" role="tab" data-toggle="tab">HTML</a>
		</li>
		<li role="presentation">
			<a href="#css" aria-controls="css" role="tab" data-toggle="tab">CSS</a>
		</li>
		<li role="presentation">
			<a href="#javascript" aria-controls="javascript" role="tab" data-toggle="tab">Javascript</a>
		</li>
		<li role="presentation">
			<a href="#preview" aria-controls="preview" role="tab" data-toggle="tab">Preview</a>
		</li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="html">
			<div class="panel panel-default">
				<div class="panel-body">
					<code>
						{{ $snippets->html }}
					</code>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="css">
			<div class="panel panel-default">
				<div class="panel-body">
					<code>
						{{ $snippets->css }}
					</code>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="javascript">
			<div class="panel panel-default">
				<div class="panel-body">
					<code>
						{{ $snippets->javascript }}
					</code>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="preview">
			<div class="panel panel-default">
				<div class="panel-body">
					Preview to go here.
				</div>
			</div>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-body">
		<form action="{{ url('/snippets/' . $snippets->id . '/comment') }}" method="POST" role="form">
			{{ csrf_field() }}
			<div class="form-group">
				<textarea name="content" id="input" class="form-control" rows="3" required="required" placeholder="Leave a comment"></textarea>
			</div>
			<button type="submit" class="btn btn-block btn-primary">Submit</button>
		</form>
	</div>
</div>


@unless ( $snippets->comments->isEmpty() )
	@foreach ( $snippets->comments as $comment )
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">{{ $comment->user->name }} on {{ $comment->created_at->diffForHumans() }}</h3>
			</div>
			<div class="panel-body">
				{{ $comment->content }}
			</div>
		</div>
	@endforeach
@endunless

@stop