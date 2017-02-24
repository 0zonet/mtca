<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use App\Image;
use App\Category;
use App\Http\Requests;

class ProductController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('name','ASC')->lists('name','id');
        return view('panel.create')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','ASC')->lists('name','id');
        return view('panel.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        //Save image
        if($request->file('image')){
            $file = $request->file('image');
            $name = "metalurjica_" . time().'_'. str_random(40) . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/asset/imgs/products/';
            $file->move($path,$name);
        }
        
        //Inserting the new product in database  
        $product = new Product($request->all());
        $product->save();

        //Inserting the new image in database
        $image = new Image();
        $image->path = $name;
        $image->product()->associate($product);
        $image->save();

        //Associate Category
        $category = Category::Find($request->category_id);
        $product->category()->associate($category);

        // Send a Flash Message
        flash('Producto agregado', 'success');

        // Redirect to panel index
        return redirect()->route('panel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $product->category;
        $categories = Category::orderBy('name','ASC')->lists('name','id');
        return view('panel.edit')->with('product',$product)->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        //Update product
        $product = Product::find($id);
        $product->image;
        $product->fill($request->all());  
        $product->save();

        // Save new image
        if($request->file('image')){
            //Delete old image
            $image = Image::find($product->image->id);
            //Save image on a directory
            $file = $request->file('image');
            $path = public_path() . '/asset/imgs/products/';
            $name = "metalurjica_" . time().'_'. str_random(40) . '.' . $file->getClientOriginalExtension();
            $file->move($path,$name);
            //Inserting the new image in database
            $image = new Image();
            $image->path = $name;
            //Associate image with a product
            $image->product()->associate($product);
            $image->save();
                
        }
        //Associate Category
        $category = Category::Find($request->category_id);
        $product->category()->associate($category);

         flash('Producto actualizado', 'success');
         return redirect()->route('panel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        flash('Producto eliminado', 'danger');
        return redirect()->route('panel.index');
    }
}
