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
        // dd(Cart::content());
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
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if ($duplicates->isNotEmpty()){
            return redirect()->route('cart_post')->with('success_message', 'vous avez déja ce service dans votre pannier!');
        }

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

        //calculation of addition fees , like for plastification  
        $price = $request->price;
        if(count($optionsArray) > 0){
            foreach($optionsArray as $additionalFee){
                $price+= $additionalFee;
            }
        }
        

        Cart::add($request->id, $request->name, $request->quantity, $price, ['quantity' => $request->quantity, 'optionsArray' => $optionsArray, 'serviceOptions' => $service->options])->associate('App\Service');

        
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
        //edit my product
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
