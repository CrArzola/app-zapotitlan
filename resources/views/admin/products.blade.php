@extends('layouts.admin')
@section('title',"Exportar Excel - UTTECAM")

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
        <div class="main-header">
            <h4><i class="ti-gift"></i> Productos  </h4> 
        </div>
        </div>
    </div>
    <div class="row" >
        <div class="col-lg-12">
             <div class="card">
                <div class="card-block">
                    <center>
                        <a href="{{ route('products_add')}}" class="btn btn-primary">Agregar producto</a>
                    </center>
                       
                </div>
             </div>
          </div>
    </div>
 </div>

 <div class="content-wrapper"  id="tablaDatos">
    <div class="row" >
        <div class="col-lg-12">
             <div class="card">
         
                <div class="card-block">
                    @if(session('success_product_deleted'))
                    <div class="alert alert-success">{{ session('success_product_deleted') }}</div>
                    @endif
                   
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col text-center">Nombre</th>
                            <th scope="col text-center">Descripción</th>
                            <th scope="col text-center">Imagen</th>

                            <th scope="col text-center" style="width: 20%">Acciones</th>
                           
                          </tr>
                        </thead>

                        <tbody >
                            @foreach($products as $product)
                            <tr>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->image_url}}</td>
                                <td  class="d-flex">
                                    <form action="{{route('products_delete',$product)}}" method="POST">
    
                                        <!-- Con esto internamente le indicamos que tipo de ruta es -->
                                        @method('DELETE')
                                            @csrf
                                            <input type="submit" 
                                            class="btn btn-danger" 
                                            value="Eliminar" 
                                            onclick="return confirm('¿Desea eliminar este producto?')" >
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