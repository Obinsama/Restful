<?php


namespace App\Http\Controllers;


use App\Abonnement;
use App\Product;
use Illuminate\Support\Facades\Auth;

class AbonnementController extends Controller
{
    public function Purchase($product){
        $item=Product::find($product);
        //dd($item->id);
        $date=date('Y-m-d H:i:s');
        $expire= date('Y-m-d H:i:s', strtotime($date.'+ '.$item->validity.'days'));
        Abonnement::create(['client_id'=>Auth::id(),
            'product_id'=>$item->id,
            'expiration'=>$expire]);
        return redirect()->route('products.index')
            ->with('success','Product purhased successfully');

    }

}