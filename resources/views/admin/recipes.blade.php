@extends('layouts.admin')
@section('title',"Exportar Excel - UTTECAM")

@section('content')
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                <div class="main-header">
                    <h4><i class="ti-receipt"></i> Recetas  </h4> 
                </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-lg-12">
                     <div class="card">
                        <div class="card-block">
                            <center>
                                <a href="{{ route('recipes_add')}}" class="btn btn-primary">Agregar receta</a>
                                
                        </div>
                     </div>
                  </div>
            </div>
         </div>

         <div class="content-wrapper"  id="tablaDatos">
            <div class="row" >
                <div class="col-lg-12">
                     <div class="card">
                        @if(session('success_recipe_deleted'))
                        <div class="alert alert-success">{{ session('success_recipe_deleted') }}</div>
                        @endif
                 
                        <div class="card-block">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col text-center">Nombre</th>
                                    <th scope="col text-center">Descripción</th>
                                    <th scope="col text-center">Ingredientes</th>
                                    <th scope="col text-center">Imagen</th>

                                    <th scope="col text-center" style="width: 20%">Acciones</th>
                                   
                                  </tr>
                                </thead>

                                <tbody id="">
                                    @foreach($recipes as $recipe)
                                    <tr>
                                        <td>{{$recipe->name}}</td>
                                        <td>{{$recipe->description}}</td>
                                        <td>{{$recipe->ingredients}}</td>
                                        <td>{{$recipe->image_url}}</td>
                                        <td  class="d-flex">
                                            <form action="{{route('recipes_delete',$recipe)}}" method="POST">
            
                                                <!-- Con esto internamente le indicamos que tipo de ruta es -->
                                                @method('DELETE')
                                                    @csrf
                                                    <input type="submit" 
                                                    class="btn btn-danger" 
                                                    value="Eliminar" 
                                                    onclick="return confirm('¿Desea eliminar esta receta?')" >
                                            </form>
                                         
                                            <button type="submit" id="Buscar"  class="btn btn-info">Editar</button>
        
                                        </td>
                                      
                                    </tr>
                                    @endforeach
                                   
                                   
                                </tbody>
                              </table>
                        </div>
                     </div>
                  </div>
            </div>
         </div>


@endsection