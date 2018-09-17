<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests\StoreBlogPost;
use Illuminate\Support\Facades\Input;
use App\Models\User;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $uri = $request->name;
        dump($uri);
    }

    public function watch()
    {
        $uri = Input::input('name');
        dump($uri);
    }




    public function getdata(Request $request)
    {

      $name = $request->input('name');
      $email = $request->input('email');

      User::create(
        [
          'name'=>$name,
          'email'=>$email
        ]);

      $users = User::get();

      return view('users',['users'=> $users]);

    }

    public function store(StoreBlogPost $request)
    {

    }
}
