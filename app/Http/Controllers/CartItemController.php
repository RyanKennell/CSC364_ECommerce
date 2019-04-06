<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\CartItem;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{

    public function add($id)
    {
        $user_id = Auth::id();
        if($user_id == null)
        {
            return redirect('/login');
        }

        $products = Product::get()->toArray();
        $products_adjusted = array();
        foreach($products as $product)
        {
            $ID = $product['id'];
            $products_adjusted += array($ID => $product);
        }

        $cart = CartItem::get()->toArray();
        $found = false;
        foreach($cart as $item)
        {
            $found = false;
            if($item['customer_id'] == $user_id && $item['product_id'] == $id)
            {
                $found = true;
                $model = CartItem::find($item['id']);
                $model->quantity = $item['quantity'] + 1;
                $model->save();
                break;
            }
        }

        if(!$found)
        {
            $data = array('customer_id' => $user_id, 'product_id' => $id, 'quantity' => 1, 'price' => $products_adjusted[$id]['price']);
            CartItem::create($data);
        }
        return redirect('sc');
    }

    public function remove($id)
    {
        $item = CartItem::find($id);
        $item->delete();
        return redirect('sc');
    }

    public function index()
    {
        $user_id = Auth::id();
        if($user_id == null)
        {
            return redirect('/login');
        }
        $carts = CartItem::where('customer_id', $user_id)->get()->toArray();

        $products = Product::get()->toArray();
        $products_adjusted = array();
        foreach($products as $product)
        {
            $id = $product['id'];
            $products_adjusted += array($id => $product);
        }

        return view('pages.shoppingCart')->with('carts', $carts)->with('products', $products_adjusted);
    }
}
