@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cinemagic</title>
    <!-- Bootstrap 3 -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <style type="text/css" media="screen">
        * {box-sizing: border-box;}
    
        body {
            /* padding-top: 80px; */
            margin-top: -20px;
            bgcolor: blue;
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

        #trailer .modal-dialog {
            margin-top: 200px;
            width: 640px;
            height: 480px;
        }
        .hanging-close {
            position: absolute;
            top: -12px;
            right: -12px;
            z-index: 9001;
        }
        #trailer-video {
            width: 100%;
            height: 100%;
        }
        .movie-tile {
            margin-bottom: 20px;
            padding-top: 20px;
        }
        .movie-tile:hover {
            background-color: #3E8383;
            cursor: pointer;
            text: white;
        }
        .scale-media {
            padding-bottom: 56.25%;
            position: relative;
        }
        .scale-media iframe {
            border: none;
            height: 100%;
            position: absolute;
            width: 100%;
            left: 0;
            top: 0;
            background-color: black;
        }
    </style>
    <script type="text/javascript" charset="utf-8">
        // Pause the video when the modal is closed
        $(document).on('click', '.hanging-close, .modal-backdrop, .modal', function (event) {
            // Remove the src so the player itself gets removed, as this is the only
            // reliable way to ensure the video stops playing in IE
            $("#trailer-video-container").empty();
        });
        // Start playing the video whenever the trailer modal is opened
        $(document).on('click', '.movie-tile', function (event) {
            var trailerYouTubeId = $(this).attr('data-trailer-youtube-id')
            var sourceUrl = 'http://www.youtube.com/embed/' + trailerYouTubeId + '?autoplay=1&html5=1';
            $("#trailer-video-container").empty().append($("<iframe></iframe>", {
              'id': 'trailer-video',
              'type': 'text-html',
              'src': sourceUrl,
              'frameborder': 0
            }));
        });
        // Animate in the movies when the page loads
        $(document).ready(function () {
          $('.movie-tile').hide().first().show("fast", function showNext() {
            $(this).next("div").show("fast", showNext);
          });
        });
    </script>
</head>

  <body>
    <!-- Trailer Video Modal -->
    <div class="modal" id="trailer">
      <div class="modal-dialog">
        <div class="modal-content">
          <a href="#" class="hanging-close" data-dismiss="modal" aria-hidden="true">
            <img src="https://lh5.ggpht.com/v4-628SilF0HtHuHdu5EzxD7WRqOrrTIDi_MhEG6_qkNtUK5Wg7KPkofp_VJoF7RS2LhxwEFCO1ICHZlc-o_=s0#w=24&h=24"/>
          </a>
          <div class="scale-media" id="trailer-video-container">
          </div>
        </div>
      </div>
    </div>
    <!-- Main Page Content -->
    <!-- <div class="container">
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" >Cinemagic</a>
          </div>
        </div>
      </div>
    </div> -->
    
    <div class="header">
      <a href="http://localhost:8000/home" class="logo">Cinemagic✨</a>
      <div class="header-right">
        <a class="active" href="http://localhost:8000/home">Home</a>
		    <a href="http://localhost:8000/movie">Movies</a>
		    <a href="http://localhost:8000/list">My List</a>

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
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" 
                    aria-haspopup="true" aria-expanded="false" v-pre>
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

<div class="col-md-6 col-lg-4 movie-tile text-center" data-trailer-youtube-id="2f516ZLyC6U" data-toggle="modal" data-target="#trailer">
    <img src="http://2.bp.blogspot.com/_Fxf2MsuHlys/TN3-D74fjrI/AAAAAAAAAGM/Z6jvEguO4fc/s1600/Tangled+Boat+Poster.jpg" width="220" height="342">
    <h2>Tangled</h2>
    <h5><b>Directors: </b> Nathan Greno, Byron Howard </h5>
    <h5><b>Category: </b> Animation, Adventure, Comedy </h5>
</div>

<div class="col-md-6 col-lg-4 movie-tile text-center" data-trailer-youtube-id="K0eDlFX9GMc" data-toggle="modal" data-target="#trailer">
    <img src="https://tse4.mm.bing.net/th?id=OIP.BPwNp2xh26OFMXtvWC9LhQHaJ9&pid=Api" width="220" height="342">
    <h2>3 Idiots</h2>
    <h5><b>Director: </b> Vidhu Vinod Chopra </h5>
    <h5><b>Category: </b> Comedy, Drama </h5>
</div>

<div class="col-md-6 col-lg-4 movie-tile text-center" data-trailer-youtube-id="P9mwtI82k6E" data-toggle="modal" data-target="#trailer">
    <img src="https://mylifeoutsidethebubble.files.wordpress.com/2015/01/the-shawshank-redemption-movie-poster-1994-1020260139.jpg" width="220" height="342">
    <h2>The Shawshank Redemption</h2>
    <h5><b>Director: </b> Frank Darabont </h5>
    <h5><b>Category: </b> Drama </h5>
</div>

<div class="col-md-6 col-lg-4 movie-tile text-center" data-trailer-youtube-id="xjDjIWPwcPU" data-toggle="modal" data-target="#trailer">
    <img src="https://image.tmdb.org/t/p/original/fj7sX7w0MfIxWylcizp5ArPIMFs.jpg" width="220" height="342">
    <h2>Black Panther</h2>
    <h5><b>Director: </b> Ryan Coogler </h5>
    <h5><b>Category: </b> Action </h5>
</div>

<div class="col-md-6 col-lg-4 movie-tile text-center" data-trailer-youtube-id="V6wWKNij_1M" data-toggle="modal" data-target="#trailer">
    <img src="https://i1.wp.com/bloody-disgusting.com/wp-content/uploads/2018/05/hereditary-poster.jpg" width="220" height="342">
    <h2>Hereditary</h2>
    <h5><b>Director: </b> Ari Aster </h5>
    <h5><b>Category: </b> Drama, Horror, Mystery </h5>
</div>

<div class="col-md-6 col-lg-4 movie-tile text-center" data-trailer-youtube-id="92a7Hj0ijLs" data-toggle="modal" data-target="#trailer">
    <img src="https://fanart.tv/fanart/movies/8392/movieposter/my-neighbor-totoro-530cce3a1875c.jpg" width="220" height="342">
    <h2>My Neighbor Totoro</h2>
    <h5><b>Director: </b> Hayao Miyazaki </h5>
    <h5><b>Category: </b> Animation, Family, Fantasy </h5>
</div>

    </div>
  </body>
</html>

@endsection
