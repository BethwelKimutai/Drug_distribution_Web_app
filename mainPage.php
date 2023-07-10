
<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>
  <link rel="stylesheet" href="doctorMainPage.css">
  <link rel="stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
  <div class = "sidebar">
    <div class = "logo"></div>
    <ul class ="menu">
      <li class = "active">
        <a href="#">
          <i class = "fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class = "fas fa-user"></i>
          <span>Profile</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class = "fas fa-chart-bar"></i>
          <span>Statistics</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class = "fas fa-briefcase"></i>
          <span>Careers</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class = "fas fa-question-circle"></i>
          <span>FAQ</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class = "fas fa-star"></i>
          <span>Testimonials</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class = "fas fa-cog"></i>
          <span>Settings</span>
        </a>
      </li>
      <li class = "logout">
        <a href="#">
          <i class = "fas fa-sign-out-alt"></i>
          <span>logout</span>
        </a>
      </li>
    </ul>
  </div>


  <div class = "main--content">
    <div class = "header--wrapper">
      <div class = "header--title">
        <span>Doctor's</span>
        <h2>Dashboard</h2>
      </div>
      <div class = "user--info">
        <div class="search--box">
        <i class = "fasolid fa-search"></i>
        <input type ="text" placeholder="Search"/>
        </div>
        <?php include "profpic.php"; ?>
      </div>
    </div>

    <div class="card--container">
      <h3 class = "main--title">Today's data</h3>
      <div class="card--wrapper">
        <div class="payment--card">
          <div class="card--header">
            <div class="amount">
              <span class="title">
                Payment amount
              </span>
              <span class="amount-value">
                $500.00
              </span>
            </div>
            <i class="fas fa-dollar-sign icon"></i>
          </div>
          <span class="card-detail">
            **** **** **** 0737
          </span>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

