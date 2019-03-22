<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="ml-0 mr-0">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

        <!-- sidebar content -->
        <div id="sidebar" class="col-md-2">
            @include('includes.sidebar')
        </div>

        <!-- main content -->
        <div id="content" class="col-md-10">
            @yield('content')
        </div>

    </div>

    <footer class="">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
