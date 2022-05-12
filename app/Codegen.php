<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Codegen;

class Codegen extends Model
{
    //
    public static function queue()
    {
      $digits = mt_rand(10000000, 99999999);
      $count = DB::table('queue')->where('code','=',$digits)->count();
      if ($count == 0) {
        return $digits;
      } else {
        return Codegen::queue();
      }
    }
}
