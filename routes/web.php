<?php

    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\BlogController;
    use App\Http\Controllers\ItemsController;
    use App\Http\Controllers\ProductController;


    Route::get('/', [ItemsController::class, 'itemsClass']);

    Route::get('/details/{id}', [ItemsController::class, 'details']);

    Route::get('/addItem', [ItemsController::class, 'addItem']);

    Route::post('/addItem', [ItemsController::class, 'toAddItem']);

    Route::get('/deleteItem/{id}', [ItemsController::class, 'deleteItem']);

    Route::get('/products', [ProductController::class, 'products']);

    Route::get('/addproducts', [ProductController::class, 'addproducts']);

    Route::post('/toAddProduct', [ProductController::class, 'toAddProduct']);

?>