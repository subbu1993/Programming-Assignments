<html>
    <head>
        <title>App Name - @yield('title')</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="/">Homestead</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="/stories">Stories</a></li>
            <li><a href="/locations">Locations</a></li>
          </ul>
        </div>
      </nav>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>

        <div class="panel-footer">
          This page was created by Subramaniam Swamynathan. All rights reserved
        </div>
    </body>
</html>
