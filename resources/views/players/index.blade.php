@extends('master')

@section('content')

<h1 class="page-title">All Players</h1>

<table class="table table-striped table-hover player-table">
	<thead>
	    <tr>
	        <th class="player-name">Player Name</th>
	        <th class="player-hometown">Hometown</th>
	        <th class="player-height">Height</th>
	        <th class="player-age">Age</th>
	        <th class="player-btn"></th>
	    </tr>
	</thead>

	<tbody>
	    @foreach ($players as $player)
	    	<tr>
	    		<td>{{ $player->first_name }} {{ $player->last_name }}</td>
				<td>{{ $player->hometown }}</td>
				<td>{{ $player->height }}</td>
				<td>{{ $player->age }}</td>
				<td class="player-btn right">
					<form class="right" action="{{url('players', $player->id)}}" method="POST">
						{!! csrf_field() !!}
						{!! method_field('DELETE') !!}

						<button type="submit" class="btn btn-danger btn-sm delete-btn" value="">
							Delete
						</button>
					</form>
					<a class="btn btn-info btn-sm edit-btn" href="{{ URL::to('players/' . $player->id . '/edit') }}">
						Edit
					</a>
				</td>
	         </tr>
		@endforeach
	</tbody>
</table>


@stop