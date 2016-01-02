@extends('master')

@section('content')

<h1 class="page-title">{{ $match->winning_team }} VS {{ $match->losing_team }}</h1>

<div class="row game-teams">
	<div class="col-sm-6">
		<label for="">Winning Team</label>
		<br>
		{{ $match->winning_team }}
	</div>
	<div class="col-sm-6">
		<label for="">Losing Team</label>
		<br>
		{{ $match->losing_team }}
	</div>
	<div class="col-sm-6"></div>
</div>

<div class="row game-details">
	<div class="col-md-4">
		<label for="">Date</label><br>
		{{ $match->game_date }}
	</div>
	<div class="col-md-4">
		<label for="">Cups Left</label><br>
		{{ $match->cups_left }}
	</div>
	<div class="col-md-4">
		<label for="">Overtime</label><br>
		{{ $match->overtime }}
	</div>
</div>

<div class="row game-comments">
	<div class="col-md-12">
		<label for="">Comments</label><br>
		{{ $match->comments}}
	</div>
</div>

@stop