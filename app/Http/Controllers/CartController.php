<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Service;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart');
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $service = Service::find($request->id);

        // dd($service->options);
        $optionsArray = [];
        // $request->session()->flash('request', $request);
        
        if($service->options){
            foreach($service->options as $option){

                $name = $option->name;
                
                array_push($optionsArray, request($name));
            }
            // dd($request);
        }

        // dd($optionsArray);
        // dd($service->options);

        Cart::add(Service::class, $request->name, 1, $request->price, ['quantity' => $request->quantity, 'optionsArray' => $optionsArray, 'serviceOptions' => $service->options]);


        return redirect()->route('cart_post')->with('success_message' , 'Element ajouté sur votre pannier');
             
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
        Cart::remove($id);
    
        return back()->with('success_message' , 'Element supprime avec success');
    }
}
