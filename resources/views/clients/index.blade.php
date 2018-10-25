@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clientes</div>

                <div class="card-body">
                    @foreach($clients as $client)
                        {{ $client->id }}
                        {{$client->name}}
                        {{$client->email}}
                        {{$client->year}}
                        {{$client->obs}}

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
