<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $products = DB::table('store')->get();
      return view('store', [
        'products' => $products,
      ]);
    }

    public function add(Request $request)
    {
      $image = $request->file('image')->store('public/store/product_images');

      DB::table('store')->insert([
        'title' => $request->title,
        'price' => $request->price,
        'discount_percent' => $request->discount,
        'short_desc' => $request->short_desc,
        'long_desc' => $request->long_desc,
        'image' => $image,
      ]);

      return back();
    }

    public function remove($id)
    {
      DB::table('store')->where('id','=',$id)->delete();
      return back();
    }
}
