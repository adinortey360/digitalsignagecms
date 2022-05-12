<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TVController extends Controller
{

    public function player()
    {
      $links = DB::table('playerlinks')->get();
      return view('tv.player', [
        'links' => $links,
      ]);
    }

    //
    public function welcome()
    {
      return view('tv.welcome');
    }


    public function queue()
    {
      $slides = DB::table('presentation')->get();
      return view('tv.queue', [
        'slides' => $slides,
      ]);
    }


    public function events()
    {
      $events = DB::table('events')->get();
      return view('tv.events', [
        'events' => $events,
      ]);
    }


    public function present()
    {
      $slides = DB::table('presentation')->get();
      return view('tv.present', [
        'slides' => $slides,
      ]);
    }


    public function weather()
    {
      return view('tv.weather');
    }

    public function direct()
    {
      return view('tv.direct');
    }

    public function tips()
    {
      return view('tv.tips');
    }


    public function menu()
    {
      return view('tv.menu');
    }

    public function bankad()
    {
      return view('tv.bankad');
    }

    public function bankmagic()
    {
      return view('tv.bankmagic');
    }

    public function milomagic()
    {
      return view('tv.milomagic');
    }

    public function familyfinances()
    {
      return view('tv.familyfinances');
    }

    public function bankinter()
    {
      return view('tv.bankinter');
    }

    public function forex()
    {
      return view('tv.forex');
    }

    public function estate()
    {
      return view('tv.estate');
    }


    public function hotel()
    {
      return view('tv.hotel');
    }
	
	public function nestlesplit()
    {
      return view('tv.nestlesplit');
    }
	
	
}
