@extends('master')
@section('content')
    <section class="container">
        <h1 class="text-center">Profile</h1>
            @if(Session::has('msg'))
            <div class="alert alert-success">{{Session::get('msg')}}</div>
            @endif
       <form method="post" action="/update">
           @csrf()
           <div class="row">
           <div class="form-group col-5 m-auto">
         Email <input type="email" class="form-control" name="email" value="{{$data->email}}">
         @if($errors->has('email'))
         <label class="text-danger">{{$errors->first('email')}}</label>
         @endif
         </div>
         </div>
         <div class="row">
           <div class="form-group col-5 m-auto">
         Password <input type="text" class="form-control" name="pass" value="{{$data->password}}">
         @if($errors->has('pass'))
         <label class="text-danger">{{$errors->first('pass')}}</label>
         @endif
           </div>
         </div>
         <div class="row">
           <div class="form-group col-5 m-auto">
         Name <input type="text" class="form-control" name="ename" value="{{$data->name}}">
         @if($errors->has('ename'))
         <label class="text-danger">{{$errors->first('ename')}}</label>
         @endif
         </div>
         </div>
         <div class="form-group col-5 m-auto">
        Address <textarea class="form-control" name="address">{{$data->address}}</textarea>
        @if($errors->has('address'))
         <label class="text-danger">{{$errors->first('address')}}</label>
         @endif
         </div>
         <div class="text-center">
             <input type="hidden" value="{{$data->id}}" name="uid">
         <input type="submit" class="btn btn-success mt-3" name="sub" value="update"/>
         <a href="/menu" class="btn btn-secondary mt-3">Back</a>
         </div>
       </form>
    </section>
   @stop