<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/heroic-features.css')}}" rel=" stylesheet">
    <link href="{{asset('css/frontend.css')}}" rel=" stylesheet">


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-color fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Book Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Category
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            {{-- @php
                                var_dump($categories);
                            @endphp --}}
                            @foreach ($categories as $category)
                            <a class="dropdown-item" href="{{route('front.category', ['id' =>$category->id])}}">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{$category->name}}
                            </a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        {{-- <header class="jumbotron my-4">
            <h1 class="display-3">A Warm Welcome!</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt
                possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam
                repellat.</p>
            <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
        </header> --}}

        <!-- Page Features -->
        @yield('content')

        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-color">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
