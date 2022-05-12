<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Chumper\Zipper\Zipper;

class PresentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
      $slide = DB::table('presentation')->where('id','=',$request->id)->first();
      return view('present', [
        'body' => $slide->body,
      ]);
    }

    public function frame()
    {
      return view('present_frame');
    }

    public function slides()
    {
      $slides = DB::table('presentation')->get();
      return view('slides', [
        'slides' => $slides,
      ]);
    }


    public function slide($id)
    {
      $slide = DB::table('presentation')->where('id','=',$id)->first();
      return view('slide', [
        'slide' => $slide,
      ]);
    }

    public function add(Request $request)
    {
      $path = $request->file('slideimage')->store('public/slides');

      $add = DB::table('presentation')->insert(
          [
            'title' => $request->slidetitle,
            'image' => $path,
         ]
      );

      return back();
    }


    public function templates()
    {
      $templates = DB::table('templates')->get();
      return view('templates', [
        'templates' => $templates
      ]);
    }


    public function delete($id)
    {
      DB::table('presentation')->where('id','=',$id)->delete();
      return back();
    }

    public function installtemplate(Request $request)
    {
      $path = $request->file('file')->store('json');
      $contents = Storage::get($path);
      $json = json_decode($contents);
      $add = DB::table('templates')->insert(
          [
            'title' => $json->title,
            'content' => $json->body,
            'thumb' => "/storage/templates/$json->id/thumb.png",
         ]
      );

      return back();
    }
}
