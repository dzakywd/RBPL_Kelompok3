<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Models\event;


class dashboardController extends Controller
{
    public function dashboard(){
        $popularEvents = DB::table('events')->whereBetween('event_rating', [4, 5])->first();
	    $recommendedEvents = DB::table('events')->inRandomOrder()->limit(5)->get();
        $randomEvent = DB::table('events')->inRandomOrder(); // Get a random event from the database
	    return view('dashboard', compact('popularEvents', 'recommendedEvents', 'randomEvent'));
    }
    // public function randomEvent(){
    //     $randomEvent = Event::inRandomOrder()->first(); // Get a random event from the database
    //     return view('event.modal', compact('randomEvent'))->render();
    // }
}
