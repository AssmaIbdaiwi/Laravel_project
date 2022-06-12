<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ProductController extends Controller
{
    public function index(Product $product){
        return view("product" , compact("product"));
    }

    public function add(Product $product , Request $request){
        $rules = [
            $this->validate($request , [
                "name" => "required",
                'description' => "required",
            ])
        ];
        
        $order = new Order();
        $order->product_order_id = $product->id;
        $order->user_order_id = 1;
        $order->order_name = $request["name"];
        $order->order_description = $request["description"];
        $order->order_image = 000;
        $order->save();


        return redirect("/causes");
    }
}
