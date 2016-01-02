@extends('master')

@section('content')

<div class="row player-table">
    <div class="col s12">
		<table class="bordered responsive">
	        <thead>
	          <tr>
	              <th data-field="player-name">Player Name</th>
	              <th data-field="player-hometown">Hometown</th>
	              <th data-field="player-height">Height</th>
	              <th data-field="player-age">Age</th>
	              <th data-field="player-btn"></th>
	          </tr>
	        </thead>

	        <tbody>
	         	<tr>
	        		<td>{{ $player->first_name }} {{ $player->last_name }}</td>
					<td>{{ $player->hometown }}</td>
					<td>{{ $player->height }}</td>
					<td>{{ $player->age }}</td>
					<td> <a href="{{ url('players/{$player->id}/edit') }}">edit</a></td>
	         	</tr>
	        </tbody>
		</table>
	</div>
</div>

@stop