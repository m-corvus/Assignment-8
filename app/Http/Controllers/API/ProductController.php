<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        if($products)
            {
                return ResponseFormatter::success(
                    $products,
                    'Data produk berhasil diambil'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data produk tidak ada',
                    404
                );
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_product = $request->all();        
        $product = Product::create($data_product);        

        if($product)
            {
                return ResponseFormatter::success(
                    $data_product,
                    'Data produk berhasil di buat'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data produk gagal di buat',
                    404
                );
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        if($product)
            {
                return ResponseFormatter::success(
                    $product,
                    'Data produk berhasil diambil'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data produk tidak ada',
                    404
                );
            }
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
        $data_product = $request->all();
        $product = Product::find($id);
        $product->update($data_product);
        $product->save();              

        if($product)
            {
                return ResponseFormatter::success(
                    $data_product,
                    'Data produk berhasil di update'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data produk gagal di update',
                    404
                );
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $product = Product::destroy($id);                 

        if($product)
            {
                return ResponseFormatter::success(                    
                    'Data produk berhasil di hapus'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data produk gagal di hapus',
                    404
                );
            }
    }
}
