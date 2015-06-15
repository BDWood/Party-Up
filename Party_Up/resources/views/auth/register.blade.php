@extends('app')

@section('content')
	<div class="form-content">		
		<div class="panel-body panel-default">
			<h1>Register</h1>
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label class="col-md-4 control-label">Username</label>
					<div class="col-md-6">
						<input type="text" class="textbox" name="username" value="{{ old('username') }}">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Date of Birth</label>
					<div class="col-md-6">
						<input type="date" class="textbox" name="date_of_birth" value="{{ old('date_of_birth') }}">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Region</label>
					<div class="col-md-6">
						<select name="region" value="{{ old('region') }}">
							<option value="usa">USA</option>
							<option value="mexico">Mexico</option>
							<option value="uk">UK</option>
							<option value="canada">Canada</option>
							<option value="china">China</option>
							<option value="australia">Australia</option>
							<option value="russia">Russia</option>
						</select>
						{{-- <input type="text" class="textbox" name="region" value="{{ old('region') }}"> --}}
					</div>
				</div>	

				<div class="form-group">
					<label class="col-md-4 control-label">Play Style</label>
					<div class="col-md-6">
						<select name="play_style" value="{{ old('play_style') }}">
							<option value="casual">Casual</option>
							<option value="hardcore">Hardcore</option>
						</select>
						{{-- <input type="text" class="textbox" name="play_style" value="{{ old('play_style') }}"> --}}
					</div>
				</div>	

				<div class="form-group">
					<label class="col-md-4 control-label">E-Mail Address</label>
					<div class="col-md-6">
						<input type="email" class="textbox" name="email" value="{{ old('email') }}">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Password</label>
					<div class="col-md-6">
						<input type="password" class="textbox" name="password">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Confirm Password</label>
					<div class="col-md-6">
						<input type="password" class="textbox" name="password_confirmation">
					</div>
				</div>

				<div class="register">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary"> 
							Register
						</button>
					</div>
				</div>	
			</form>
		</div>
	</div>
@endsection
