<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Http\Requests;

class FrontendController extends Controller
{
    public function index(){

    	$categories = Category::All();
    	$categories->each(function($category){
    		$category->products->each(function($product){
    			$product->image;
    		});
    	});
    	return view('frontend.index')->with('categories',$categories);
    }
}
