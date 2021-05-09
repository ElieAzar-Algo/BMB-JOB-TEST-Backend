<?php

namespace App\Http\Controllers;

use App\Order_Product;
use Illuminate\Http\Request;

class OrderProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data=new Order_Product();
        $data->fill($request->all());
        if($data->save()){
            return response()->json([
                'success'=>true,
                'message'=>'Operation Successful',
                'data'=>$data
            ],200);
        }else{
            return response()->json([
                'success'=>false,
                'message'=>'Operation Failed',
                
            ],200);
        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order_Product  $order_Product
     * @return \Illuminate\Http\Response
     */
    public function show(Order_Product $order_Product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order_Product  $order_Product
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_Product $order_Product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order_Product  $order_Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order_Product $order_Product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order_Product  $order_Product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Order_Product::find($id);
       
        if ($data->delete()){
            return response()->json([
                'success'=> true,
                'message'=>'Deleted Successfully',
                'data'=>$data
            ], 200);
        }else{

            return response()->json([
                'success' => false,
                'message' => "Could not be deleted",
           ], 404);
        }
    }
}
