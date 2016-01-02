@extends('master')

@section('content')

<div class="row">
  <div class="col-md-8">
    <h2>5 latest Games<a href="#" class="btn btn-danger pull-right btn-sm">View All Games</a></h2>
    <table class="table table-striped table-hover ">
  <thead>
      <tr>
        <th>Winning Team</th>
        <th>Losing Team</th>
        <th>Cups Left</th>
        <th>Date</th>
        <th>Options</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>

  </div>
</div>

<div class="col-md-4">
  <h2>New Teams</h2>
  <table class="table table-striped table-hover">
    <tr>
      <th>Team Name</th>
    </tr>
    <tr>
      <td>Team 3</td>
    </tr>
    <tr>
      <td>Team 3</td>
    </tr>
    <tr>
      <td>Team 3</td>
    </tr>
    <tr>
      <td>Team 3</td>
    </tr>
    <tr>
      <td>Team 3</td>
    </tr>
  </table>
</div>
@endsection