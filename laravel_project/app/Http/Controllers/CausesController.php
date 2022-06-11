<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use LengthException;
use Symfony\Component\HttpFoundation\Request;

class CausesController extends Controller
{

    public function index(){
        $products = Product::all();
        $categories = Category::all();
        $item_per_page = 6;
        $pages_number = ceil(count($products) / $item_per_page);
        $product = (array)$products;
        $product = $product["\x00*\x00items"];
        $pages = array();
        for($i = 0; $i < count($products) ; $i +=$item_per_page){
        array_push($pages, array_slice($product , $i ,$i + $item_per_page));
        }

        return view("/causes" , compact('pages_number' , 'pages' , 'categories'));
    }

    public function ShowProductCategory(Category $category){

        $products = Product::all();
        $categories = Category::all();
        $item_per_page = 6;
        $product = (array)$products;
        $product = $product["\x00*\x00items"];
        $pages = array();
        $newpages = array();
        for($i=0;$i<count($product);$i++){
            if($product[$i]->item_category_id == $category->id){
            array_push($newpages ,$product[$i]);
        }
        }
        $pages_number = ceil(count($newpages) / $item_per_page);
        for($i = 0; $i < count($newpages); $i +=$item_per_page){
        array_push($pages, array_slice($newpages , $i ,$i + $item_per_page));
        }
        return view("/causes" , compact('pages_number' , 'pages' , 'categories'));
    }
    
}


