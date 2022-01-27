<!DOCTYPE html>
<html>
    <head>
        @include('head')
    </head>
    <body class="text-center">
        <div class="container mt-5">
            <h3>Order has been placed successfully!</h3>
          <div class="alert alert-success">You will recieve notification by email with orders</div>
        <a href="/menu" class="btn btn-secondary">Go and order some more</a>
        <a href="/logout" class="btn btn-warning">Logout</a>
        </div>
        @include('foot')
    </body>
</html>