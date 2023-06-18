<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bookmarkController extends Controller
{
    //
    public function bookmark()
    {
        // mengambil data event berdasarkan id yang dipilih
        // $bookmark = DB::table('bookmark')->where('id_user', '1')->get();

        $bookmark = DB::table('bookmark')
        ->join('event', 'bookmark.id_event', '=', 'event.id_event')
        ->where('id_user', '1')
        ->get();

        return view('bookmark', ['bookmark' => $bookmark]);
    }

    public function deleteBookmark(Request $request)
    {
        $id = $request->id_event;

        // delete data dari table bookmark
        DB::table('bookmark')
            ->where('id_event', $id)
            ->where('id_user', '1')
            ->delete();

        // balik ke page bookmark lagi setelah delete bookmark
        return redirect()->to('/bookmark');
    }
}
