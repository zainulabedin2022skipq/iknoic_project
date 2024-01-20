<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Login</title>
</head>
<body>
<div class="container">
    <h1 class="text-center m-3">User and Admin Login </h1>
    <div class="mt-5"> @if(session()->has('message'))
        <div class="alert alert-danger">
            {{ session()->get('message') }}
        </div>
        @endif</div>


    <div class="row m-3 border border-2  ">

        <div class="col-sm-6 border border-2"><img class="100" src="assets/images/12.jpeg" alt=""></div>
        <div class="col-sm-6 mt-2">
            <form action="/store_login" method="POST">
            @csrf
            <input type="text" class="form-control mt-2" name="email" placeholder="Enter the Email" id="">
            <input type="password" class="form-control mt-2" name="password" placeholder="Enter the Password" id="">
            <button type="submit" class="btn btn-danger mt-2">Login</button>
            </form>
            <a href="/register" class=" text-decoration-none ">If have not account</a>
        </div>
    </div>
</div>
</body>
</html>
