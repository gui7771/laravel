@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Categorias</div>

                <div class="card-body">

                    <div class="col-md-12 text-right" >
                        <a href="{{route('categories.create')}}" class="btn btn-success">Adicionar</a>

                    </div>
                    <br>

                    <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id }}</td>
                                <td>{{$category->name}}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </table>
                    {{$categories->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
