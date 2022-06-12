<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
class IndexxController extends Controller
{
    public function index()
    {

    // $data['products'] = Product::orderBy('id','desc')->get();  

    $categories= Category::orderBy('id','asc')->limit(8)->get();


    $data= Category::Join('products', 'products.item_category_id', '=', 'categories.id')
    ->limit(4)
    ->get(['*']);
// dd($products);
    return view('indexx', compact('data','categories'));

    }






}
