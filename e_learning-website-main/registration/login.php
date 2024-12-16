<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $email = strtolower($_POST['email']);
  $password = $_POST['password'];

  $conn = mysqli_connect("localhost", "root", "", "e_learning");
  if (!$conn)
    echo mysqli_connect_error();

  $sql = "SELECT s_email, s_password, s_name FROM student WHERE s_email = '$email' AND s_password = '$password'";
  $login = mysqli_query($conn, $sql);

  if (mysqli_num_rows($login) == 0) {                             //counts the number of rows
    $error_message = "Invalid email or password.";            //if number of rows returned is 0, creates an error message
  } else {
    $_SESSION['is_logged_in'] = true;                         //if query matches data, moves to home page and changes
    $row = mysqli_fetch_assoc($login);                        //fetches database query data
    $_SESSION['username'] = $row['s_name'];                   //extracts s_name to be used in welcome string
    header('location: ../home/home.php');                          //log in and sign up buttons to a log out button and a welcome string
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../home/styles.css">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
      <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center logo" href="#">
          <img src="../home/images/logo1.png" alt="Logo" width="50" height="50" class="me-2">
          <span>E-Learning</span>
        </a>

        <!-- Toggler for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto me-4">
            <li class="nav-item"><a class="nav-link text-light" href="../home/home.php">Home</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="../home/home.php#courses">Courses</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="#">Team</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="#">My Learning</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="#">About Us</a></li>
          </ul>

          <!-- Search bar -->
          <form class="d-flex me-4">
            <input class="form-control me-2" type="search" placeholder="Search courses..." aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>

          <!-- Cart -->
          <a href="../cart/cart.html" class="me-3 cart">
            <img src="../home/images/cart_icon.png" alt="Cart" width="30" height="30">
          </a>

          <!-- Login and Signup buttons -->
          <a href="#" class="btn btn-light me-4">Login</a>
          <a href="signup.php" class="btn btn-warning">Sign Up</a>
        </div>
      </div>
    </nav>
  </header>
  <div class="register" style="display: flex;">
    <div>
      <img src="images/login.jpg" alt="" style="margin-right: 80px;">
    </div>
    <form action="" method="post" style="margin-right: 80px;">
      <h1>
        Log in your account
      </h1>
      <div>
        <input id="email" type="email" name="email" placeholder="Email" required>
      </div>
      <div>
        <input id="password" type="password" name="password" placeholder="Password" required>
      </div>
      <button type="submit">Log in</button>
      <br>
      <h6 style="padding-top:10px;text-align: center;">Forget password?
        <button type="button" class="btn btn-link p-0 reset-pass" style="text-decoration: underline; font-size: inherit; margin-left: 0;" data-toggle="modal" data-target="#forgetModal">
          Reset Password
        </button>
      </h6>
      <div class="divider">or login with</div>

      <h6 style="text-align: center;">
        Don't have an account? <a href="signup.php">Sign up</a> </h6>
    </form>
  </div>

  <!-- forget Modal -->
  <div class="modal fade" id="forgetModal" tabindex="-1" role="dialog" aria-labelledby="forgetModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="justify-content: space-between;">
          <h5 class="modal-title" id="forgetModalLabel">Reset Password</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"
            style="background: none; border: none; padding: 0; margin: 0; font-size: 1.5rem; line-height: 1;">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="mb-3">
            <label for="email" class="form-label" style="font-size: 22px;">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label" style="font-size: 22px;">New Password</label>
            <input type="text" class="form-control" id="password" placeholder="new password">
          </div>

          <div class="mb-3">
            <label for="cnf_password" class="form-label" style="font-size: 22px;">Confirm Password</label>
            <input type="email" class="form-control" id="cnf_password" placeholder="confirm password">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"
            style="background-color: #C3413B; color: #fff; border-radius: 5px; border: none; 
         padding: 10px 20px; font-size: 1rem; font-weight: 600; cursor: pointer; 
         transition: background-color 0.3s ease;"
            onmouseover="this.style.backgroundColor='#A82E29';"
            onmouseout="this.style.backgroundColor='#C3413B';">
            Reset Password</button>
        </div>
      </div>
    </div>
  </div>

  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>