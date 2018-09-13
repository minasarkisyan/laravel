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
      $id = 256;
      $name = $req->input('name');
      $surname = $req->Input('surname');;
      return view('main',
      [
          'data'=>$id,
          'name'=>$name,
          'familia'=>$surname
      ]);
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
