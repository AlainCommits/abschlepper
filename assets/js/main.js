// Add shadow to navbar on scroll
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
        } else {
            navbar.style.boxShadow = '0 2px 4px rgba(0,0,0,0.1)';
        }
    });

    // Initialize Bootstrap tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
});

// Emergency call button pulse animation pause on hover
const emergencyButton = document.querySelector('.emergency-call .btn');
if (emergencyButton) {
    emergencyButton.addEventListener('mouseenter', function() {
        this.style.animation = 'none';
    });
    
    emergencyButton.addEventListener('mouseleave', function() {
        this.style.animation = 'pulse 2s infinite';
    });
}
