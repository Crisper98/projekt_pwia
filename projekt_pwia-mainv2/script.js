document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Get form values
        const email = document.getElementById('email').value;
        const textarea = document.getElementById('textarea').value;

        // Simple validation
        if (validateEmail(email) && textarea.trim() !== '') {
            // Form is valid, redirect to another page (logged_in.php)
            window.location.href = 'logged_in.php';
        } else {
            alert('Please fill out the form correctly.');
        }
    });

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    }
});