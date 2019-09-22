<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use Image;
use Storage;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        // means that only authenticated users can access
        // and guest means only guests can access
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('products.index')->withProducts($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = new Product;
        $product->name = $request->name;
        $product->price = strval($request->price);
        $product->image = $request->image;

        // salvar imagem
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            // $image->encode('png');
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(260, 160)->save($location);
            $product->image = $filename;
        }

        $product->save();
        Session::flash('success', 'Produto cadastrado!');
        $products = Product::all();
        return view('products.index')->withProducts($products);
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
        //
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
        //
    }

    public function delete($id){
        $product = Product::find($id);
        return view('products.delete')->withProduct($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        unlink(public_path('images/'.$product->image));
        $product->delete();

        Session::flash('success', 'Produto deletado com sucesso!');

        $products = Product::all();
        return view('products.index')->withProducts($products);
    }
}
