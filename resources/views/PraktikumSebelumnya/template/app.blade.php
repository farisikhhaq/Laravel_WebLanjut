<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--

Template 2092 Shelf

http://www.tooplate.com/view/2092-shelf

-->
    <title>SHELF - Your Online Bookstore</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{asset('assets/font-awesome-4.7.0/css/font-awesome.min.css')}}">                <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="{{asset('assets/css/tooplate-style.css')}}">         
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>
    <body>
        <header class="tm-site-header">
            <h1 class="tm-site-name">Shelf</h1>
            <p class="tm-site-description">Your Online Bookstore</p>
            
            <nav class="navbar navbar-expand-md tm-main-nav-container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tmMainNav" aria-controls="tmMainNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                </button>
        
                <div class="collapse navbar-collapse tm-main-nav" id="tmMainNav">
                    <ul class="nav nav-fill tm-main-nav-ul">
                        <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/preview">Catalogs</a></li>
                        <li class="nav-item"><a class="nav-link" href="/team">Our Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="/user">User</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
        <script src="{{ asset('js/app.js')}}"></script>
    </body>
    </html>