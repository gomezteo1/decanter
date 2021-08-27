<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Products;

class CartController extends Controller
{
    
    public function shop()
    {   
        $products = Products::all();
        // return $products;
        return view('shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products]);
    }

    public function cart()  {
        // $cartCollection = Cart::getContent();
        $cartCollection = \Cart::getContent();
        dd($cartCollection);
        return view('cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;
    }
}



