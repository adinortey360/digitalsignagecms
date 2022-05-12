<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Codegen;

class APIController extends Controller
{
    //
    public function queue()
    {
      //In queue: 0, accepted: 1, attended_to: 3
      $queue = DB::table('queue')->where('accepted','=',0)->get();
      return $queue;
    }

    public function queuejoin(Request $request)
    {
      //In queue: 0, accepted: 1, attended_to: 3
      $exists = DB::table('queue')->where('code','=',$request->code)->count();
      $mycode = Codegen::queue();
      if ($exists == 0) {
        DB::table('queue')->insert([
          "code" => $mycode,
          "name" => "$request->fname $request->lname",
        ]);
      }
      return $mycode;
    }

    public function queuecheck(Request $request)
    {
      //In queue: 0, accepted: 1, attended_to: 3
      $exists = DB::table('queue')->where('code','=',$request->code)->count();
      if ($exists == 0) {
        return "false";
      } else {
        return "true";
      }
    }

    public function session()
    {
      //In queue: 0, accepted: 1, attended_to: 3
      $queue = DB::table('queue')->where('accepted','=',1)->get();
      return $queue;
    }

    public function products()
    {
      $products = DB::table('products')->get();
      return $products;
    }

    public function presentation()
    {
      $presentation = DB::table('presentation')->get();
      return $presentation;
    }


    public function store()
    {
      $store = DB::table('store')->get();
      return $store;
    }

    public function news()
    {
      $news = DB::table('settings')->first();
      if (isset($news->news_url)) {
        $news_url = $news->news_url;
        $rss = new \DOMDocument();
        $rss->load($news_url);
        $feed = array();
        foreach ($rss->getElementsByTagName('item') as $node) {
        	$item = array (
        		'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
        		'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
        		'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
        		'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
        		);
        	array_push($feed, $item);
        }
        return $feed;
      } else {
        $news_url = "none";
      }

    }

    public function nowplaying()
    {
      $playing = DB::table('playlist')->where('nowplaying','=',1)->first();
      return json_encode($playing);
    }

    public function endvideo()
    {
      $playing = DB::table('playlist')->where('nowplaying','=',1)->first();
      $current = $playing->id;

      //See if next video exists
      $nextcount = DB::table('playlist')->where('id','=',$current+1)->count();
      if ($nextcount > 0) {
        //If it exists, set all of the videos to not playing now and set the next one as now playing
        DB::table('playlist')->update([
          'nowplaying' => 0,
        ]);

        DB::table('playlist')->where('id','=',$current+1)->update([
          'nowplaying' => 1,
        ]);


        $playing = DB::table('playlist')->where('nowplaying','=',1)->first();
        return json_encode($playing);
      } else {
        //Else get the first id and set as now playing
        $first = DB::table('playlist')->first();
        DB::table('playlist')->where('id','=',$first->id)->update([
          'nowplaying' => 1,
        ]);

        $playing = DB::table('playlist')->where('nowplaying','=',1)->first();
        return json_encode($playing);
      }
    }
}
