<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin</title>
    <!-- <link rel="stylesheet" href="/style.css" /> -->
    {{-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    /> --}}

    <link rel="stylesheet" href="/bootstrap-5.3.0-dist/css/bootstrap.css">


    <style>
      .navbar {
        background-color: midnightblue;
      }
      .carousel-inner {
        height: 0;
        padding-bottom: 25%; /* this sets carousel aspect ratio (4:1 here) */
      }

      .carousel-item {
        position: absolute !important; /* Bootstrap is insistent */
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
      }

      .carousel-item img {
        height: 100%; /* Bootstrap handles width already */
        object-fit: cover; /* or 'contain' if you want stretch instead of crop */
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark text-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img src="/images/acme.png" alt="acme" width="50" height="30" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>

            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <form action="/" class="mx-auto d-flex" role="search">
            <input
              name="search"
              class="form-control me-2"
              type="search"
              placeholder="Enter index number"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
          <ul>
            <li class="nav-item d-flex me-2 mt-2">
              <a href="#" class="nav-link">Login</a>
              <a href="/posts/create" class="nav-link">Add Student</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<main>
    {{ $slot }}
</main>

<!-- Footer  -->
<footer class="bg-dark text-light py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>Footer Heading</h5>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
            interdum, risus sed ultrices ullamcorper, eros mauris dapibus
            mauris.
          </p>
        </div>
        <div class="col-md-6 text-center">
          <h5>Contact Info</h5>
          <ul class="list-unstyled">
            <li>Address: Plt 82, Kutre Seikwa Street, Berekum</li>
            <li>Phone: +233 (050) 719-0086</li>
            <li>Email: brightamankwatia@gmail.com</li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>School Info</h5>
          <ul class="list-unstyled">
            <li>Address: Plt 82, Kutre Seikwa Street, Berekum</li>
            <li>Phone: +233 (050) 719-0086</li>
            <li>Email: brightamankwatia@gmail.com</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap js script -->
  {{-- <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"
  ></script>

  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"
  ></script> --}}

  <script src="/bootstrap-5.3.0-dist/js/bootstrap.js"></script>
</body>
</html>
