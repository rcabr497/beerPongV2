<?php

namespace App\Http\Controllers;

use App\Team;
use App\Player;
use App\Match;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // This gets all rows and all columns from the players table.
        // If you want to change this. You can select specific columns by passing an array of the column names in all()
        $teams = Team::orderBy('name', 'asc')->get();

        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Just return the view function.
        // If you want to add any data and pass it, just get the data and pass it as a second argument to view()
        $players = Player::orderBy('first_name', 'asc')->get();
        return view('teams.create', compact('players'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // This validates the information. All I'm doing right now is requiring the first and last name.
        // You can add more if you'd like to. If it fails it will thrown an exception and send back
        // to the that was sent from
        // check out http://laravel.com/docs/5.1/validation#available-validation-rules
        $this->validate($request, [
            'name' => 'required'
        ]);

        // Make sure that the classes are imported on top of the file with the use in front.
        // Player is the class and is used up top by doing. use App\Player;
        Team::create($request->all());

        // redirect helper function to send them after storing in database
        return redirect('teams');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // This method finds the player by id. so the url would be players/1
        // If an id of 1 doesn't exist laravel will throw an exception
        $team = Team::findOrFail($id);
        $matches = Match::table('matches')->get();

        // This passes the data to the view. The compact function is shorthand for an array.
        // In the view you would use $player to access all the columns
        return view('teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // This method finds the player by id. so the url would be players/1
        // If an id of 1 doesn't exist laravel will throw an exception
        $team = Team::findOrFail($id);
        $players = Player::orderBy('first_name', 'asc')->get();
        

        // This passes the data to the view. The compact function is shorthand for an array.
        // In the view you would use $player to access all the columns
        return view('teams.edit', compact('team', 'players'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // This validates the information. All I'm doing right now is requiring the first and last name.
        // You can add more if you'd like to. If it fails it will thrown an exception and send back
        // to the that was sent from
        // check out http://laravel.com/docs/5.1/validation#available-validation-rules
        $this->validate($request, [
            'name' => 'required'
        ]);

        // This method finds the player by id. so the url would be players/1
        // If an id of 1 doesn't exist laravel will throw an exception
        $team = Team::findOrFail($id);

        // This method fills all of the fillable attributes of the model with what was passed from the form
        $team->fill($request->all());

        // Once the attributes are filled with the new data.
        // //Save it
        $team->save();

        // Then redirect back to the player show page
        return redirect("teams");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // This method has 2 ways of deleting a record in the database
        $team = Team::findOrFail($id);

        // Call the delete method
        $team->delete();

        // Or you can do it this way
        // Player::destroy($id);

        // redirect whereever you would like. Back to player index in this instance
        return redirect('teams');
    }
}
