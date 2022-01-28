@extends('layout')
@section('contentPart')

    <div class="row mt-3">
        <div class="col-12">
            @foreach($products as $prod)
                <div class="row mb-2" style="background-color:lightgrey;">
                    <h3 class="mt-2">
                        <a href="/details/{{$prod->id}}" style="text-decoration:none; color:black;">
                            {{$prod->name}} from {{$prod->brandName}}
                        </a>
                            
                    </h3>
                    <p>
                            For {{$prod->price}} KZT, {{$prod->amount}} items
                    </p>
                </div>
            @endforeach
        </div>
    </div>

@endsection()
@section('footer')
    <nav class="navbar fixed-bottom navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand mx-auto" href="#">Copyright 2021</a>
        </div>
    </nav>
@endsection()