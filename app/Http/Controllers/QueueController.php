<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueueController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
      //In queue: 0, accepted: 1, attended_to: 3
      $next = DB::table('queue')->where('accepted','<',3)->first();

      $all_in_queue = DB::table('queue')->where('accepted','=',0)->get();

      return view('queue', [
        'next' => $next,
        'people' => $all_in_queue,
      ]);
    }

    public function accept($code)
    {
      DB::table('queue')
            ->where('code', $code)
            ->update(['accepted' => 1]);

      return redirect('/queue');
    }

    public function attended_to($code)
    {
      DB::table('queue')
            ->where('code', $code)
            ->update(['accepted' => 3]);

      return redirect('/queue');
    }


    public function add(Request $request)
    {
      $add = DB::table('queue')->insert(
          [
            'name' => $request->title,
            'code' => $request->description,
         ]
      );

      return back();
    }
}
