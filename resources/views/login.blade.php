<!DOCTYPE html>
<html>
    <head>
        @include('head')
    </head>
    <body>
      <div class="jumbotron">
        <h1 class="text-center">LOGIN</h1>
      </div>
        <div class="container">
            @if(Session::has('msg'))
            <div class="alert alert-success">{{Session::get('msg')}}</div>
            @endif
       <form method="post" action="home">
           @csrf()
           <div class="row">
           <div class="form-group col-5 m-auto">
         Email <input type="email" class="form-control" name="email">
         @if($errors->has('email'))
         <label class="text-danger">{{$errors->first('email')}}</label>
         @endif
         </div>
         </div>
         <div class="row">
           <div class="form-group col-5 m-auto">
         Password <input type="text" class="form-control" name="pass">
         @if($errors->has('pass'))
         <label class="text-danger">{{$errors->first('pass')}}</label>
         @endif
           </div>
         </div>
         <div class="text-center">
         <input type="submit" class="btn btn-success mt-3" name="sub" value="Login"/>
         <a href="/register" class="btn btn-secondary mt-3">Register</a>
         </div>
       </form>
        </div>
        
        @include('foot')
    </body>
</html>