<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Galery;
use App\Models\Reservation;
use App\Models\Chef;
use App\Models\Cart;
use App\Models\Order;



class HomeController extends Controller
{
    
public function redirect(){

    $galeries=Galery::all();
    $chefs=Chef::all();

    
   

    if(Auth::id()){

        if(Auth::user()->userType=='0'){
           $user_id=Auth::id();
            $count=Cart::where('userId',$user_id)->count();
            return view('user.home',compact('galeries','chefs','count'));
        }

        else{
            return view('admin.home');
        }
    }
    else{

        return redirect()->back();
    }
}

public function index(){  
    $galeries=Galery::all();
    $chefs=Chef::all();



    if(Auth::id()){
        $user_id=Auth::id();
        $count=Cart::where('userId',$user_id)->count();
        return view('user.home',compact('galeries','chefs','count'));

    }

    else{
        
        return view('user.home',compact('galeries','chefs'));
    }
    
}

public function reservation_table(Request $request){
    $reservations=new Reservation;

    $reservations->name=$request->name;
    $reservations->email=$request->email;
    $reservations->phone=$request->phone;
    $reservations->numberGuest=$request->numberGuest;
    $reservations->date=$request->date;
    $reservations->time=$request->time;
    $reservations->message=$request->message;

    

    $reservations->save();
    return redirect()->back()->with('success','Reservation sended we will send you a message on your email for confirmation ');

}

public function addCart(Request $request , $id){
    if(Auth::id()){


        $user_id=Auth::id();
        $food_id=$id;
        $quantity=$request->quantity;

        $cart = new Cart; 
        $cart->userId=$user_id;
        $cart->foodId=$food_id;
        $cart->quantity=$quantity;

        $cart->save();

       

        return redirect()->back();
    }

    else {
        return redirect('/login');
    }
}

public function show_cart(Request $request  , $id){  
    $count=Cart::where('userId',$id)->count();
    $items=Cart::where('userId',$id)->join('galeries','carts.foodId','=','galeries.id')->get();
    $select_item=Cart::select('*')->where('userId','=',$id)->get();


    return view('user.show_cart',compact('count','items','select_item'));
}

public function delete_product($id){
    $data=Cart::find($id);
    $data->delete();
    return redirect()->back();
} 

public function upload_product_infos(Request $request){


    foreach($request->foodName as $key=>$foodName){
        $products=new Order;

        $products->foodName=$foodName;
        $products->quantity=$request->quantity[$key];
        $products->price=$request->price[$key];
        $products->name=$request->name;
        $products->phone=$request->phone;
        $products->address=$request->address;
        $products->save();

    }
    return redirect()->back()->with('success','Be Ready At Your House');

    



}
}
