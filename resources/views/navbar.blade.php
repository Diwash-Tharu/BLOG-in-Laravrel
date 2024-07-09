<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Food Blog</title>
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">
  <a  href="{{route('home')}}" class="navbar-brand">Food Blog</a>
  <form class="form-inline" method="post" action="{{route('product.search')}}">
    @csrf
    <input class="form-control mr-sm-2" type="text" name ="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  <a class="navbar-brand">Log out</a>
</nav>
</body>
</html>
