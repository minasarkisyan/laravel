<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;
class NamesController extends Controller
{
    public function index()
    {
      $users = Name::find(1);

      dump($users->first_name);
    }

    public function show()
    {
      $users = Name::get();

      return view('main',
      [
          'users'=>$users
      ]);
    }

    public function delete($id)
    {
      Name::destroy($id);
    }

    public function update()
    {
      $data = ['first_name' => 'Николай', 'second_name'=>'Николаевич'];

      Name::find(3)->update($data);
      dump($data);

    }

    public function create(Request $request)
    {
      $firstName = $request->input('name');
      $secondName = $request->input('email');

      $users = Name::create(['first_name'=>$firstName, 'second_name'=>$secondName]);

    }



}
