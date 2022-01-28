@extends('layout')
@section('contentPart')

    <div class="row">
        <div class="col-12">
            <h3 class="mt-2">{{$item->name}}</h3>

            <p>
                For {{$item->price}} KZT, {{$item->amount}} lleft
            </p>

            <a href="/deleteItem/{{$item->id}}" class="btn btn-danger">Удалить</a>
            
        </div>
    </div>

@endsection()