<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learnify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="assets/logo.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/resources.php">Resources</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/dashboard.php">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/classes.php">Classes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/search.php">Search</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/courses.php">Courses</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main class="bg-light">
      <section class="hero-section">
        <div class="container">
          <h1>Welcome to Learnify</h1>
          <p>Your journey to better education starts here.</p>
          <a href="pages/courses.php" class="btn btn-primary">Get Started</a>
        </div>
      </section>

      <section class="features-section bg-light">
          <div class="container">
              <div class="row text-center">
                  <div class="col-md-4 mb-4">
                      <div class="card feature-card">
                          <a href="pages/resources.php" class="card-body text-decoration-none text-dark">
                              <h5 class="card-title">Resources</h5>
                              <p class="card-text">Access a variety of educational resources.</p>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-4 mb-4">
                      <div class="card feature-card">
                          <a href="pages/classes.php" class="card-body text-decoration-none text-dark">
                              <h5 class="card-title">Classes</h5>
                              <p class="card-text">Join interactive and collaborative classes.</p>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-4 mb-4">
                      <div class="card feature-card">
                          <a href="pages/courses.php" class="card-body text-decoration-none text-dark">
                              <h5 class="card-title">Courses</h5>
                              <p class="card-text">Enroll in various courses to develop skills.</p>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </section>

    </main>

    <footer class="bg-light text-center py-4">
      <div class="container">
        <p class="mb-0">&copy; Learnify. All rights reserved.</p>
      </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>