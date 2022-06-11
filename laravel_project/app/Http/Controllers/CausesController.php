<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use LengthException;

class CausesController extends Controller
{

    public function index(){
        $products = Product::all();
        $item_per_page = 6;
        $pages_number = ceil(count($products) / $item_per_page);
        $product = (array)$products;
        $product = $product["\x00*\x00items"];
        $pages = array();
        for($i = 0; $i < count($products) ; $i +=$item_per_page){
        array_push($pages, array_slice($product , $i ,$i + $item_per_page));
        }
        return view("causes" , compact('pages_number' , 'pages'));
    }
    
}
