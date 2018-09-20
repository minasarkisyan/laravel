<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // - Вывод списка
    {
        echo "Вывод списка";
        $products = Product::all();
        return view('crud.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // - Форма создания
    {
        echo "Create - форма создания";
        return view('crud.form-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // - Создание
    {
        echo "Store - Создание";
        $title = $request->input('title');
        $description = $request->input('description');
        $image = $request->input('image');
        $price = $request->input('price');

        Product::create([
          'title'=>$title,
          'description'=>$description,
          'image'=>$image,
          'price'=>$price
        ]);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product) // - Вывод сущности
    {

        return view('crud.show', [
           'title'=>$product->title,
           'description'=>$product->description,
           'image'=>$product->image,
           'price'=>$product->price
         ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) // - Форма обновления
    {
        echo "Форма обновления";
        $product = Product::find($id);
        return view('crud.edit', compact('product', 'id'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) // - Обновление
    {

       $product = Product::find($id);
       $product->title=$request->get('title');
       $product->description=$request->get('description');
       $product->image=$request->get('image');
       $product->price=$request->get('price');
       $product->save();
       return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) // - Удаление
    {
        echo "Удаление";

        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
