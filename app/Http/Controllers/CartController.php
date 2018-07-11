<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Service;
use Illuminate\Support\Facades\Auth;


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
        if(Auth::check()){
            //tre to insert into database
            \DB::beginTransaction();
            try{

                \DB::table('favorites')->insert(
                    ['user_id' => Auth::id(),
                    'service_id' => $id]
                );
                
                \DB::commit();

            //if the user already have that service in his favs return error
            } catch (\Exception $e) {

                \DB::rollback();
                return redirect()->route('cart_post')->with('success_message' , 'vous avez déja ce article dans vos favoris !'); 
            }

            //delete element from cart
            $rows  = Cart::content();
            $rowId = $rows->where('id', $id)->first()->rowId;

            Cart::remove($rowId);

            return redirect()->route('cart_post')->with('success_message' , 'un article a été ajouté à vos favoris');  
        }else{
            return view('/login');
        }   
    }

     /**
     * remove item from favs
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function removeFromFavs($id)
    {   
        \DB::table('favorites')
            ->where('service_id', '=', $id)
            ->delete();
        
            return redirect()->back();
    }
}
    