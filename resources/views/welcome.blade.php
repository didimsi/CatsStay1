<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cats Stay</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/jepi.css')}}">
</head>
<body>
  <nav class="navbar">
    <div class="logo">
      <img src="logo.png" alt="CatStay Logo">
      <span>CATS STAY</span>
    </div>

    <div class="menu-toggle" id="menu-toggle">&#9776;</div>

    <ul class="nav-links" id="nav-links">
      <li><a href="#" class="active">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Cat Care</a></li>
      <li><a href="#">Contact</a></li>
    </ul>

    <div class="auth-buttons">
      <button class="btn signin">Sign In</button>
      <button class="btn signup">Sign Up</button>
    </div>
  </nav>
  

  <script>
    const toggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');
    toggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  </script>
</body>
</html>
