<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaylistController extends Controller
{
    //
    public function index()
    {
      $videos = DB::table('playlist')->get();
      $playing = DB::table('playlist')->where('nowplaying','=',1)->first();
      return view('playlist', [
        'videos' => $videos,
        'playing' => $playing,
      ]);
    }


    public function add(Request $request)
    {
      $video = $request->file('video')->store('public/videos');

      DB::table('playlist')->insert([
        'title' => $request->title,
        'video' => $video,
        'nowplaying' => 0,
      ]);

      return back();
    }

    public function play($id)
    {
      DB::table('playlist')->where('id','!=',$id)->update([
        'nowplaying' => 0,
      ]);
      DB::table('playlist')->where('id','=',$id)->update([
        'nowplaying' => 1,
      ]);
      return back();
    }


    public function remove($id)
    {
      DB::table('playlist')->where('id','=',$id)->delete();
      return back();
    }
}
