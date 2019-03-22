<html lang="en">
<head>
    @include('includes.head')
</head>

<body>
    <div class="ml-0 mr-0">

    <header class="row">
        @include('includes.header')
    </header>

    <div class="container" id="main" class="row">

        @yield('content')

    </div>

    </div>
    <footer>
        @include('includes.footer')
    </footer>
</body>

</html>
