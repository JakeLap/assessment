<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Assessment</title>
</head>
<body>

    <header>
        <div class="container m-auto">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 p-0 mb-4">
                    
                    <ul class="nav ">
                        <li class="nav-item">
                          <a class="nav-link"  href="{{route('client.index')}}">Clients</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{route('payment.index')}}">Payments</a>
                        </li>
                    </ul>

                    @php
                        $crumbs = explode('.',Route::currentRouteName());
                    @endphp

                </div>
            </div>
        </div>
        

    </header>

    <main>
        <div class="container m-auto">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 py-4">
                    
                    @yield('content')

                </div>
            </div>
        </div>
    </main>
    

</body>
</html>