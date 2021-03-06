@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clientes</div>

                    <form class="form" method="POST" action="{{route('clients.update', $client->id)}}">

                        {{csrf_field()}}

                        {{method_field('PUT')}}

                        <div class="form-group">
                            <label class="">Nome</label>
                            <input type="text" name="name" class="form-control" value="{{$client->name}}"/>
                        </div>

                        <div class="form-group">
                            <label class="">E-mail</label>
                            <input type="email" name="email" class="form-control"  value="{{$client->email}}"/>
                        </div>

                        <div class="form-group">
                            <label class="">Ano</label>
                            <input type="number" name="year" class="form-control"  value= "{{$client->year}}"/>
                        </div>

                        <div class="form-group">
                            <label class="">Obs</label>
                            <textarea class="form-control" name="obs">{{$client->name}}</textarea>
                        </div>

                        <div class="form-group text-right">
                            <input type="submit" value="Salvar" class="btn btn-primary"/>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
