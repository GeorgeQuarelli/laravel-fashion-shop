@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul>
                    @foreach ($clothes as $cloth)
                        <li> {{ $cloth->brend }} </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection
