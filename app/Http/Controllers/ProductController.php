<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
class ProductController extends Controller
{
    //
    public function index () {
        $products = Product::orderBy('created_at','DESC')->get();

        return view('products.productList',['products' => $products ]);
    }

    public function create () {
        return view('products.create');
    }

    public function store (Request $req) {
        $rules = [
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric',

        ];

        if($req->image != ""){
            $rules['image'] = 'image';
        }


       

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return redirect()->route('create')->withInput()->withErrors($validator);
        }

        $product = new Product();
        $product->name = $req->name;
        $product->sku = $req->sku;
        $product->price = $req->price;
        $product->description = $req->description;
        $product->save();

        //here will store image
        
        if($req->image != ""){

            $imageName = time().'.'.$req->image->extension();
            $req->image->move(public_path('upload/products'), $imageName);
            
            $product->image = $imageName;
            $product->save();
        }

        return redirect()->route('list')->with('success','product added successfully');

    }

    public function edit () {

    }

    public function update () {

    }

    public function destroy () {

    }
}
