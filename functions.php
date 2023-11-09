<?php require($_SERVER['DOCUMENT_ROOT'].'/db.php');
session_start();
// this connects to the dd.php file that hold the connection.



function nav() {
  echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
          <a class="navbar-brand" href="#">Start Bootstrap</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item"><a class="nav-link active" aria-current="page" href="/home.php">Home</a></li>
                  <li class="nav-item"><a class="nav-link active" aria-current="page" href="/courses.php">Courses</a></li>
                  <li class="nav-item"><a class="nav-link active" aria-current="page" href="/logout.php">logout</a></li>
                  <li class="nav-item"><a class="nav-link active" aria-current="page" href="/login.php">Login</a></li>
                  <li class="nav-item"><a class="nav-link active" aria-current="page" href="/stats.php">stats</a></li>
                  <li class="nav-item"><a class="nav-link active" aria-current="page" href="/friends/friendsList.php">Friends</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="#">Link</a></li> -->
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider" /></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>
  </nav>';
}
?>




