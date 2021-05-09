<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $data=new Order();
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
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($userId)
    {
        $data=Order::where('user_id',$userId)
        ->with('user')
        ->with('client')
        ->with('product')
        ->get();
        if($data){
            return response()->json([
                'success'=>true,
                'message'=>'Operation Successful',
                'data'=>$data
            ],200);
        }
        else{
            return response()->json([
                'success'=>false,
                'message'=>'Operation Failed',
            
            ],200);
        }
    }

    public function showOrder($orderId)
    {
        $data=Order::where('id',$orderId)
        ->with('user')
        ->with('product')
        ->first();
        if($data){
            return response()->json([
                'success'=>true,
                'message'=>'Operation Successful',
                'data'=>$data
            ],200);
        }
        else{
            return response()->json([
                'success'=>false,
                'message'=>'Operation Failed',
                
            ],200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$orderId)
    {
        $data=Order::find($orderId);
        if ($data){
        $data->update($request->all());
        
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
        else{
            return response()->json([
                'success'=>false,
                'message'=>'Data not found',
               
            ],200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Order::find($id);
        $data->product()->detach();

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
