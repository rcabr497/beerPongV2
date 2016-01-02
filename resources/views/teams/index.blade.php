@extends('master')

@section('content')

<h4 class="page-title">All Teams</h4>
<div class="row player-table">
    <div class="col s12">
		<table class="bordered highlight responsive display-player-table">
	        <thead>
	          <tr>
	              <th class="player-name">Team Name</th>
	              <th class="player-hometown">Players</th>
	          </tr>
	        </thead>

	        <tbody>
	        @foreach ($teams as $team)
	         	<tr>
	        		<td>{{ $team->name}}</td>
					<td>{{ $team->player1 }}, {{ $team->player2 }}</td>
					<td class="player-btn right">
						
						<form class="right" action="{{url('teams', $team->id)}}" method="POST">
							{!! csrf_field() !!}
							{!! method_field('DELETE') !!}

							<button type="submit" class="btn green darken-1" value="">
								<i class="material-icons right">delete</i>Delete
							</button>
						</form>
						<a class="waves-effect edit-player-btn btn light-blue darken-1" href="{{ URL::to('teams/' . $team->id . '/edit') }}">
							Edit<i class="material-icons right">mode_edit</i>
						</a>
					</td>
	         	</tr>
			@endforeach
	        </tbody>
		</table>
	</div>
</div>

@stop