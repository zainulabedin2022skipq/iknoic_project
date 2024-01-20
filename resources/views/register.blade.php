<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Register</title>
</head>
<body>
<div class="container">
    <h1 class="text-center m-3">User and Admin Register </h1>
    <div class="mt-5"> @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif</div>
    <div class="row m-3 border border-2  ">
        <div class="col-sm-6 mt-2"><img class="w-100" src="assets/images/register.jpg" alt=""></div>
        <div class="col-sm-6 mt-2">
            <form action="/store_register" method="POST">
            @csrf
            <input type="text" class="form-control mt-2" name="name" placeholder="Enter the Name" id="">
            <input type="text" class="form-control mt-2" name="email" placeholder="Enter the Email" id="">
            <input type="password" class="form-control mt-2" name="password" placeholder="Enter the Password" id="">
            <button type="submit" class="btn btn-danger mt-2">Register</button>
            </form>
            <a href="/" class=" text-decoration-none ">If have already account</a>
        </div>
    </div>
</div>
</body>
</html>
