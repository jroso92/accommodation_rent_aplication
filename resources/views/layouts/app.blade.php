<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Accommodation Rent App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('home') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('accommodation_types.index') }}">Accommodation_types</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('accommodations.index') }}">Accommodations</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('activities.index') }}">Activities</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('bookings.index') }}">Bookings</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('cities.index') }}">Cities</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('contents.index') }}">Contents</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('counties.index') }}">Counties</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('reviews.index') }}">Reviews</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        </ul>
        </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>