<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Learnify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.php"><img src="../assets/logo.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="resources.php">Resources</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="classes.php">Classes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="search.php">Search</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="courses.php">Courses</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main class="bg-light">
      <section class="container py-5">
        <h1>Dashboard</h1>
        <p>Manage your learning activities and track your progress from the dashboard.</p>
            <div class="row">
                <?php
                // Menghubungkan ke database
                include('../db/connection.php');

                // Ambil data dashboard dari database
                $userId = 1; // Ganti dengan ID pengguna yang sedang login
                $sql = "SELECT content, created_at FROM dashboard WHERE user_id = $userId ORDER BY created_at DESC";
                $result = $conn->query($sql);

                // Tampilkan data dashboard
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text">' . $row["content"] . '</p>
                                    <p class="text-muted">' . $row["created_at"] . '</p>
                                </div>
                            </div>
                        </div>';
                    }
                } else {
                    echo "No dashboard content available.";
                }

                $conn->close();
                ?>
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