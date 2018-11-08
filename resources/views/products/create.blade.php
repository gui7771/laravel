@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produtos</div>

                    <form class="form" method="POST" action="{{route('products.store')}}">

                        {{csrf_field()}}

                        {{method_field('POST')}}

                        <div class="form-group">
                            <label class="">Nome</label>
                            <input type="text" name="name" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label class="">Valor</label>
                            <input type="number" name="value" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label class="">Obs</label>
                            <textarea class="form-control" name="obs"></textarea>
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
