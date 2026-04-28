<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <div>class ="container-fluid">
            @@yield('navbar')
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-md-3 col lg-2 bg-light border-end min-vh-100 p-3">
                @section('sidebar')
                    @include('app.sidebar')
                @show
            </aside>
            
            <main class="col-md-9 col-lg-10 p-4">
                @yield('content')
            </main>
            
        </div>
    </div>
</body>
</html>