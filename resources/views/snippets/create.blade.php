@extends('layouts.app')

@section('content')
<form class="form-horizontal" method="POST" action="{{ url('/snippets') }}">
	{!! csrf_field() !!}
	<fieldset>
		<legend>Create Snippet</legend>
		<div class="form-group">
			<label for="title" class="col-lg-2 control-label">Title</label>
			<div class="col-lg-10">
				<input type="text" class="form-control" name="title" placeholder="Title" required="required">
			</div>
		</div>
		<div class="form-group">
			<label for="title" class="col-lg-2 control-label">Short Description</label>
			<div class="col-lg-10">
				<input type="text" class="form-control" name="description" placeholder="Description" required="required">
			</div>
		</div>

		<ul class="nav nav-tabs">
  			<li class="active"><a href="#html" id="htmltoggle" data-toggle="tab" aria-expanded="true">HTML</a></li>
  			<li class=""><a href="#css" id="csstoggle" data-toggle="tab" aria-expanded="false">CSS</a></li>
  			<li class=""><a href="#javascript" id="jstoggle" data-toggle="tab" aria-expanded="false">Javascript</a></li>
  		</ul>
  		<div class="tab-content">
  			<div class="tab-pane fade active in" id="html">
				<fieldset>
	  				<legend>HTML</legend>
					<div class="form-group">
						<div class="col-sm-12">
							<textarea class="form-control" id="editorhtml" rows="30" name="html" required="required"></textarea>
						</div>
					</div>
				</fieldset>
  			</div>
  			<div class="tab-pane fade" id="css">
				<fieldset>
	  				<legend>CSS</legend>
					<div class="form-group">
						<div class="col-sm-12">
							<textarea class="form-control" id="editorcss" rows="30" name="css"></textarea>
						</div>
					</div>
				</fieldset>
  			</div>
  			<div class="tab-pane fade" id="javascript">
	  			<fieldset>
	  				<legend>Javascript</legend>
					<div class="form-group">
						<div class="col-sm-12">
							<textarea class="form-control" id="editorjs" rows="30" name="javascript"></textarea>
						</div>
					</div>
				</fieldset>
  			</div>
  		</div>

		<div class="form-group">
			<div class="col-lg-10 col-lg-offset-2">
				<button type="submit" class="btn btn-primary btn-block">Submit</button>
			</div>
		</div>
	</fieldset>
</form>
@stop