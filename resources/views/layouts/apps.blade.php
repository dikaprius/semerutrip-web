<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{!! asset('/css/style.css') !!}">
        <title>Semeru-Trip</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{!! asset('/css/lightbox.css') !!}">
        <script type="text/javascript" src="{!! asset('/js/lightbox-plus-jquery.js') !!}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">


    </head>
    <body>
      <div class="background">

        <nav class="navbar navbar-expand-sm navbar-light" style="padding-top:50px" data-toggle="affix">
          <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
              <a class="navbar-brand" href="#Home">Home</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse text-center" id="navbars">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link" href="#Trip">Trip</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#Destination">Spot</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('/gallery') }}">Gallery</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">About</a>
                      </li>
                  </ul>
              </div>
          </div>
        </nav>

        <div>
          @yield('content')
        </div>

</div>

      <div class="">
        @yield('subcontent')
      </div>

    </body>
</html>
