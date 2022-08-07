@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">

        <div class="main-header">
            <h4><i class="ti-gift"></i> Recetas : agregar  </h4> 
        </div>
        </div>

        @if($add_products_avaible>=15)
        <div class="alert alert-warning">Recordatorio: Ha superado el limite, solo puede agregar un máximo de 15 recetas, para más información  <a href="https://www.facebook.com/angel.crarzola">consulte al desarrollador.</a> </div>
        <div class="alert alert-warning">Si quiere agregar un producto nuevo, puede borrar un producto y agregar el producto deseado.</div>
        
        @endif

    </div>
    <div class="row card"  >
        <div class="col-lg-12">
             <div class="">
                <div class="card-block">
                        @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if(session('ERROR'))
                        <div class="alert alert-danger">{{ session('ERROR') }}</div>
                        @endif

                    <form action="{{ route('recipes_store')}}" method="POST">
                        @csrf
                            <div class="form-group col-lg-3">
                                <label for="dia" class="form-control-label">Nombre</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>

                            
                            <div class="form-group col-lg-8">
                                <label for="dia" class="form-control-label">Descripción</label>
                                <input type="text" class="form-control" name="description" id="description" required>
                            </div>
                            <div class="form-group col-lg-8">
                                <label for="dia" class="form-control-label">Ingredientes</label>
                                <input type="text" class="form-control" name="ingredients" id="ingredients" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="dia" class="form-control-label">Imagen</label>
                                <input type="file" class="form-control" name="image_url" id="image_url" required>
                            </div>
                          
                            <div class="form-group col-lg-8">
                               
                            </div>
                            <div class="form-group col-lg-12 d-flex " style="display: flex;  justify-content: space-around;" >
                                @if($add_products_avaible>=15)

                                    @else 
                                     <button  type="submit" class="btn btn-success">Agregar</button>
                                @endif
                                
                            </div
                       
                               
                    </form>


                </div>
             </div>
          </div>
    </div>
 </div>



@endsection