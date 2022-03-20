<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">

</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <button class="navbar-toggler" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mx-auto">
                <li class="navbar-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="navbar-item"><a href="{{url('full-name')}}" class="nav-link">Full Name</a></li>
                <li class="navbar-item"><a href="{{route('cal')}}" class="nav-link">Calculator</a></li>
            </ul>
        </div>
    </div>
</nav>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div>

            </div>
        </div>
    </div>
</section>

<form action="">
    <div class="form-group row">
        <label for="" class="col-md-4 col-form-label">first name</label>
        <div class="col-md-8">
            <input type="text" class="btn btn-success btn-block" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-4 col-form-label">last name</label>
        <div class="col-md-8">
            <input type="text" class="btn btn-success btn-block" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-4 col-form-label">first name</label>
        <div class="col-md-8">
            <input type="text" class="btn btn-success btn-block" value="">
        </div>
    </div>
</form>


<script src="{{asset('/')}}assets/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}assets/js/bootstrap.bundle.js"></script>
</body>
</html>
