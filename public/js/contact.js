// Contact Page JavaScript

document.addEventListener('DOMContentLoaded', function() {
  
  // Contact Form Handling
  const contactForm = document.getElementById('contactForm');
  const firstNameInput = document.getElementById('firstName');
  const lastNameInput = document.getElementById('lastName');
  const emailInput = document.getElementById('email');
  const messageInput = document.getElementById('message');
  const btnSubmit = document.querySelector('.btn-submit');

  // Form Validation
  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }

  function showError(input, message) {
    const formGroup = input.parentElement;
    const existingError = formGroup.querySelector('.error-message');
    if (existingError) existingError.remove();
    
    input.style.borderColor = '#f44336';
    const errorDiv = document.createElement('div');
    errorDiv.className = 'error-message';
    errorDiv.textContent = message;
    errorDiv.style.color = '#f44336';
    errorDiv.style.fontSize = '0.85rem';
    errorDiv.style.marginTop = '5px';
    formGroup.appendChild(errorDiv);
  }

  function clearError(input) {
    const formGroup = input.parentElement;
    const errorMessage = formGroup.querySelector('.error-message');
    if (errorMessage) errorMessage.remove();
    input.style.borderColor = '#E0E0E0';
  }

  // Real-time Validation
  firstNameInput.addEventListener('input', function() {
    if (this.value && this.value.length < 2) {
      showError(this, 'First name must be at least 2 characters');
    } else {
      clearError(this);
    }
  });

  lastNameInput.addEventListener('input', function() {
    if (this.value && this.value.length < 2) {
      showError(this, 'Last name must be at least 2 characters');
    } else {
      clearError(this);
    }
  });

  emailInput.addEventListener('input', function() {
    if (this.value && !validateEmail(this.value)) {
      showError(this, 'Please enter a valid email address');
    } else {
      clearError(this);
    }
  });

  messageInput.addEventListener('input', function() {
    if (this.value && this.value.length < 10) {
      showError(this, 'Message must be at least 10 characters');
    } else {
      clearError(this);
    }
  });

  // Form Submit
  contactForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    let isValid = true;

    // Validate First Name
    if (!firstNameInput.value || firstNameInput.value.length < 2) {
      showError(firstNameInput, 'First name must be at least 2 characters');
      isValid = false;
    } else {
      clearError(firstNameInput);
    }

    // Validate Last Name
    if (!lastNameInput.value || lastNameInput.value.length < 2) {
      showError(lastNameInput, 'Last name must be at least 2 characters');
      isValid = false;
    } else {
      clearError(lastNameInput);
    }

    // Validate Email
    if (!emailInput.value || !validateEmail(emailInput.value)) {
      showError(emailInput, 'Please enter a valid email address');
      isValid = false;
    } else {
      clearError(emailInput);
    }

    // Validate Message
    if (!messageInput.value || messageInput.value.length < 10) {
      showError(messageInput, 'Message must be at least 10 characters');
      isValid = false;
    } else {
      clearError(messageInput);
    }

    if (isValid) {
      // Show loading state
      const originalText = btnSubmit.textContent;
      btnSubmit.textContent = 'Sending...';
      btnSubmit.disabled = true;
      btnSubmit.style.opacity = '0.7';

      // Simulate API call
      setTimeout(() => {
        console.log('Form Data:');
        console.log('First Name:', firstNameInput.value);
        console.log('Last Name:', lastNameInput.value);
        console.log('Email:', emailInput.value);
        console.log('Message:', messageInput.value);

        alert('Message sent successfully!\n\nThank you for contacting us. We will get back to you soon.');
        
        // Reset form
        contactForm.reset();
        
        // Reset button
        btnSubmit.textContent = originalText;
        btnSubmit.disabled = false;
        btnSubmit.style.opacity = '1';
      }, 1500);
    }
  });

  // Clear errors on focus
  [firstNameInput, lastNameInput, emailInput, messageInput].forEach(input => {
    input.addEventListener('focus', function() {
      clearError(this);
    });
  });
});