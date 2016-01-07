@extends('master')

@section('content')

<h1>Edit {{ $team->name }}'s Profile</h1>

<form action="{{url('teams', $team->id)}}" method="POST" class="edit-form">
    {!! csrf_field() !!}
    {!! method_field('PUT') !!}
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label class="control-label" for="name">Team Name</label>
                <input type="text" class="form-control" id="name" value="{{$team->name}}" name="name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label" for="player1">Player 1</label>
                <select name="player1"  class="form-control">
                    @foreach($players as $player)
                        <option value="{{$player->first_name}} {{$player->last_name}}">{{$player->first_name}} {{$player->last_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label" for="player2">PLayer 2</label>
                <select name="player2" placehodler="Winning Team" class="form-control">
                    @foreach($players as $player)
                        <option value="{{$player->first_name}} {{$player->last_name}}">{{$player->first_name}} {{$player->last_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <input type="submit" class="btn btn-primary" name="submit">
</form>
<form action="{{url('teams', $team->id)}}" method="POST">
    {!! csrf_field() !!}
    {!! method_field('DELETE') !!}

    <input type="submit" class="btn btn-danger" value="Delete Team">
</form>

@stop