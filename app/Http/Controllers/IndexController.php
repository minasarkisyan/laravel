<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\Services\HelloService;
use Illuminate\Support\Facades\Cache;
use \DB;

class IndexController extends Controller
{

  public function index(HelloService $var)
  {
    $data = "Fanto";
    $int = 32;

    if ($data !== "Fantom") {
      echo "Data = Fantom";
    }else {
      echo "Не равно";
    };

    



    dump($var->getMessage());
  }

  public function main(Request $req)
  {
      $users = DB::table('tasks')->where('id', 1)->get();

      return view('main',
      [
        'users'=>$users
      ]

    );
  }

  public function user()
  {
    $users = DB::table('users')->get();
    $usr = $users->toJson();

    echo $usr;
  }

  public function form()
  {


    return view('form');
  }

}
