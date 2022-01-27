<!DOCTYPE html>
<html>
    <head>
        @include('head')
    </head>
    <body>
        <div class="container">
        <h1 class="text-center">Register</h1>
            @if(Session::has('msg'))
            <div class="alert alert-success">{{Session::get('msg')}}</div>
            @endif
       <form method="post" action="save">
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
         <div class="row">
           <div class="form-group col-5 m-auto">
         Name <input type="text" class="form-control" name="ename">
         @if($errors->has('ename'))
         <label class="text-danger">{{$errors->first('ename')}}</label>
         @endif
         </div>
         </div>
         <div class="form-group col-5 m-auto">
        Address <textarea class="form-control" name="address"></textarea>
        @if($errors->has('address'))
         <label class="text-danger">{{$errors->first('address')}}</label>
         @endif
         </div>
         <div class="text-center">
         <input type="submit" class="btn btn-success mt-3" name="sub" value="submit"/>
         <a href="login" class="btn btn-secondary mt-3">Login</a>
         </div>
       </form>
        </div>
        @include('foot')
    </body>
</html>