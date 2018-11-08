@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Produtos</div>

                <div class="card-body">

                    <div class="col-md-12 text-right" >
                        <a href="{{route('products.create')}}" class="btn btn-success">Adicionar</a>

                    </div>
                    <br>

                    <table class="table">
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>value</th>
                                <th>obs</th>
                                <th>actions</th>
                            </tr>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id }}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->value}}</td>
                                <td>{{$product->obs}}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </table>
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
