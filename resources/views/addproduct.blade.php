@extends('layout')
@section('contentPart')

    <div class="row">
        <div class="col-6 mx-auto">
            <h3 class="mt-2">Добавление нового товара</h3>

            <form action="/toAddProduct" method="post">
                @csrf
                <div class="mt-2">
                    <label>Название товара</label>
                    <input type="text" class="form-control" name="name" required>  
                </div> 

                <div class="mt-2">
                    <label>Описание товара</label><br>
                    <textarea name="discreption" id="1" cols="83" rows="8" required></textarea>
                </div> 
                
                <div class="mt-2">
                    <label>Цена</label>
                    <input type="number" class="form-control" name="price" required>  
                </div>

                <div class="mt-2">
                    <button class="btn btn-success">Добавить товар</button>
                </div> 
            </form>
        </div>
    </div>

@endsection()