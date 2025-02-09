<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Responsive Navbar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="navbar/navbar.css">
  <!-- Font Awesome Link for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
  <nav>
    <!-- Checkbox for toggling menu -->
    <input type="checkbox" id="check">
    <!-- Menu icon -->
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <!-- Site logo -->
    <label class="logo">CodingNepal</label>
    <!-- Navigation links -->
    <ul>
      <li><a class="active" href="dashboard.php">Home</a></li>
      <li><a href="cars.php">Cars</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="parts.php">Parts</a></li>
      <li><a href="invoice.php">Invoice</a></li>
      <li><a href="#">Logout</a></li>
    </ul>
  </nav>
</body>
</html>