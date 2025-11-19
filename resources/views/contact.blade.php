<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titte</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <nav class="navbar">
    <div class="logo">
      <img src="images/logo.png" alt="CatStay Logo">
      <span>CATS STAY</span>
    </div>

    <ul class="nav-menu" id="navMenu">
      <li><a href="/">Home</a></li>
      <li><a href="/aboutus">About Us</a></li>
      <li><a href="/catcare">Cat Care</a></li>
      <li><a  class="active" href="/contact">Contact</a></li>
    </ul>

    <div class="nav-buttons" id="navButtons">
      <button onclick="window.location.href='/login'" class="nav-btn btn-signin">Sign In</button>
      <button onclick="window.location.href='/signup'" class="nav-btn btn-signup">Sign Up</button>
    </div>

    <div class="hamburger" id="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>

  
  <!-- Mobile Menu -->
  <div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-content">
      <ul class="mobile-nav-menu">
        <li><a href="/">Home</a></li>
        <li><a href="/aboutus">About Us</a></li>
        <li><a href="/catcare">Cat Care</a></li>
        <li><a  class="active" href="/contact">Contact</a></li>
      </ul>
      <div class="mobile-nav-buttons">
        <button onclick="window.location.href='/login'" class="nav-btn btn-signin">Sign In</button>
        <button onclick="window.location.href='/signup'" class="nav-btn btn-signup">Sign Up</button>
      </div>
    </div>
  </div>

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="contact-container">
      <!-- Left Side - Contact Form -->
      <div class="contact-left">
        <h1 class="contact-title">Contact Us</h1>
        <p class="contact-subtitle">our friendly team would love to hear from you!</p>

        <form class="contact-form" id="contactForm">
          <div class="form-row">
            <div class="form-group">
              <label for="firstName" class="form-label">First Name</label>
              <input 
                type="text" 
                id="firstName" 
                class="form-input" 
                placeholder="First Name"
                required
              >
            </div>
            <div class="form-group">
              <label for="lastName" class="form-label">Last Name</label>
              <input 
                type="text" 
                id="lastName" 
                class="form-input" 
                placeholder="Last Name"
                required
              >
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input 
              type="email" 
              id="email" 
              class="form-input" 
              placeholder="Example@email.com"
              required
            >
          </div>

          <div class="form-group">
            <label for="message" class="form-label">Message</label>
            <textarea 
              id="message" 
              class="form-textarea" 
              placeholder="Your message here..."
              rows="5"
              required
            ></textarea>
          </div>

          <button type="submit" class="btn-submit">Send Message</button>
        </form>
      </div>

      <!-- Right Side - Map -->
      <div class="contact-right">
        <div class="map-container">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.27423396815!2d106.68942999999999!3d-6.229728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1234567890123!5m2!1sen!2sid" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>

    <!-- Contact Info Cards -->
    <div class="contact-info">
      <div class="info-card">
        <div class="info-icon email-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M22 6L12 13L2 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="info-title">Our Email Address</h3>
        <p class="info-text">Email us</p>
        <a href="mailto:CatsStay@gmail.com" class="info-link">CatsStay@gmail.com</a>
      </div>

      <div class="info-card">
        <div class="info-icon location-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="info-title">Our Location</h3>
        <p class="info-text">Location</p>
        <a href="#" class="info-link">Jakarta, Indonesia</a>
      </div>

      <div class="info-card">
        <div class="info-icon phone-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22 16.92V19.92C22.0011 20.1985 21.9441 20.4742 21.8325 20.7293C21.7209 20.9845 21.5573 21.2136 21.3521 21.4019C21.1468 21.5901 20.9046 21.7335 20.6407 21.8227C20.3769 21.9119 20.0974 21.9451 19.82 21.92C16.7428 21.5856 13.787 20.5341 11.19 18.85C8.77382 17.3147 6.72533 15.2662 5.18999 12.85C3.49997 10.2412 2.44824 7.27099 2.11999 4.18C2.095 3.90347 2.12787 3.62476 2.21649 3.36162C2.30512 3.09849 2.44756 2.85669 2.63476 2.65162C2.82196 2.44655 3.0498 2.28271 3.30379 2.17052C3.55777 2.05833 3.83233 2.00026 4.10999 2H7.10999C7.5953 1.99522 8.06579 2.16708 8.43376 2.48353C8.80173 2.79999 9.04207 3.23945 9.10999 3.72C9.23662 4.68007 9.47144 5.62273 9.80999 6.53C9.94454 6.88792 9.97366 7.27691 9.8939 7.65088C9.81415 8.02485 9.62886 8.36811 9.35999 8.64L8.08999 9.91C9.51355 12.4135 11.5864 14.4864 14.09 15.91L15.36 14.64C15.6319 14.3711 15.9751 14.1858 16.3491 14.1061C16.7231 14.0263 17.1121 14.0555 17.47 14.19C18.3773 14.5286 19.3199 14.7634 20.28 14.89C20.7658 14.9585 21.2094 15.2032 21.5265 15.5775C21.8437 15.9518 22.0122 16.4296 22 16.92Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="info-title">Our Phone Number</h3>
        <p class="info-text">Phone Number</p>
        <a href="tel:+6281219887317" class="info-link">+62 812-1988-7317</a>
      </div>
    </div>
  </section>

  <!-- Footer Section - Tambahkan sebelum penutup </body> -->
<footer class="footer">
  <div class="footer-container">
    <!-- Left Side - Logo -->
    <div class="footer-left">
      <div class="footer-logo">
        <img src="images/logo.png" alt="CatStay Logo">
        <span>CATS STAY</span>
      </div>
    </div>

    <!-- Center - Copyright -->
    <div class="footer-center">
      <p class="footer-copyright">© 2025 Cats Stay. All Rights Reserved.</p>
    </div>

    <!-- Right Side - Social Media -->
    <div class="footer-right">
      <a href="#" class="social-link" aria-label="Facebook">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M18 2H15C13.6739 2 12.4021 2.52678 11.4645 3.46447C10.5268 4.40215 10 5.67392 10 7V10H7V14H10V22H14V14H17L18 10H14V7C14 6.73478 14.1054 6.48043 14.2929 6.29289C14.4804 6.10536 14.7348 6 15 6H18V2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
      <a href="#" class="social-link" aria-label="Instagram">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M16 11.37C16.1234 12.2022 15.9813 13.0522 15.5938 13.799C15.2063 14.5458 14.5931 15.1514 13.8416 15.5297C13.0901 15.9079 12.2384 16.0396 11.4077 15.9059C10.5771 15.7723 9.80976 15.3801 9.21484 14.7852C8.61992 14.1902 8.22773 13.4229 8.09407 12.5923C7.9604 11.7616 8.09207 10.9099 8.47033 10.1584C8.84859 9.40685 9.45419 8.79374 10.201 8.40624C10.9478 8.01874 11.7978 7.87658 12.63 8C13.4789 8.12588 14.2649 8.52146 14.8717 9.1283C15.4785 9.73515 15.8741 10.5211 16 11.37Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M17.5 6.5H17.51" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
      <a href="#" class="social-link" aria-label="Twitter">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M23 3.00005C22.0424 3.67552 20.9821 4.19216 19.86 4.53005C19.2577 3.83756 18.4573 3.34674 17.567 3.12397C16.6767 2.90121 15.7395 2.95724 14.8821 3.28445C14.0247 3.61166 13.2884 4.19445 12.773 4.95376C12.2575 5.71308 11.9877 6.61238 12 7.53005V8.53005C10.2426 8.57561 8.50127 8.18586 6.93101 7.39549C5.36074 6.60513 4.01032 5.43868 3 4.00005C3 4.00005 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.50005C20.9991 7.2215 20.9723 6.94364 20.92 6.67005C21.9406 5.66354 22.6608 4.39276 23 3.00005Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    </div>
  </div>
</footer>

</body>
<script src="js/nav.js"></script>
<script src="js/contact.js"></script>
</html>