@extends('master')

@section('content')

<h1 class="page-title">Create a Team</h1>

<!-- <form action="{{url('teams')}}" method="POST" class="create-form">
	{!! csrf_field() !!}
	<input type="text" name="name" placeholder="Team Name">
	<label for="">Select Player 1</label>
	<select name="player1" placehodler="Player 1">
	    @foreach($players as $player)
	      	<option value="{{$player->first_name}} {{$player->last_name}}">{{$player->first_name}} {{$player->last_name}}</option>
	    @endforeach
	</select>
	        
	<button class="btn waves-effect waves-light blue darken-1" type="submit" name="action">Submit</button>
</form>
 -->

<form action="{{url('teams')}}" method="POST" class="create-team-form">
	{!! csrf_field() !!}
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
                <label class="control-label" for="name">Team Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
                <label class="control-label" for="player1">Select Player</label>
                <select name="player1"  class="form-control">
                    @foreach($players as $player)
                        <option value="{{$player->first_name}} {{$player->last_name}}">{{$player->first_name}} {{$player->last_name}}</option>
                    @endforeach
                </select>
            </div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
                <label class="control-label" for="player2">Select Player</label>
                <select name="player2"  class="form-control">
                    @foreach($players as $player)
                        <option value="{{$player->first_name}} {{$player->last_name}}">{{$player->first_name}} {{$player->last_name}}</option>
                    @endforeach
                </select>
            </div>
		</div>
	</div>
	
	
		        
	<button class="btn waves-effect waves-light blue darken-1" type="submit" name="action">Submit</button>
</form>


@stop