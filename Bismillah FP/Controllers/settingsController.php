<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class settingsController extends Controller
{
//
    public function reportbugform()
    {
        return view ('reportbugform');
    }
    public function reportbugsuccess()
    {
        return view ('reportbugsuccess');
    }
    public function settings()
    {
        return view ('settings');
    }
    public function aboutus()
    {
        return view ('aboutus');
    }
    public function editprofile()
    {
        return view ('editprofile');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'reportdate' => 'required',
            'reportdetails' => 'required',
        ]);

        DB::table('reportbug')->insert([
            'date' => $validatedData['reportdate'],
            'reportdetails' => $validatedData['reportdetails'],
        ]);
        return view ('reportbugsuccess');
    }
}

