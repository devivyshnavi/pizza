@extends('master')
<style>
.brder{
border:2px solid lavenderblush;
padding: 10px;
width:600px;
}
.bdy{
  padding-left: 20%;
  margin:5px;
}
   </style>
@section('content')
<div class="bdy">
@if(Session::has('msg'))
            <div class="alert alert-success">{{Session::get('msg')}}</div>
            @endif
   <h3>Shopping cart</h3>
   @php
   $total=0;
   $count=0;
   @endphp
@foreach($cartdisp as $i)
<div class="d-flex flex-row justify-content-around m-4 brder">
<img src='{{url("uploads/$i->image")}}' height="50px" width="50px" class="rounded-circle"/>
<h5 class="m-2">{{$i->name}}</h5>
<h5 class="m-2">&#8377; {{$i->price}}</h5>
<h5 class="m-2">{{$i->quantity}}</h5>
@php
$j=$i->price * $i->quantity ;
$total=$total+$j;
$count=$count+1;
session()->put('count',$count);
@endphp
<h5 class="m-2">= &#8377;{{$j}}</h5>
<a href="/delcart/{{$i->id}}" class="btn btn-secondary">Delete</a>
</div>
@endforeach
<div class="d-flex flex-row justify-content-center">
<h3 class="text-center">Total: &#8377;{{$total}}</h3> &nbsp;&nbsp;
<a href="/checkout/{{$total}}" class="btn btn-primary">checkout>></a>
</div>
</div>
   @stop
 