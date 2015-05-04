@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-dissmissble alert-danger" style="background-color:IndianRed;">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/auth/register">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control floating-label" name="name" placeholder="Bruce Wayne">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Enroll number</label>
							<div class="col-md-6">
								<input type="text" class="form-control floating-label" name="enroll_no" placeholder="11 digits long">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Course</label>
							<div class="col-md-6">
								<input type="text" class="form-control floating-label" name="course" placeholder="eg. B Tech">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Majors</label>
							<div class="col-md-6">
								<select class="form-control floating-label" id="select" name="majors" placeholder="eg. IT">
				                    <option>IT</option>
				                    <option>CSE</option>
				                    <option>ECE</option>
				                </select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Date of Birth</label>
							<div class="col-md-6">
								<input type="text" class="form-control floating-label" name="age" placeholder="dd/mm/yyyy">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Phone number</label>
							<div class="col-md-6">
								<input type="number" name="phone" class="form-control floating-label" placeholder="number">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control floating-label" name="email" placeholder="brucewayne@batmail.com">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control floating-label" name="password" placeholder="">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control floating-label" name="password_confirmation" placeholder="">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-default btn-info">
									Register
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
