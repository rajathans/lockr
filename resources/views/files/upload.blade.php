@extends ('app')
@section ('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading" style="color:white;background-color: DarkSlateGray;">Enter file details</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> Please enter all the details as it would allow faster search times.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="#">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Name of the file</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" placeholder="eg. Mark sheet" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Description</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="description" placeholder="Brief description of the file's contents" value="{{ old('description') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Tags</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="tags" placeholder="eg. #marksheet" value="{{ old('tags') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Upload
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection