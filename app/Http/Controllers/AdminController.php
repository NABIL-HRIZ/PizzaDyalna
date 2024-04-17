<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Galery;
use App\Models\Reservation;
use App\Models\Chef;
use App\Models\Order;
use Alert;
use Notification;
use App\Notifications\sendEmailNotification;

class AdminController extends Controller
{
    public function show_users(){

        $users=User::orderBy('created_at','desc')->get();
        return view('admin.show_users',compact('users'));
    }


    public function delete_user($id){

        $data=User::find($id);

        $data->delete();

        return redirect()->back();

    }

    public function add_galery(){
        return view('admin.add_galery');
    }

    public function add_galeries(Request $request){
        $galery=new Galery;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time().'.'.$image->getClientOriginalExtension();
    
            // Move the uploaded file to the desired location
            $image->move('GaleryImage', $imagename);
    
            // Assign the file name to the 'image' attribute of the employee
            $galery->image = $imagename;
        }

        $galery->name=$request->name;
        $galery->description=$request->description;
        $galery->price=$request->price;

        $galery->save();
        Alert::success('congras','New Galery Pizza Addedd');

        return redirect()->back();

    }

    public function show_galery(){

        $galeries=Galery::orderBy('created_at','desc')->get();
        return view('admin.show_galery',compact('galeries'));
    }

    public function delete_galery($id){

        $data=Galery::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function update_galery($id){
        $galeries=Galery::find($id);

        return view('admin.update_galery',compact('galeries'));
    }

    public function upload_galery(Request $request , $id){
        $data=Galery::find($id);

        if($request->hasfile('image')){
            $image=$request->file('image');
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $image->move('GaleryImage',$imagename);

            $data->image=$imagename;
        }

        $data->name=$request->name;
        $data->description=$request->description;
        $data->price=$request->price;

        $data->save();

        Alert::success('congras','Update successfuly');
        return redirect()->back();

    }

    public function  table_reservation(){

        $reservations=Reservation::orderBy('created_at','desc')->get();
        return view('admin.table_reservation',compact('reservations'));
    }

    public function accept_reservation($id){
        $data=Reservation::find($id);
        $data->status='accept';
        $data->save();
        Alert::success('Reservation Accepted'," Don't forget to  contact his or her Email ");
        return redirect()->back();
    }

    public function delete_reservation($id){
        $data=Reservation::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function sendEmail($id){
        $data=Reservation::find($id);
        return view('admin.sendEmail',compact('data'));
    }

    public function send_Email(Request $request,$id){
        $data=Reservation::find($id);
        $details=[
            'greeting'=>$request->greeting,
            'body'=>$request->body,
            'actionText'=>$request->actionText,
            'actionUrl'=>$request->actionUrl,
            'endPart'=>$request->endPart,

        ];
        Notification::send($data,new sendEmailNotification($details));
        Alert::success('congras',"Email Successfuly Sended");
        return redirect()->back();
    }
    public function add_chef(){
        return view('admin.add_chef');
    }

    public function upload_chef(Request $request){
        $chefs=new Chef;

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $image->move('ChefImage',$imagename);

            $chefs->image=$imagename;
        }
        $chefs->name=$request->name;
        $chefs->description=$request->description;

        $chefs->save();
        Alert::success('congras',"Successefly New Chef Added");
        return redirect()->back();

    }

    public function show_chefs(){
        $chefs=Chef::orderBy('created_at','desc')->get();
        return view('admin.show_chefs',compact('chefs'));
    }

    public function delete_chef($id){
        $data=Chef::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_chef($id){
        $chefs=Chef::find($id);

        return view('admin.update_chef',compact('chefs'));
    }

    public function edit_chef(Request $request , $id){
        $data=Chef::find($id);

        if($request->hasfile('image')){
            $image=$request->file('image');
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $image->move('chefImage',$imagename);

            $data->image=$imagename;
        }

        $data->name=$request->name;
        $data->description=$request->description;

        $data->save();

        Alert::success('congras','Update successfuly');
        return redirect()->back();

    }

    public function orders_view(){

        $orders=Order::orderBy('created_at','desc')->get();
     
        return view('admin.orders_view',compact('orders'));
    }

    public function done_pizza($id){
        $data=Order::find($id);
        $data->status="done";
        $data->save();

        Alert::success('congras','pizza food done');
        return redirect()->back();
    }

    public function delete_pizza($id){
        $data=Order::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orders_completed(){

        $orders=Order::where('status','done')->orderBy('created_at','desc')->get();
        

        return view('admin.orders_completed',compact('orders'));
    }


    public function orders_incomplete(){
        $orders=Order::where('status','in prepare')->orderBy('created_at','desc')->get();

        return view('admin.orders_incomplete',compact('orders'));
    }

    public function search(Request $request){

        $InputSearch=$request->search;
        $orders=Order::where('name','like','%'.$InputSearch.'%')->orWhere('foodName','like','%'.$InputSearch.'%')->get();
        return view('admin.orders_view',compact('orders'));

    }
    
    public function search_order_complet(Request $request){
        $InputSearch=$request->search;
        $orders=Order::where('name','like','%'.$InputSearch.'%')->orWhere('foodName','like','%'.$InputSearch.'%')->get();
        return view('admin.orders_completed',compact('orders'));

    } 

    public function search_order_incomplet(Request $request){
        $InputSearch=$request->search;
        $orders=Order::where('name','like','%'.$InputSearch.'%')->orWhere('foodName','like','%'.$InputSearch.'%')->get();
        return view('admin.orders_incomplete',compact('orders'));

    } 
    
}