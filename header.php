<?php
$pageTitle = $pageTitle ?? "Group 3 Project";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo $pageTitle; ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

  <link rel="stylesheet" href="/css/sty-le.css" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
          <img src="/img/BB-BOX.png" alt="BBBOX" class="nav-logo"/>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-lg-center">
            <li class="nav-item">
              <a class="nav-link active fs-6 fs-lg-5" href="home.php">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link fs-6 fs-lg-5" href="latestnews.php">Latest News</a>
            </li>

            <li class="nav-item">
              <a class="nav-link fs-6 fs-lg-5" href="musicitems1.php">Music</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle fs-6 fs-lg-5" href="#" data-bs-toggle="dropdown">
                About
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="about.php">About BBBOX</a>
                </li>
                <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
                <li>
                  <a class="dropdown-item" href="coming-soon.php">Terms of Service</a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link fs-6 fs-lg-5" href="contactus.php">Contact Us</a>
            </li>
          </ul>

          <div class="d-flex align-items-center gap-3">
            <form class="d-flex mb-0" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>

            <a href="login.php">
              <button type="button" class="btn btn-dark">Login</button>
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>