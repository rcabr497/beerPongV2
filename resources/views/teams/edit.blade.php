@extends('master')

@section('content')

    <h4>Edit {{ $team->name }}'s Profile</h4>
    <form action="{{url('teams', $team->id)}}" method="POST" class="edit-form">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}

        <input type="text" name="name" value="{{$team->name}}">

        <select name="player1" placehodler="Player 1">
            @foreach($players as $player)
                <option value="{{$player->first_name}} {{$player->last_name}}">{{$player->first_name}} {{$player->last_name}}</option>
            @endforeach
        </select>

        <select name="player2" placehodler="Player 2">
            @foreach($players as $player)
                <option value="{{$player->first_name}} {{$player->last_name}}">{{$player->first_name}} {{$player->last_name}}</option>
            @endforeach
        </select>

        <input type="submit" class="waves-effect waves-light btn" name="submit">
    </form>

    <form action="{{url('teams', $team->id)}}" method="POST">
        {!! csrf_field() !!}
        {!! method_field('DELETE') !!}

        <input type="submit" class="waves-effect waves-light btn" value="Delete Player">
    </form>

@stop