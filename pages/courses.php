<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Courses - Learnify</title>
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
                <a class="nav-link" href="dashboard.php">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="classes.php">Classes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="search.php">Search</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Courses</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main class="bg-light">
      <section class="container py-5">
        <h1>Courses</h1>
        <p>Enroll in various courses to develop your skills and knowledge.</p>
        <div class="row">
          <?php
          // Menghubungkan ke database
          include('../db/connection.php');

          // Ambil data kursus dari database
          $sql = "SELECT course_name, course_description FROM courses";
          $result = $conn->query($sql);

          // Tampilkan data kursus
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  echo '
                  <div class="col-md-4 mb-4">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">' . $row["course_name"] . '</h5>
                              <p class="card-text">' . $row["course_description"] . '</p>
                              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#educationLevelModal" onclick="setCourse(\'' . $row["course_name"] . '\')">Enroll</button>
                          </div>
                      </div>
                  </div>';
              }
          } else {
              echo "No courses available.";
          }

          $conn->close();
          ?>
        </div>
      </section>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="educationLevelModal" tabindex="-1" aria-labelledby="educationLevelModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="educationLevelModalLabel">Select Education Level</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>You are enrolling in: <strong id="courseName"></strong></p>
            <div class="d-grid gap-2">
              <button class="btn btn-secondary" onclick="selectEducationLevel('elementary')">Elementary</button>
              <button class="btn btn-secondary" onclick="selectEducationLevel('middle')">Middle School</button>
              <button class="btn btn-secondary" onclick="selectEducationLevel('high')">High School</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="bg-light text-center py-4">
      <div class="container">
        <p class="mb-0">&copy; Learnify. All rights reserved.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
      function setCourse(courseName) {
        document.getElementById('courseName').innerText = courseName;
      }

      function selectEducationLevel(level) {
        const courseName = document.getElementById('courseName').innerText.toLowerCase().replace(/\s+/g, '');
        let levelPath;

        switch(level) {
          case 'elementary':
            levelPath = 'elementary';
            break;
          case 'middle':
            levelPath = 'mid';
            break;
          case 'high':
            levelPath = 'high';
            break;
          default:
            levelPath = '';
        }

        const targetUrl = `Courses/${courseName}/${levelPath}.php`;
        window.location.href = targetUrl;
      }
    </script>
</body>
</html>