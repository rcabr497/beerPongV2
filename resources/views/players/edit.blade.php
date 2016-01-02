@extends('master')

@section('content')

    <h2>Edit {{ $player->first_name }} {{ $player->last_name }}'s Profile</h2>
    <form action="{{url('players', $player->id)}}" method="POST">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label" for="inputDefault">First Name</label>
                    <input type="text" class="form-control" id="inputDefault" name="first_name" value="{{$player->first_name}}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label" for="inputDefault">Last Name</label>
                    <input type="text" class="form-control" id="inputDefault" name="last_name" value="{{$player->last_name}}">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label" for="inputDefault">Hometown</label>
                    <input type="text" class="form-control" id="inputDefault" name="hometown" value="{{$player->hometown}}">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label" for="inputDefault">Height</label>
                    <input type="text" class="form-control" id="inputDefault" name="height"  value="{{$player->height}}">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label" for="inputDefault">Age</label>
                    <input type="text" class="form-control" id="inputDefault" name="age" value="{{$player->age}}">
                </div>
            </div>
        </div>


        <button class="btn btn-md" type="submit" name="action">Save</button>
        
    </form>
<form action="{{url('players', $player->id)}}" method="POST">
        {!! csrf_field() !!}
        {!! method_field('DELETE') !!}

        <button type="submit" class="waves-effect waves-light btn blue darken-1 z-depth-1" value="Delete Player">Delete Player
        </button>
    </form>
@stop