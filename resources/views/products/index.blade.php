@extends('layouts.plantilla')

@section('content')
    <div class="big-padding text-center blue-grey white-text">
        <h1>Productos</h1>
    </div>

    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Título</td>
                    <td>Descripción</td>
                    <td>Precio</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                        <a href="{{url('/products/'.$product->id.'/edit')}}">Editar</a>
                        @include('products.delete',compact('products'))
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <a href="{{url('/products/create')}}">Add</a>
    </div>
    
@endsection