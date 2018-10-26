@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clientes</div>

                <div class="card-body">

                    <table class="table">
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>email</th>
                                <th>year</th>
                                <th>obs</th>
                            </tr>
                        @foreach($clients as $client)
                            <tr>
                                <td>{{$client->id }}</td>
                                <td>{{$client->name}}</td>
                                <td>{{$client->email}}</td>
                                <td>{{$client->year}}</td>
                                <td>{{$client->obs}}</td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
