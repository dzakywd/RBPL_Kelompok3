<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    //
    public function discovery()
    {
        return view('discovery');
    }

    public function detailEvent($id)
    {
        // mengambil data event berdasarkan id yang dipilih
        $event = DB::table('event')->where('id_event',$id)->get();
        $rating = DB::table('rating_review')
        ->join('event', 'rating_review.id_event', '=', 'event.id_event')
        ->join('pengguna', 'rating_review.id_user', '=', 'pengguna.id_user')
        ->where('rating_review.id_event',$id)->get();

        // passing data dari event dan rating_review ke detailEVent.blade.php
        return view('detailEVent',['event' => $event, 'rating' => $rating]);
    }
    
    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;

    		// mengambil data dari table pegawai sesuai pencarian data
		$event = DB::table('event')
		->where('eventName','like',"%".$search."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('resultspage',['event' => $event]);

	}
	
	public function displayEvents()
	{
	    $popularEvents =  Event::whereBetween('rating', [4, 5])->get();
	    $recommendedEvents = Event::inRandomOrder()->limit(5)->get();
	    
	    return view('user.discovery', compact('popularEvents', 'recommendedEvents'));
	}
}
