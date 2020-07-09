@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <th scope="col">ID</th>
                        <th scope="col">MARCA</th>
                        <th scope="col">TIPO</th>
                        <th scope="col">PREZZO</th>
                    </thead>
                    <tbody>
                        @foreach ($clothes as $cloth)
                            <tr>
                                <td> {{ $cloth->id }} </td>
                                <td> {{ $cloth->brend }} </td>
                                <td> {{ $cloth->type }} </td>
                                <td> {{ $cloth->price }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
