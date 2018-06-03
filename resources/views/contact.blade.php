@extends('layouts.app')

@section('content')

	<h1>Contact</h1>

	{!! Form::open(['url' => 'contact/submit']) !!}

	<div class="form-group">
		{{Form::label('name', 'Name')}}
		 {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your name'])}}

		 <br>

		 {{Form::label('email', 'E-Mail Address')}}
		 {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter your email'])}};

		 <br>

		 {{Form::label('Message', '')}};

		 {{ Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter your message'])}};
	</div>
	<div>
		{{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
	</div>
    
	{!! Form::close() !!}

@endsection
