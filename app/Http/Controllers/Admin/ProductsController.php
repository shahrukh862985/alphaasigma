<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Str;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title"=> 'required|string',
            'image' => 'required|image|max:2048'
        ]);
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $extension = $request->file('image')->extension();
            $fileName = Str::random(10).'_'.time().'.'.$extension; //File Name for save file in folder

            // $img = Image::make($image->path());
            // $img->resize(1920, 580, function ($constraint) {
            //     // $constraint->aspectRatio();
            // })->save(public_path('/products').'/'.$fileName);

            $image->move(public_path('/products'), $fileName);
            Product::create([
                'title'=> $request->title,
                'image_name'=> $fileName,
                'active' => $request->active != null?true:false,
                'display_order' => 1
            ]);
        }
       return redirect()->route('products.index');
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
        return view('admin.products.edit',compact('product'));
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
        $request->validate([
            "title"=> 'required|string',
            'image' => 'nullable|image|max:2048'
        ]);
        $product = Product::find($id);
        $product->title = $request->title;
        $product->active = $request->active != null?true:false;

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $extension = $request->file('image')->extension();
            $fileName = Str::random(10).'_'.time().'.'.$extension; //File Name for save file in folder

            // $img = Image::make($image->path());
            // $img->resize(1920, 580, function ($constraint) {
            //     // $constraint->aspectRatio();
            // })->save(public_path('/products').'/'.$fileName);

            $image->move(public_path('/products'), $fileName);
            $product->save();
        }
        else
        {
            $product->save();
        }
        return redirect()->route('products.index');
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
       return response()->json(['status'=>true]);
    }
}
