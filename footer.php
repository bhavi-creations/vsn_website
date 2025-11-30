<footer>
    <div class="container">
        
        <hr style="border-color: rgba(255,255,255,0.1);">
        <div class="text-center pt-3">
            <p class="footer_last_section">&copy; 2025 VSN - Vision for Sustainable Nature. All rights reserved  </p>
        </div>
    </div>
</footer>




<!-- <a href="https://api.whatsapp.com/send?phone=+971 56 112 3452" style="color: #fff;" class="whatsapp-link"
    target="_blank">
    <i class="fab fa-whatsapp"></i>

</a> -->

<!-- <a href="https://api.whatsapp.com/send?phone=971561123452"
    class="whatsapp-link"
    target="_blank"
    rel="noopener noreferrer"
    style="color:#fff; text-decoration:none;">
    <i class="fab fa-whatsapp"></i> 
</a> -->





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