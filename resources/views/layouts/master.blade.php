<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Cinemagic</title>
</head>
<body>
    
    <div class="container">
    <h3>Cinemagic✨</h3>
		<nav>
		  <a href="http://localhost:8000/home">Home</a> |
		  <a href="http://localhost:8000/movie">Movies</a> |
		  <a href="http://localhost:8000/list">My List</a>
		</nav>
    </div>

    <main class="py-4">
        @yield('content')
    </main>

</body>
</html>