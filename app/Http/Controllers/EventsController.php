<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    //
    public function index()
    {
      $events = DB::table('events')->get();
      return view('events', [
        'events' => $events,
      ]);
    }


    public function add(Request $request)
    {
      $add = DB::table('events')->insert(
          [
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
         ]
      );

      return back();
    }
}
