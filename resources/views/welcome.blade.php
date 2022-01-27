<!DOCTYPE html>
<html>
    <head>
        @include('head')
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <img src="{{url('uploads/pizza.jpg')}}" height="100px" width="100px" class="rounded-circle"/>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <h1 class="text-white text-center">Pizza Time....</h1>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link text-white ml-5" href="/login">Login</a>
</li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/register">Signup</a>
</li>
    </ul>
  </div>
</nav>
<div class="container jumbotron  mt-2">
    <div class=" text-center">
        <h1>Pizza Delivery!!</h1>
        <p>Welcome to pizza delivery service. This is the place to choose the most delicious pizza</p>
        <h6>A slice a day...keeps the sad away</h6>
        <div class="alert alert-dark">Signin And order!!</div>
    </div>
</div>
  @include('foot')
    </body>
</html>