<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="{{ asset('/css/admin.css') }}" rel="stylesheet">
  <title>@yield('title', 'Admin - Online Store')</title>
</head>

<body>
  <div class="row g-0 vh-100 d-flex flex-col">
    <!-- sidebar -->
    <div class="p-4 col fixed text-dark bg-white border-end">
      <a href="{{ route('admin.home.index') }}" class="text-dark text-decoration-none">
        <span class="fs-4">Admin Panel</span>
      </a>
      <hr />
      <ul class="nav flex-column ">
      <li>
        <a href="{{ route('admin.home.index') }}" class="nav-link text-dark">
          <img src="{{ asset('/img/home.png') }}" alt="Home" style="width: 20px; height: 20px;" class="mr-2">
          Home
        </a>
      </li>
      <li>
        <a href="{{ route('admin.product.index') }}" class="nav-link text-dark">
          <img src="{{ asset('/img/product.png') }}" alt="Product" style="width: 20px; height: 20px;" class="mr-2">
          Product
        </a>
      </li>
        <li>
          <a href="{{ route('home.index') }}" class="mt-2 btn bg-dark text-white">Go back to home page</a>
        </li>
      </ul>
    </div>
    <!-- sidebar -->
    <div class="col content-grey">
      <nav class="p-3 shadow text-end">
        <span class="profile-font">Admin</span>
        <img class="img-profile rounded-circle" src="{{ asset('/img/undraw_profile.svg') }}">
      </nav>

      <div class="g-0 m-5">
        @yield('content')
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
</body>