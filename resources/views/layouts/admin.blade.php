<!DOCTYPE html>
<html>
    <head>
        <title>tech'IT easy - @yield('title')</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        {!! Html::style('assets/css/bootstrap.min.css') !!}
        {!! Html::style('assets/css/font-awesome.min.css') !!}
        {!! Html::style('assets/noty-3.1.0/lib/noty.css') !!}
        {!! Html::style('assets/css/app.css') !!}
    </head>
    <body>
        @include('partials.header')

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    @include('partials.sidebar', ['page' => $page])
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    @if($page != 'category')
                        <div class="admin-content">@yield('content')</div>
                    @else
                        @yield('content')
                    @endif
                </div>
            </div>
        </div>
        
        {!! Html::script('assets/js/jquery-2.1.4.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        {!! Html::script('assets/jspkg-archive/jquery.dynatable.js') !!}
        {!! Html::script('assets/noty-3.1.0/lib/noty.js') !!}
        {!! Html::script('assets/js/admin.js') !!}

        <script type="text/javascript">
            @yield('script')
        </script>
    </body>
</html>
