<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <h1 class="text-red-500">Halooo</h1>

  <div class="d-grid mt-3">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <p class="text-blue-500">halo</p>
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
</body>
</html>
