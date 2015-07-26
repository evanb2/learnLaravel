<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Master Page</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    @yield('footer')
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <a href="/articles"><button class="btn btn-primary form-control">Home</button></a>
    </div>
    <div class="col-md-4"></div>
</body>
</html>
