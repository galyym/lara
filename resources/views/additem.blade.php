@extends('layout')
@section('contentPart')

    <div class="row">
        <div class="col-6 mx-auto">
            <h3 class="mt-2">Добавление нового товара</h3>

            <form action="/addItem" method="post">
                @csrf
                <div class="mt-2">
                    <label>Название товара</label>
                    <input type="text" class="form-control" name="name" required>  
                </div> 

                <div class="mt-2">
                    <label>Цена</label>
                    <input type="number" class="form-control" name="price" required>  
                </div> 

                <div class="mt-2">
                    <label>Остатки</label>
                    <input type="number" class="form-control" name="amount" required>  
                </div> 

                <div class="mt-2">
                    <label>Бренд</label>
                    <select class="form-control"  name="brand_id">
                        @foreach ($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}} / {{$brand->country}} / {{$brand->id}}</option>
                        @endforeach
                    </select>
                </div> 

                <div class="mt-2">
                    <button class="btn btn-success">Добавить товар</button>
                </div> 
            </form>
        </div>
    </div>

@endsection()