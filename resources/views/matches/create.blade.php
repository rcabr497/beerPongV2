@extends('master')

@section('content')

<h1 class="page-title">Create Match</h1>
<form action="{{url('matches')}}" method="POST" class="create-form">
    {!! csrf_field() !!}

	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
		    	<label class="control-label" for="winning_team">Winning Team</label>
			   	<select name="winning_team" placehodler="Winning Team" class="form-control">
					@foreach($teams as $team)
					    <option value="{{$team->name}}">{{$team->name}}</option>
					@endforeach
				</select>
		    </div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
		    	<label class="control-label" for="inputDefault">Losing Team</label>
			   	<select name="losing_team" placehodler="Winning Team" class="form-control">
					@foreach($teams as $team)
					    <option value="{{$team->name}}">{{$team->name}}</option>
					@endforeach
				</select>
		    </div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<label class="control-label" for="date">Date</label>
				<input type="game_date" class="form-control" id="date">
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label class="control-label" for="cups_left">Cups Left</label>
				<input type="cups_left" class="form-control" id="inputDefault" name="cups_left" placeholder="Cups Left">
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label class="control-label" for="overtime">Overtime</label>
				<input type="overtime" class="form-control" id="inputDefault" name="overtime" placeholder="Overtime">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
		    	<label for="textArea" class="control-label">Game Comments</label>
		    	<textarea class="form-control" rows="5" id="textArea" name="comments"></textarea>
		    </div>
		</div>
	</div>

	    	
		<button class="btn btn-primary" type="submit" name="action">Submit</button>
	</form>

@stop