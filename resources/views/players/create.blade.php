@extends('master')

@section('content')

<h1 class="page-title">Create a Player</h1>

<form action="{{url('players')}}" method="POST">
    {!! csrf_field() !!}
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label" for="date">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label" for="date">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label" for="date">Hometown</label>
                <input type="text" class="form-control" id="hometown" name="hometown">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label" for="date">Height</label>
                <input type="text" class="form-control" id="height" name="height">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label" for="date">Age</label>
                <input type="text" class="form-control" id="age" name="age">
            </div>
        </div>
    </div>
    
        <button class="btn btn-primary" type="submit" name="action">Submit</button>
</form>


@stop