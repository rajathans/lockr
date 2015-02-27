@extends('app')

@section('content')
	<h1 class="page-heading">Prepare a DMCA Notice</h1>
	{!! Form::open() !!}

		<div class="form-group">
			{!! Form::label('provider_id','Who are we sending this to?') !!}
			{!! Form::select('provider_id', [], null,['class' => 'form-control']) !!}			
		</div>

		<div class="form-group">
			{!! Form::label('infringing_title','What is the title on the content that is being infringed upon:') !!}
			{!! Form::text('infringing_title', null, ['class' => 'form-control']) !!}			
		</div>

		<div class="form-group">
			{!! Form::label('infringing_link','What is the link to where this content is located:') !!}
			{!! Form::text('infringing_link', null, ['class' => 'form-control']) !!}			
		</div>

		<div class="form-group">
			{!! Form::label('original_link','To verify that you own the content, we now need the link to original content:') !!}
			{!! Form::text('orginal_link', null, ['class' => 'form-control']) !!}			
		</div>

		<div class="form-group">
			{!! Form::label('original_description','Describe the original content:') !!}
			{!! Form::text('orginal_description', null, ['class' => 'form-control']) !!}			
		</div>

		<div class="form-group">
			{!! Form::submit('Preview Notice', ['class' => 'btn btn-primary form-control']) !!}
		</div>

	{!! Form::close() !!}

@endsection