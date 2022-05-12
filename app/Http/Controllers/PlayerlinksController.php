<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PlayerlinksController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $links = DB::table('playerlinks')->get();
      return view('playerlinks', [
        'links' => $links,
      ]);
    }

    public function add(Request $request)
    {
      DB::table('playerlinks')->insert([
        'title' => $request->title,
        'uri' => $request->uri,
      ]);

      return back();
    }

    public function remove($id)
    {
      DB::table('playerlinks')->where('id','=',$id)->delete();
      return back();
    }
}
