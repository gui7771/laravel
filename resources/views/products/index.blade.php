@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produtos</div>

                <div class="card-body">

                    <table class="table">
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>value</th>
                                <th>obs</th>
                            </tr>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$client->id }}</td>
                                <td>{{$client->name}}</td>
                                <td>{{$client->value}}</td>
                                <td>{{$client->obs}}</td>
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
