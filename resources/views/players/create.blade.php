@extends('master')

@section('content')

	<h4 class="page-title">Create a Player</h4>

	<div class="row">

		<form action="{{url('players')}}" method="POST">
        {!! csrf_field() !!}
		<div class="col l6 s12">
			<input type="text" name="first_name" placeholder="First Name">
        	<input type="text" name="last_name" placeholder="Last Name">
		</div>
        <div class="col l6 s12">
        	<input type="text" name="hometown" placeholder="Hometown">
        	<div class="row">
        		<div class="col s6"><input type="text" name="height" placeholder="Height"></div>
        		<div class="col s6"><input type="text" name="age" placeholder="Age"></div>
        	</div>
        </div>
        <button class="btn waves-effect waves-light red darken-2" type="submit" name="action">Submit
		    <i class="material-icons right">send</i>
		</button>
    </form>
	</div>

@stop