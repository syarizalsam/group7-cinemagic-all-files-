@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>My List</title>
    <style type="text/css" media="screen">
        * {box-sizing: border-box;}

    body {
        margin-top: -28px;
    }

      .header {
        overflow: hidden;
        background-color: #f1f1f1;
        padding: 20px 10px;
      }
      .header a {
        float: left;
        color: black;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;
      }
      .header a.logo {
        font-size: 25px;
        font-weight: bold;
      }
      .header a:hover {
        background-color: #ddd;
        color: black;
      }
      .header a.active {
        background-color: dodgerblue;
        color: white;
      }
      .header-right {
        float: right;
      }
      @media screen and (max-width: 500px) {
        .header a {
          float: none;
          display: block;
          text-align: left;
        }
        .header-right {
          float: none;
        }
      }
    </style>
</head>
<body>

    <div class="header">
      <a href="http://localhost:8000/home" class="logo">Cinemagic✨</a>
      <div class="header-right">
        <a href="http://localhost:8000/home">Home</a>
		<a href="http://localhost:8000/movie">Movies</a>
		<a class="active" href="http://localhost:8000/list">My List</a>

        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
                
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
      </div>
    </div>

    <div class="container">

        <div class="page-header">
            <br><h1>My List</h1><br>
        </div>

        @if (count($movies)>0)
            <div class="list-group">
                    @foreach($movies as $movie)
                    <label class="list-group-item">
                    <!-- <input class="form-check-input me-1" type="checkbox" value=""> -->
                    
                    <h2>{{ $movie->title }}</h2>
                    <strong>Directed by: </strong>{{ $movie->director }}<br>
                    <strong>Released on: </strong>{{ $movie->release }}<br>
                    <strong>Category: </strong>{{ $movie->category }}<br>
                    <strong>Summary: </strong>{{ $movie->summary }}<br>
                    <br>
                    <form action="{{url()->action('ListController@flip', ['id'=>$movie])}}" method="POST">
                    @csrf
                    <button class="btn btn-danger" type="submit">Remove from My List</button>
                    </form>
                    </label>
                    @endforeach
            </div>
        @else
            <p>Your "My List" is empty.</p>
        @endif
    </div>
</body>
</html>

@endsection