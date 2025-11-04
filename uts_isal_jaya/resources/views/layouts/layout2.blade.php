<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>....</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- impoort font dari google --}}
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Teko:wght@400;600&display=swap"
        rel="stylesheet">


    <style>
        /* Font untuk judul
        h1,
        h2,
        .title,
        .hero-text h1 {
            font-family: 'Black Ops One', sans-serif;
            letter-spacing: 2px;
        } */

        /* Font untuk teks & tombol */
        body,
        p,
        button,
        .nav-link,
        .btn {
            font-family: 'Teko', sans-serif;
            font-size: 20px;
            letter-spacing: 0px;
        }

        .custom-nav {
            justify-content: flex-start !important;
            /* Navbar ke kiri */
            margin-left: 10px;
            /* Margin kecil */
        }

        .navbar-nav {
            gap: 10px;
            /* Jarak antar menu biar rapi */
        }

        /* @font-face {
            font-family: 'CSFont';
            src: url('/fonts/cs_regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        button {
            font-family: 'CSFont', Arial, sans-serif !important;
        } */

        body {

            background-color: #ffffff;
            color: #000000;
            font-family: Arial,
                sans-serif;
        }



        .learn-more-box img {
            width: 120px;
        }
    </style>

    @yield('style')
</head>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid custom-nav">
    <a class="navbar-brand" href="{{ url('/home') }}">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">ABOUT</a></li>
        <li class="nav-item"><a class="nav-link" href="#">2301010084_RAHARDI...</a></li>
        <li class="nav-item"><a class="nav-link" href="#">2301010082_I KETUT...</a></li>
      </ul>
    </div>
  </div>
</nav>

<body>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('script')
</body>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">© 2025 Company, Inc</p>
    <a href="/"
        class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"
        aria-label="Bootstrap">
        <svg class="bi me-2" width="40" height="32" aria-hidden="true">
            <use xlink:href="#bootstrap"></use>
        </svg>
    </a>
    <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">2301010084_RAHARDI...</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FEAT</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">301010082_I KETUT...</a></li>
    </ul>
</footer>

</html>
