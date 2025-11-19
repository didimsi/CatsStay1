const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');
const body = document.body;

// Function to toggle menu and body scroll
function toggleMenu() {
    hamburger.classList.toggle('active');
    mobileMenu.classList.toggle('active');
    
    // Disable/Enable body scroll
    if (mobileMenu.classList.contains('active')) {
        body.style.overflow = 'hidden';
    } else {
        body.style.overflow = 'auto';
    }
}

// Function to close menu
function closeMenu() {
    hamburger.classList.remove('active');
    mobileMenu.classList.remove('active');
    body.style.overflow = 'auto';
}

// Hamburger click event
hamburger.addEventListener('click', toggleMenu);

// Close mobile menu when clicking outside
document.addEventListener('click', (e) => {
    if (!hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
        if (mobileMenu.classList.contains('active')) {
            closeMenu();
        }
    }
});

// Close mobile menu when clicking a menu item
const mobileMenuLinks = document.querySelectorAll('.mobile-nav-menu a');
mobileMenuLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
});

// Smooth scroll for buttons (optional)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Sticky Navbar with Scroll Effect
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});