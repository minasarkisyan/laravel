<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

class IndexController extends Controller
{

  public function index($id)
  {
    return "User:". $id;
  }

  public function main(Request $req)
  {
      $users = DB::table('tasks')->get();

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
