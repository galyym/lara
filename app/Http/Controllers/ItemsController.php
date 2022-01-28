<?php

    namespace App\Http\Controllers;
    use Illuminate\Support\Facades\DB;

    class ItemsController extends Controller{
        
        public function itemsClass(){
            
            $items = DB::table('items')
            ->select(['items.*', 'brands.name as brandName'])
            ->join('brands', 'items.brand_id', '=', 'brands.id')
            ->get();
            
            
            return view('index', compact('items'));
            
        }
        
        public function details($id){
            $item = DB::table('items')->where('id',$id)->first();
            
            if($item!=null){
                return view('details', compact('item')); 
            }
        }
        
        public function addItem(){

            $brands = DB::table('brands')->get();
            
            return view('additem', compact('brands',$brands));
            
        }
        public function toAddItem(){
            
            $name = request('name');
            $price = request('price');
            $amount = request('amount');
            $brandID = request('brand_id');

            $checkBrand = DB::table('brands')->where('id', $brandID)->first();

            if($checkBrand != null){
                
                DB::table('items')->insert([
                    'name'=>$name,
                    'price'=>$price,
                    'amount'=>$amount,
                    'brand_id'=>$brandID
                ]);
    
                return redirect('/?success');
            }else{
                echo "ERROR 404 NOT FOUND!";
            }
        }

        public function deleteItem($id){

            $itemID = DB::table('items')->where('id',$id)->first();

            DB::delete('delete from items where id = ?',[$itemID->id]);

            return redirect('/?success');
        
        }
                    
    }

?>