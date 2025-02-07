<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/@codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar Menu | CodingNepal</title>
  <link rel="stylesheet" href="navbar.css">
  <!-- Linking Google fonts for icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0">
</head>
<body>
  <aside class="sidebar">
    <!-- Sidebar header -->
    <header class="sidebar-header">
      <a href="#" class="header-logo">
        <img src="icon/LouGehIconCropped.png" alt="LouGeh">
      </a>
      <button class="toggler sidebar-toggler">
        <span class="material-symbols-rounded">chevron_left</span>
      </button>
      <button class="toggler menu-toggler">
        <span class="material-symbols-rounded">menu</span>
      </button>
    </header>
    <nav class="sidebar-nav">
      <!-- Primary top nav -->
      <ul class="nav-list primary-nav">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <span class="nav-icon material-symbols-rounded">dashboard</span>
            <span class="nav-label">Dashboard</span>
          </a>
          <span class="nav-tooltip">Dashboard</span>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
          <img class="nav-icon" src="icon/car.png" alt="LouGeh" style="width: 25px; height: 25px; object-fit: cover;">
          <span class="nav-label">Cars</span>
          </a>
          <span class="nav-tooltip">Cars</span>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">          
          <img class="nav-icon" src="icon/services.png" alt="LouGeh" style="width: 25px; height: 25px; object-fit: cover;">
          <span class="nav-label">Services</span>
          </a>
          <span class="nav-tooltip">Services</span>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
          <img class="nav-icon" src="icon/inventory.png" alt="LouGeh" style="width: 25px; height: 25px; object-fit: cover;">
            <span class="nav-label">Parts</span>
          </a>
          <span class="nav-tooltip">Parts</span>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
          <img class="nav-icon" src="icon/invoice.png" alt="LouGeh" style="width: 25px; height: 25px; object-fit: cover;">
            <span class="nav-label">Invoice</span>
          </a>
          <span class="nav-tooltip">Invoice</span>
        
      </ul>
      <!-- Secondary bottom nav -->
      <ul class="nav-list secondary-nav">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <span class="nav-icon material-symbols-rounded">account_circle</span>
            <span class="nav-label">Profile</span>
          </a>
          <span class="nav-tooltip">Profile</span>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <span class="nav-icon material-symbols-rounded">logout</span>
            <span class="nav-label">Logout</span>
          </a>
          <span class="nav-tooltip">Logout</span>
        </li>
      </ul>
    </nav>
  </aside>
  <!-- Script -->
  <script src="navbar.js"></script>
</body>
</html>