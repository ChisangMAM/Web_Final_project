<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function product()
    {
        $products = Product::all();
        return view('products_content', compact('products'));
    }

    public function all_product()
    {
        $products = Product::all();
        return view('content', compact('products'));
    }
 
    public function cart()
    {
        $products = Product::all();
        return view('cart');
    }
    
    public function addtocart($id)
    {
    	$product = Product::find($id);
 
        if(!$product) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "id" => $product->id,
                        "product_name" => $product->product_name,
                        "quantity" => 1,
                        "description" => $product->description,
                        "price" => $product->price,
                        "image" => $product->image
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id" => $product->id,

            "product_name" => $product->product_name,
            "quantity" => 1,
            "description" => $product->description,
            "price" => $product->price,
            "image" => $product->image
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        public function update(Request $request){
            if($request->id and $request->quantity){
                $cart = session()->get('cart');
     
                $cart[$request->id]["quantity"] = $request->quantity;
     
                session()->put('cart', $cart);
     
                session()->flash('success', 'Cart updated successfully');
            }
        }

         public function remove(Request $request){
            if($request->id) {
     
                $cart = session()->get('cart');
     
                if(isset($cart[$request->id])) {
     
                    unset($cart[$request->id]);
     
                    session()->put('cart', $cart);
                }
     
                session()->flash('success', 'Product removed successfully');
        }
    }
}
