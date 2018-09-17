<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostsController extends Controller
{
    public function create()
    {
      Post::create(['title'=>'Заголовок', 'description'=>'Описание текста']);
    }
}
