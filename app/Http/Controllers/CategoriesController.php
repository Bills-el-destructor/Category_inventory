<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreCategory;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderby('name', 'asc')->get();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \StoreCategory\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StoreCategory $request)
    {
        $image = $request -> file('image'); /* Guarda la imagen como tal */
        $file = $image -> store('images'); /* Guarda la dirección del archivo */ /* la funcion store toma como bae la carpeta public que configuramos*/

        return redirect() -> route('categories.show', $this->createCategory($request->id, $file));
    }

    public function createCategory($name, $image)
    {   
        $category = new Category();
        $category -> name = $name;
        $category -> image = $image;
        $category -> save();
        return $category;
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //mosrtar la vista q voy a editar
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //envia los dato a la db sin vista
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
