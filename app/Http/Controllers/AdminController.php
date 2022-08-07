<?php

namespace App\Http\Controllers;
use App\Models\Carrera;
use App\Models\Alumno;
use App\Models\Products;
use App\Models\Recipes;


use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EncuestaExport;
use App\Exports\HistoryAlumno;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $variables = [
            'menu'=>"dashboard",
            'options'=>'',        

        ];
        return view('admin.dashboard')->with($variables);
    }

    public function report_excel()
    {
        $carreras = Carrera::all();
         $variables = [
            'menu'=>"report_excel",
            'carreras'=> $carreras
        ];
        return view('admin.report_excel')->with($variables);
    }
    public function products()
    {   
        $products =Products::latest()->where('status','2')->get();
         $variables = [
            'menu'=>"products",
            'options'=>'',
            'products'=>$products,
            

        ];
        return view('admin.products')->with($variables);
    }
    public function products_add()
    {
        $products_limit =Products::latest()->where('status','2')->get()->count();
        
         $variables = [
            'menu'=>"products", 
            'options'=>'agregar',
            'add_products_avaible'=>$products_limit,       
        ];
        return view('admin.products_add')->with($variables);
    }
    
    public function recipes()
    {
      
        $recipes =Recipes::latest()->where('status','2')->get();
        $variables = [
           'menu'=>"recipes",
           'options'=>'',
           'recipes'=>$recipes,
           

       ];
        return view('admin.recipes')->with($variables);
    }

    public function recipes_add()
    {
        $products_limit =Recipes::latest()->where('status','2')->get()->count();
        
         $variables = [
            'menu'=>"recipes", 
            'options'=>'agregar',
            'add_products_avaible'=>$products_limit,       
        ];
        return view('admin.recipes_add')->with($variables);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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