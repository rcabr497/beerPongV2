<?php

namespace App\Http\Controllers;

use App\Player;
use App\Team;
use App\Match;
 
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
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


        return view('dashboard', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
}





