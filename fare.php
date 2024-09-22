<?php
session_start();
if (isset($_SESSION['acc_name'])) {
    $acc_name = $_SESSION['acc_name'];
} else {
    $acc_name = "Guest";  
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>E-Jeep Fare</title>
    <!-- Link Styles -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/fare.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo_details" style="margin-top: 20px">
        <img src="./img/logo.png" alt="" class="jeepney-logo" />
        <div class="logo_name">E-JeepPay</div>
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <ul class="nav-list" style="margin-top: 40px">
        <li>
          <a href="./index.php">
            <i class="bx bx-grid-alt"></i>
            <span class="link_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <li>
          <a href="./jeepneys.php">
            <i class="bx bx-car"></i>
            <span class="link_name">Jeepneys</span>
          </a>
          <span class="tooltip">Jeepneys</span>
        </li>
        <li>
          <a href="./drivers.php" style="height: 34px;">
            <img
              src="./img/driver.png"
              style="width: 21px; height: 21px; margin-left: 14.5px"
            />
            <span class="link_name">Driver</span>
          </a>
          <span class="tooltip">Driver</span>
        </li>
        <li>
          <a href="./user.php">
            <i class="bx bx-user"></i>
            <span class="link_name">User</span>
          </a>
          <span class="tooltip">User</span>
        </li>
        <li>
          <a href="./fare.php">
            <i class="bx bx-dollar"></i>
            <span class="link_name">Fare</span>
          </a>
          <span class="tooltip">Fare</span>
        </li>
        <li>
          <a href="./setting.php" id="settings-link">
            <i class="bx bx-cog"></i>
            <span class="link_name">Settings</span>
          </a>
          <span class="tooltip">Settings</span>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <section class="layout">
        <div class="header">
          <div class="container">
            <input type="text" class="search-input" />
            <div class="topbar-user">
              <h5
                style="
                  margin-top: 0.9%;
                  font-size: 18px;
                  color: white;
                  font-family: Rubik, system-ui;
                "
              >
              Welcome <?php echo htmlspecialchars($acc_name); ?>
              </h5>
            </div>
            <div class="top-icons">
              <button style="width: 40px; height: 40px; margin-right: 10px">
                <a href="./login.php">
                  <img
                    src="./img/account.png"
                    style="height: 100%; width: 100%"
                  />
                </a>
              </button>
              <button style="width: 40px; height: 40px">
                <img src="./img/bell.png" style="height: 100%; width: 100%" />
              </button>
            </div>
          </div>
        </div>
        <div class="body">
            <div class="fare-container">
          <div class="intro-text">
            JEEPNEY FARE RATE
          </div>
          <div class="fare-graph">

          </div>
        </div>
      </div>
    </section>
    <!-- Scripts -->
    <script src="./script.js"></script>
  </body>
</html>