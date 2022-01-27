@extends('master')
@section('content')
    <section class="container">
        <div class="row">
    @foreach($menu as $i)
    <div class="col-4 mb-2 mt-2">
    <div class="card" style="height:400px;width:350px;">
  <img class="card-img-top" src='{{url("uploads/$i->image")}}' height="200px" alt="Card image cap">
  <div class="card-body text-center">
    <p class="card-text">{{$i->name}}</p>
    <p class="card-text">&#8377; {{$i->price}}</p>
  <a href="/addcart/{{$i->id}}" class="btn btn-secondary mx-auto">Add to cart</a>
  </div>
  </div>
  </div>
@endforeach
</div>
    </section>
   @stop