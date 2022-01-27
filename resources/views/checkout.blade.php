
@extends('master')
@section('content')
        <div class="container">
            @if(Session::has('msg'))
            <div class="alert alert-warning">{{Session::get('msg')}}</div>
            @endif
       <form method="post" action="/payment">
           @csrf()
           <h1>Checkout</h1>
           <div class="form-group">
            Credit card   <input type="text" class="form-control col-6" name="credit">
            @if($errors->has('credit'))
            <label class="text-danger">{{$errors->first('credit')}}</label>
            @endif
           </div>
           <h4>Order Total: &#8377;{{$total}}</h4>
           <input type="hidden" name="uid" value="{{session('user')->id}}"/>
           <input type="submit" class="btn btn-success" value="checkout">
       </form>
        </div>
 @stop