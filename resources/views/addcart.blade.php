
@extends('master')
@section('content')
        <div class="container">
            @if(Session::has('msg'))
            <div class="alert alert-success">{{Session::get('msg')}}</div>
            @endif
       <form method="post" action="/intocart">
           @csrf()
           <div class="m-auto text-center">
            <img src='{{url("uploads/$menu->image")}}' height="200" width="200"/>
           </div>
           <div class="row">
           <div class="form-group col-5 m-auto">
         Name <input type="text" class="form-control" name="name" value="{{$menu->name}}">
         </div>
         </div>
         <div class="row">
           <div class="form-group col-5 m-auto">
         Price <input type="text" class="form-control" name="price" value="{{$menu->price}}">
           </div>
         </div>
         <div class="row">
           <div class="form-group col-5 m-auto">
         Quantity <input type="text" class="form-control" name="quantity">
         @if($errors->has('quantity'))
         <label class="text-danger">{{$errors->first('quantity')}}</label>
         @endif
           </div>
         </div>
         <input type="hidden" value="{{$menu->image}}" name="image"/>
         <input type="hidden" value="{{$menu->id}}" name="mid"/>
         <div class="text-center">
         <input type="submit" class="btn btn-success mt-3" name="sub" value="Add"/>
         <a href="/menu" class="btn btn-secondary mt-3">Back</a>
         </div>
       </form>
        </div>
 @stop