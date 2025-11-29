
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
            <img src="./assets/images/VSN_logo.png" alt="VSN Logo" style="width: 300px;" class="footer_logo d-flex flex-direction-column justify-content-center">

            </div>
            <div class="col-md-4 mb-4">
                <h5>Quick Links</h5>
                <div class="footer-links">
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="gallery.php">Gallery</a>
                    <a href="contact.php">Contact Us</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
            <h5>About VSN</h5>
            <p class="footer_about_section">Vision for Sustainable Nature is committed to creating a sustainable future through innovative renewable energy solutions and community empowerment.</p>
            </div>
        </div>
        <hr style="border-color: rgba(255,255,255,0.1);">
        <div class="text-center pt-3">
            <p class="footer_last_section" >&copy; 2025 VSN - Vision for Sustainable Nature. All rights reserved  <a href="https://bhavicreations.com/">Bhavi Creations</a> </p>
        </div>
    </div>
</footer>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Intersection Observer for scroll animations
    const vsnObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1
    });

    // Apply animation to elements
    document.addEventListener('DOMContentLoaded', () => {
        const vsnElements = document.querySelectorAll('.vsn-info-card, .vsn-stat-item, .vsn-highlight-box');

        vsnElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
            vsnObserver.observe(el);
        });
    });
</script>
</body>

</html>