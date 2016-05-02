<!DOCTYPE html> 
<html lang="zh-EN"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>Learn Laravel 5</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <link href="/css/app.css" rel="stylesheet">

</head>
<body>

  <div class="container" style="margin-top: 20px;">
     @yield('content')
     <div id="footer" style="text-align: center; border-top: dashed 3px #eeeeee;
margin: 50px 0; padding: 20px;"> 
@2015 Linghang Laravel Tutorial
<a href="{{ URL('admin/')}}">Admin Panel</a>
    </div>
  </div>

</body>
</html>