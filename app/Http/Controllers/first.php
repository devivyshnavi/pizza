<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail;
use App\Models\menu;
use App\Models\cart;
class first extends Controller
{
    public function register(){
        return view('register');
    }
    public function postregister(Request $req){
        $validatedData=$req->validate([
            'email'=>'required',
            'pass'=>'required',
            'ename'=>'required',
            'address'=>'required'
        ]);
        if($validatedData){
            detail::insert([
            'email'=>$req->email,
            'password'=>$req->pass,
            'name'=>$req->ename,
            'address'=>$req->address
            ]);
            return back()->with('msg',"Registered successfully");
        }
    }
public function loginpage(){
    return view('login');
}
public function login(Request $req){
    $validatedData=$req->validate([
        'email'=>'required',
        'pass'=>'required',
    ]);
    if($validatedData){
       $data=detail::where('email',$req->email)->first();
       if($data){
        $password=$data->password;
        $pass=$req->pass;
        if($password==$pass){
            $req->session()->put('user',$data);
            return redirect('/menu');
        }
        else{
            return back()->with('msg',"Incorrect password");
        }
       }
       else{
        return back()->with('msg',"user not found");
       }
}
}
public function menu(){
    $user=session('user');
    $menu=menu::all();
    $count=cart::where('user_id',$user->id)->get();
    if(count($count)>0){
        $coun=count($count);
        session()->put('count',$coun);
    }
    else{
        $coun=0;
        session()->put('count',$coun);
        }
    return view('menu',compact('menu'));
}
public function addcart($id){
    $menu=menu::where('id',$id)->first();
    return view('addcart',compact('menu'));
}
public function intocart(Request $req){
   $user=session('user');
   $validatedData=$req->validate([
       'quantity'=>'required',
   ]);
   if($validatedData){
    cart::insert([
        'name'=>$req->name,
        'price'=>$req->price,
        'image'=>$req->image,
        'quantity'=>$req->quantity,
        'user_id'=>$user->id,
        'user_name'=>$user->name,
    ]);
}
    return redirect('/menu');
}
public function cartdisp(){
    $user=session('user');
    $cartdisp=cart::where('user_id',$user->id)->get();
    return view('cartdisp',compact('cartdisp'));
}
public function delcart($id){
    cart::find($id)->delete();
    $user=session('user');
    $count=cart::where('user_id',$user->id)->get();
    if(count($count)>0){
        $coun=count($count);
        session()->put('count',$coun);
    }
    else{
        return redirect('/menu');
    }
    return redirect('/cartdisp');
}
public function checkout($tot){
    return view('checkout',['total'=>$tot]);
}
public function payment(Request $req){
    $validatedData=$req->validate([
        'credit'=>'required',
    ]);
    if($validatedData){
        cart::where('user_id',$req->uid)->delete();
       return redirect('/success'); 
    }
}
public function success(){
    return view('success');
}
public function profile($id){
   $data= detail::where('id',$id)->first();
    return view('edit',compact('data'));
}
public function updated(Request $req){
   $data= detail::where('id',$req->uid)->first();
   $validatedData=$req->validate([
    'email'=>'required',
    'pass'=>'required',
    'ename'=>'required',
    'address'=>'required'
]);
if($validatedData){
   detail::where('id',$data->id)->update([
    'email'=>$req->email,
            'password'=>$req->pass,
            'name'=>$req->ename,
            'address'=>$req->address   
   ]);
   return back()->with('msg',"updated");
}
}
public function logout(){
    session()->pull('user');
    session()->pull('count');
    return redirect('/');
}
}
