<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;

class PanelController extends Controller
{

	public function __construct(){
        $this->middleware('auth');
    }


    public function index(){
    	$products =	Product::paginate(7);
    	return view('panel.index')->with('products',$products);
    }
}
