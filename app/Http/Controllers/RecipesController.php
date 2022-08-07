<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe= new Recipes();
        $recipe->name=$request->name;
        $recipe->description=$request->description;
        $recipe->ingredients=$request->ingredients;
        $recipe->image_url='prueba';
        $recipe->status='2';
      
        if($recipe->save()===true)
        {
          return back()->with('success','Se ha agregado exitosamente la receta.');

        }
        else
        {
           return back()->with('','No se pudo agregar la receta.');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function show(Recipes $recipes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipes $recipes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipes $recipes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipes $recipes)
    {
        $recipes->status='-2';
        if($recipes->save())
        {
            return back()->with('success_recipe_deleted','Se ha eliminado exitosamente la receta '.$recipes->name.'.');       
        }
        else
        {
            return back()->withErrors('No se puedo eliminar la receta seleccionada.');
        }
    
    }
}
