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
        //if item already exists in the cart
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });
    

        $service = Service::find($request->id);

        $optionsArray = [];
        
        if($service->options){
            foreach($service->options as $option){

                $name = $option->name;
                
                array_push($optionsArray, request($name));
                
            }
        }

          //calculation of addition fees , like for plastification  
          $price = $request->price;
          if(count($optionsArray) > 0){
              foreach($optionsArray as $additionalFee){
                  $price+= $additionalFee;
              }
          }

   
        if ($duplicates->isNotEmpty()){

            $id    = $request->id;
            $rows  = Cart::content();
            $rowId = $rows->where('id', $id)->first()->rowId;

            $item = Cart::get($rowId);

            $options = $item->options->merge(['serviceOptions' => $service->options, 'optionsArray' => $optionsArray, 'serviceOptions' => $service->options]);

            Cart::update($rowId,['qty' => $request->quantity, 'price' => $price, 'options' => $options]);
            

            return redirect()->route('cart_post')->with('success_message', 'vous avez modifier ce service dans votre panier !'); 
        }        



        Cart::add($request->id, $request->name, $request->quantity, $price, ['serviceOptions' => $service->options, 'optionsArray' => $optionsArray])->associate('App\Service');

        
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
        return view('service.show', compact($id));
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
        $cartItemId = Cart::search(function ($cartItem, $rowId) {
            return $cartItem->id ;
        });
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

    /**
     * add item to save for later cart (favs)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function saveForLater($id)
    {
    
        $item = Cart::get($id);
        Cart::remove($id);

        // $service = Service::find($item);

       
        //   //calculation of addition fees , like for plastification  
        //   dd($item);
        //   $price = $request->price;
        //   if(count($optionsArray) > 0){
        //       foreach($optionsArray as $additionalFee){
        //           $price+= $additionalFee;
        //       }
        //   }


        //add to favs table 

        
        return redirect()->route('cart_post')->with('success_message' , 'un article a été enregistré pour plus tard.');
    }
}
    