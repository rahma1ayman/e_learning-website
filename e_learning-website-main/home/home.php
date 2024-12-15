<?php
session_start();
$is_logged_in = isset($_SESSION['is_logged_in']);
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Learning Website</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">



</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
      <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center logo" href="#">
          <img src="images/logo1.png" alt="Logo" width="50" height="50" class="me-2">
          <span>E-Learning</span>
        </a>

        <!-- Toggler for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto me-4">
            <li class="nav-item"><a class="nav-link text-light" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="#courses">Courses</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="#team">Team</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="../my_learning/my_learning.html">My Learning</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="#About-us">About Us</a></li>
          </ul>

          <!-- Search bar -->
          <form class="d-flex me-4">
            <input class="form-control me-2 search" type="search" placeholder="Search courses..." aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>

          <!-- Cart -->
          <a href="../cart/cart.html" class="me-3 cart">
            <img src="images/cart_icon.png" alt="Cart" width="30" height="30">
          </a>

          <!-- Login and Signup buttons -->
          <?php if ($is_logged_in): ?>
            <span style="font-size: 65%; margin-right: 2%;">Welcome <?php echo $username; ?>! </span>
            <a href="../registration/logout.php" class="btn btn-light me-4">Logout</a>
          <?php else: ?>
            <a href="../registration/login.php" class="btn btn-light me-4">Login</a>
            <a href="../registration/signup.php" class="btn btn-warning">Sign Up</a>
          <?php endif; ?>
        </div>
      </div>
    </nav>
  </header>

  <section class="section hero has-bg-image" id="home" aria-label="home"
    style="background-image: url('images/hero-bg.svg')">
    <div class="container">

      <div class="hero-content">

        <h1 class="h1 section-title">
          Discover the Best Online Learning Platform to <span class="span">Elevate</span> Your Skills and Achieve Your
          Dreams.
        </h1>

        <p class="hero-text">
          Your gateway to quality online learning.<br> Explore courses, gain skills, and achieve your goals.<br>
          All in one place.
        </p>

        <a href="#courses" class="btn btn-find-course"> Find Courses</a>

      </div>

      <figure class="hero-banner">

        <div class="two-photos">

          <div class="img-holder one" style="--width: 150; --height: 100;">
            <img src="images/hero2.jpg" width="150" height="100" alt="hero banner" class="img-cover">
          </div>
          <div class="img-holder three" style="--width: 300; --height: 250; ">
            <img src="images/hero3.jpg" width="300" height="250" alt="hero banner" class="img-cover">
          </div>
        </div>
        <div class="img-holder two" style="--width: 240; --height: 370;">
          <img src="images/hero1.jpg" width="240" height="370" alt="hero banner" class="img-cover">
        </div>


      </figure>

    </div>
  </section>

  <!-- Courses  -->
  <section class="section course" id="courses" aria-label="course">
    <div class="container">

      <p class="section-subtitle">Popular Courses</p>

      <h2 class="h2 section-title">Pick a Course To Get Started</h2>

      <div class="browse">
        <a href="../courses/courses.html" class="btn btn-light me-4 btn1 ">
          View more courses
        </a>
      </div>

      <ul class="grid-list">

        <li>
          <div class="course-card">

            <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
              <img src="images/course-3.jpg" width="370" height="220" loading="lazy"
                alt="Build Responsive Real- World Websites with HTML and CSS" class="img-cover">
            </figure>

            <div class="abs-badge">
              <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

              <span class="span">3 Weeks</span>
            </div>

            <div class="card-content">

              <span class="badge">Beginner</span>

              <h3 class="h3">
                <a href="#" class="card-title">Build Responsive Real- World Websites with HTML and CSS</a>
              </h3>

              <div class="wrapper">

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <p class="rating-text">(4.8/5 Rating)</p>

              </div>

              <data class="price" value="29">$29.00</data>

              <ul class="card-meta-list">

                <li class="card-meta-item">
                  <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                  <span class="span">58 Lessons</span>
                </li>

                <li class="card-meta-item">
                  <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                  <span class="span">20 Students</span>
                </li>

              </ul>

            </div>

          </div>
        </li>

        <li>
          <div class="course-card">

            <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
              <img src="images/course-3.jpg" width="370" height="220" loading="lazy"
                alt="Java Programming Masterclass for Software Developers" class="img-cover">
            </figure>

            <div class="abs-badge">
              <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

              <span class="span">8 Weeks</span>
            </div>

            <div class="card-content">

              <span class="badge">Advanced</span>

              <h3 class="h3">
                <a href="#" class="card-title">Java Programming Masterclass for Software Developers</a>
              </h3>

              <div class="wrapper">

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <p class="rating-text">(4.75 /5 Rating)</p>

              </div>

              <data class="price" value="49">$49.00</data>

              <ul class="card-meta-list">

                <li class="card-meta-item">
                  <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                  <span class="span">25 Lessons</span>
                </li>

                <li class="card-meta-item">
                  <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                  <span class="span">35 Students</span>
                </li>

              </ul>

            </div>

          </div>
        </li>

        <li>
          <div class="course-card">

            <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
              <img src="images/course-3.jpg" width="370" height="220" loading="lazy"
                alt="The Complete Flutter & Dart Development Course" class="img-cover">
            </figure>

            <div class="abs-badge">
              <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

              <span class="span">3 Weeks</span>
            </div>

            <div class="card-content">

              <span class="badge">Intermediate</span>

              <h3 class="h3">
                <a href="#" class="card-title">The Complete Flutter & Dart Development Course</a>
              </h3>

              <div class="wrapper">

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <p class="rating-text">(4.9 /5 Rating)</p>

              </div>

              <data class="price" value="35">$35.00</data>

              <ul class="card-meta-list">

                <li class="card-meta-item">
                  <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                  <span class="span">93 Lessons</span>
                </li>

                <li class="card-meta-item">
                  <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                  <span class="span">18 Students</span>
                </li>

              </ul>

            </div>

          </div>
        </li>

      </ul>

    </div>
  </section>

  <!--Our Team-->
  <section id="team" style="padding: 50px 20px; text-align: center; background-color: white;">
    <p class="section-subtitle" style="margin-bottom: 150px;">Meet Our Instructors</p>

    <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; padding-top: -100px;">

      <!-- Mentor 1 -->
      <div class="team-card">
        <div class="image-container">
          <img src="images/instructor1.jpg" alt="Ronald Richards">
        </div>
        <h3><a href="../instructor/instructor.html">Ronald Richards</a></h3>
        <p>Business</p>
        <p>⭐ 4.6</p>
      </div>

      <!-- Mentor 2 -->
      <div class="team-card">
        <div class="image-container">
          <img src="images/instructor5.jpg" alt="Theresa Webb">
        </div>
        <h3><a href="../instructor/instructor.html">Theresa Webb</a></h3>
        <p>Web Development</p>
        <p>⭐ 4.5</p>
      </div>

      <!-- Mentor 3 -->
      <div class="team-card">
        <div class="image-container">
          <img src="images/instructor2.jpg" alt="Leslie Alexander">
        </div>
        <h3><a href="../instructor/instructor.html">Leslie Alexander</a></h3>
        <p>Programming</p>
        <p>⭐ 4.8</p>
      </div>

      <!-- Mentor 4 -->
      <div class="team-card">
        <div class="image-container">
          <img src="images/instructor4.jpg" alt="Darrell Steward">
        </div>
        <h3><a href="../instructor/instructor.html">Darrell Steward</a></h3>
        <p>Design</p>
        <p>⭐ 4.7</p>
      </div>

    </div>
    <div class="browse" style=" margin-right: 125px; margin-top: 20px;">
      <a href="#" class="btn btn-light me-4 btn1 ">
        View more
      </a>
    </div>
  </section>
  <h2 class="h2 section-title " style="display: block;">Our Impact in Numbers</h2>
  <div class="container-status" style="padding-top: 4px ;">
    <section id="stats" class="stats-section">
      <div class="stat">
        <h2 class="stat-number" data-target="3500">0</h2>
        <p class="stat-label">LEARNERS</p>
      </div>
      <div class="stat">
        <h2 class="stat-number" data-target="4960">0</h2>
        <p class="stat-label">GRADUATES</p>
      </div>
      <div class="stat">
        <h2 class="stat-number" data-target="99">0</h2>
        <p class="stat-label">COUNTRIES REACHED</p>
      </div>
      <div class="stat">
        <h2 class="stat-number" data-target="520">0</h2>
        <p class="stat-label">COURSES PUBLISHED</p>
      </div>
    </section>
  </div>
  <footer class="footer" id="About-us">
    <div class="footer-top section">
      <div class="container grid-list">
        <!-- Footer Brand -->
        <div class="footer-brand">
          <a href="#" class="logo">
            <img src="images/logo1.png" width="150" height="50" alt="E-Learning logo">
          </a>
          <p class="footer-brand-text">
            Your gateway to quality online learning . Explore courses, gain skills, <br>and achieve your goals.
            All in one place.
          </p>

          <div class="wrapper">
            <span class="span">Call: </span>
            <a href="tel:+201158917944" class="footer-links">+20 115 8917 944</a>
          </div>
          <div class="wrapper">
            <span class="span">Email: </span>
            <a href="mailto:info@e-learning.com" class="footer-links">info@e-learning.com</a>
          </div>
          <div class="footer-bottom">
            <div class="container">
              <p class="copyright">
                Copyright 2024 All Rights Reserved by <a href="#" class="copyright-link"> Double Rahom & Double John ^_^</a>
              </p>
            </div>
          </div>
        </div>

        <div class="footer-right">
          <div class="footer-links">
            <ul class="footer-list">
              <li>
                <p class="footer-list-title">Online Platform</p>
              </li>
              <li><a href="#" class="footer-link">About</a></li>
              <li><a href="#courses" class="footer-link">Courses</a></li>
              <li><a href="#team" class="footer-link">Instructor</a></li>
              <li><a href="#" class="footer-link">Purchase Guide</a></li>
            </ul>

            <ul class="footer-list">
              <li>
                <p class="footer-list-title">Links</p>
              </li>
              <li><a href="#" class="footer-link">Contact Us</a></li>
              <li><a href="#" class="footer-link">News & Articles</a></li>
              <li><a href="#" class="footer-link">FAQ's</a></li>
              <li><a href="../registration/login.html" class="footer-link">Sign In/Registration</a></li>
            </ul>
          </div>

          <div class="footer-social">
            <p class="footer-list-title">Follow Us</p>
            <div class="social-list">
              <a href="#" class="social-link"><ion-icon name="logo-facebook"></ion-icon></a>
              <a href="#" class="social-link"><ion-icon name="logo-linkedin"></ion-icon></a>
              <a href="#" class="social-link"><ion-icon name="logo-instagram"></ion-icon></a>
              <a href="#" class="social-link"><ion-icon name="logo-twitter"></ion-icon></a>
              <a href="#" class="social-link"><ion-icon name="logo-youtube"></ion-icon></a>
            </div>
          </div>
        </div>
  </footer>



  <script src="statistics.js"></script>

  <!-- Bootstrap JS -->
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>