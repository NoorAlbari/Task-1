<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;

class productController extends Controller
{

    public function create(){
        return view ('products.create');
    }

    public function store(ProductFormRequest $request){
        $data = $request->validated();

        $product = Product::create($data);

        return redirect('/add-product')->with('success','Product Added Succesfully');
    }

    public function index(){
        $product = Product::all();
        return view ('products.index',compact('product'));
    }
    public function edit($product_id){

        $product = Product::find($product_id);

        return view ('products.edit',compact('product'));
    }
    public function update(ProductFormRequest $request, $product_id){

        $data = $request->validated();

        $product = Product::where('id',$product_id)->update([
            'name'=>$data['name'],
            'description'=>$data['description'],
            'price'=>$data['price']
        ]);

        return redirect('/all-product')->with('success','Product Updated Succesfully');
    }

    public function destroy($product_id){

        $product = Product::find($product_id)->delete();

        return redirect('/all-product')->with('success','Product deleted Succesfully');
    }


}
