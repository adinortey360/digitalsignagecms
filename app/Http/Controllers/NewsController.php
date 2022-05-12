<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $news = DB::table('settings')->first();
      if (isset($news->news_url)) {
        $news_url = $news->news_url;
      } else {
        $news_url = "none";
      }
      return view('news', [
        'news_url' => $news_url,
      ]);
    }

    public function add(Request $request)
    {
      DB::table('settings')->insert([
        'news_url' => $request->url,
      ]);
      return back();
    }
}
