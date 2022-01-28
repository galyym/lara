<?php

    namespace App\Http\Controllers;
    use App\Models\Product;
    use Illuminate\Support\Facades\DB;
    use Request;

    class ProductController extends Controller{
        
        public function products(){

            $products = Product::all();

            return view('products', compact('products'));
            
        }

        
        public function addProducts(){

            return view('addproduct');

        }

        public function toAddProduct(){

            $prod = new Product;

            $prod->name = request('name');
            $prod->discraption = request('discraption');
            $prod->price = request('price');

            $prod::save();

            return redirect('/products');

            //dd(request()->all());

        }
    }

?>