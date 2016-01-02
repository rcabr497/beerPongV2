@extends('master')

@section('content')

<h1 class="page-title">All Matches</h1>

<table class="table table-striped table-hover ">
	<thead>
   		<tr>
	    	<th>Winning Team</th>
	    	<th>Losing Team</th>
	    	<th>Cups Left</th>
	    	<th>Date</th>
	    	<th></th>
		</tr>
  </thead>
  <tbody>
	@foreach ($matches as $match)
		<tr>
			<td>{{ $match->winning_team }}</td>
			<td>{{ $match->losing_team }}</td>
			<td>{{ $match->cups_left }}</td>
			<td>{{ $match->game_date }}</td>
			<td><a href="{{url('matches', $match->id)}}" class="btn btn-danger pull-right btn-sm">More Details</a></td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop