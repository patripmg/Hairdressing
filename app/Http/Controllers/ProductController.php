<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function show($id){
        //['product' => 'product']
        $product = Product::findOrFail($id);
        
        return view('products.show', compact('product'));
    }

    public function create() {
       
        return view('products.create');
    }

    public function store(ProductRequest $request) {
        $path= '';
        if ($request->hasFile('img')){ //si existe algun fichero 
          $path = Storage::url ($request->file('img')->store('public/products'));
        }

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'img' => $path

        ]);
        $product->saveOrFail();

        return redirect ()->route ('products')->with (['success' => 'Producto creado correctamente' ]);
    }

    public function edit(Product $product) {
       
        return view('products.edit', compact('product'));
    }
 
     public function update(ProductRequest $request, Product $product) { //aqui se guarda
       
        $product->fill($request->validated());
         $img = Storage::url ($request->file('img')->store('public/products'));
        $product->img = $img; 
        $product->updateOrFail($request->all()); 
        
        $product->saveOrFail(); 

        return redirect()->route('products')->with('success','Hemos actualizado correctamente el producto.');
    } 

    public function destroy(Product $product) {

        $product->deleteOrFail();
        return redirect()->route('products')->with('success','Hemos borrado correctamente el producto.');

    }


}
