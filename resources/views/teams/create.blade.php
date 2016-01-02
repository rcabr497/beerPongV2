@extends('master')

@section('content')

	<h4 class="page-title">Create a Team</h4>
	<div class="row">
	    <div class="col s12 l6 push-l3">
	      <ul class="tabs">
	        <li class="tab col s3"><a href="#test1">1 Player</a></li>
	        <li class="tab col s3"><a class="active" href="#test2">2 Players</a></li>
	      </ul>
	    </div>
	</div>
	<div class="row">
	    <div id="test1" class="col l6 s12 push-l3">
			<form action="{{url('teams')}}" method="POST" class="create-form">
	        {!! csrf_field() !!}
				<input type="text" name="name" placeholder="Team Name">
				<label for="">Select Player 1</label>
				<select name="player1" placehodler="Player 1">
	    			@foreach($players as $player)
	      				<option value="{{$player->first_name}} {{$player->last_name}}">{{$player->first_name}} {{$player->last_name}}</option>
	    			@endforeach
	  			</select>
	        
		        <button class="btn waves-effect waves-light blue darken-1" type="submit" name="action">Submit
				    <i class="material-icons right">send</i>
				</button>
		    </form>
	    </div>
	</div>
	    
	<div class="row">
	    <div id="test2" class="col l6 s12 push-l3">
			<form action="{{url('teams')}}" method="POST" class="create-team-form">
		        {!! csrf_field() !!}
					<input type="text" name="name" placeholder="Team Name">
					<label for="">Select Player 1</label>
					<select name="player1" placehodler="Player 1">
		    			@foreach($players as $player)
		      				<option value="{{$player->first_name}} {{$player->last_name}}">{{$player->first_name}} {{$player->last_name}}</option>
		    			@endforeach
		  			</select>
		  			<label for="">Select Player 2</label>
		   			<select class="form-control" name="player2" placehodler="Player 2">
		    			@foreach($players as $player)
		      				<option value="{{$player->first_name}} {{$player->last_name}}">{{$player->first_name}} {{$player->last_name}}</option>
		    			@endforeach
		  			</select>
		        
			        <button class="btn waves-effect waves-light blue darken-1" type="submit" name="action">Submit
					    <i class="material-icons right">send</i>
					</button>
			</form>
	    </div>
	</div>
	</div>
	

@stop