@extends('master')

@section('content')

<h1 class="page-title">All Teams</h1>

<table class="table table-striped table-hover team-index-table">
	<thead>
	    <tr>
	        <th class="player-name">Team Name</th>
	        <th class="player-list">Players</th>
	        <th></th>
	    </tr>
	</thead>
	<tbody>
	    @foreach ($teams as $team)
	    	<tr>
	        	<td>{{ $team->name}}</td>
				<td class="player-list">{{ $team->player1 }}, {{ $team->player2 }}</td>
				<td class="player-btn">
					<form action="{{url('teams', $team->id)}}" method="POST">
						{!! csrf_field() !!}
						{!! method_field('DELETE') !!}

						<button type="submit" class="btn btn-sm btn-danger delete-btn" value="">Delete</button>
					</form>
					<a class="btn btn-primary btn-sm btn-info edit-btn" href="{{ URL::to('teams/' . $team->id . '/edit') }}">
						Edit</a>
				</td>
	        </tr>
		@endforeach
	</tbody>
</table>


@stop