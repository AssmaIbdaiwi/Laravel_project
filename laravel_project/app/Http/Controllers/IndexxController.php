<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
class IndexxController extends Controller
{
    public function index()
    {

    $data['products'] = Product::orderBy('id','desc')->limit(4)->get();   
    $data['categories'] = Category::orderBy('id','asc')->limit(8)->get();
    return view('indexx', $data);

    }






}
