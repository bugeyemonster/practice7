<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorsListController extends Controller
{

    public function index()
	{
		return view('ActorsList');
	}

}
