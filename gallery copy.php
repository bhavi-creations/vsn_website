<?php include 'header.php'; ?>
<body>
    <div class="gallery-section mt-5">
        <div class="container-fluid">
            <div class="section-header">
                <h2 class="section-title">Professional Gallery</h2>
                <p class="section-subtitle">A Visual Journey Through Excellence, Innovation, and Global Impact</p>
            </div>
            
            <div class="gallery-container">
                <!-- Gallery Item 1 - Large Feature -->
                <div class="gallery-item" onclick="openModal(0)">
                    <div class="image-wrapper">
                        <div class="image-placeholder">
                            <!-- <i class="fas fa-trophy placeholder-icon"></i> -->
                             <img src="./assets/images/gallert_1.png" alt="" style="height:700px; ">
                        </div>
                        <div class="overlay">
                            <span class="overlay-category">International Recognition</span>
                            <h3 class="overlay-title">Icon of Asia Award</h3>
                            <p class="overlay-description">Honored at Oxford University, UK for FinTech Innovation Excellence</p>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 2 -->
                <div class="gallery-item" onclick="openModal(1)">
                    <div class="image-wrapper">
                        <div class="image-placeholder">
                            <!-- <i class="fas fa-medal placeholder-icon"></i> -->
                            <img src="./assets/images/1.png" alt="">
                        </div>
                        <div class="overlay">
                            <span class="overlay-category">Global Honor</span>
                            <h3 class="overlay-title">Harvard Leadership Award</h3>
                            <p class="overlay-description">Recognized for Sustainable Development Leadership</p>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 3 -->
                <div class="gallery-item" onclick="openModal(2)">
                    <div class="image-wrapper">
                        <div class="image-placeholder">
                            <!-- <i class="fas fa-award placeholder-icon"></i> -->
                            <img src="./assets/images/1.png" alt="">
                        </div>
                        <div class="overlay">
                            <span class="overlay-category">Distinguished Awards</span>
                            <h3 class="overlay-title">Mahatma Gandhi Global Leadership</h3>
                            <p class="overlay-description">UK Award for Exceptional Contribution</p>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 4 - Tall -->
                <div class="gallery-item" onclick="openModal(3)">
                    <div class="image-wrapper">
                        <div class="image-placeholder">
                            <!-- <i class="fas fa-solar-panel placeholder-icon"></i> -->
                            <img src="./assets/images/1.png" alt="">
                        </div>
                        <div class="overlay">
                            <span class="overlay-category">Mega Project</span>
                            <h3 class="overlay-title">Agri Solar Hybrid Plant</h3>
                            <p class="overlay-description">India's First 150 MW Solar + 80 MW Wind Power Project</p>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 5 -->
                <div class="gallery-item" onclick="openModal(4)">
                    <div class="image-wrapper">
                        <div class="image-placeholder">
                            <!-- <i class="fas fa-book-open placeholder-icon"></i> -->
                            <img src="./assets/images/1.png" alt="">
                        </div>
                        <div class="overlay">
                            <span class="overlay-category">Publication</span>
                            <h3 class="overlay-title">FinTech in Finance</h3>
                            <p class="overlay-description">Available on Amazon & Kindle</p>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 6 -->
                <div class="gallery-item" onclick="openModal(5)">
                    <div class="image-wrapper">
                        <div class="image-placeholder">
                        <img src="./assets/images/1.png" alt="">
                            <!-- <i class="fas fa-atom placeholder-icon"></i> -->
                        </div>
                        <div class="overlay">
                            <span class="overlay-category">Nuclear Excellence</span>
                            <h3 class="overlay-title">Nuclear Power Awards</h3>
                            <p class="overlay-description">Four Outstanding Contribution Awards</p>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 7 - Tall -->
                <div class="gallery-item" onclick="openModal(6)">
                    <div class="image-wrapper">
                        <div class="image-placeholder">
                        <img src="./assets/images/1.png" alt="">
                            <!-- <i class="fas fa-charging-station placeholder-icon"></i> -->
                        </div>
                        <div class="overlay">
                            <span class="overlay-category">Power Generation</span>
                            <h3 class="overlay-title">Global Energy Systems</h3>
                            <p class="overlay-description">USD 290+ Billion Portfolio Leadership</p>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 8 - Tall -->
                <div class="gallery-item" onclick="openModal(7)">
                    <div class="image-wrapper">
                        <div class="image-placeholder">
                        <img src="./assets/images/1.png" alt="">
                            <!-- <i class="fas fa-lightbulb placeholder-icon"></i> -->
                        </div>
                        <div class="overlay">
                            <span class="overlay-category">Vision 2030</span>
                            <h3 class="overlay-title">Sustainable Future Initiative</h3>
                            <p class="overlay-description">3,000+ Jobs with USD 2B Expansion Plan</p>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 9 -->
                <div class="gallery-item" onclick="openModal(8)">
                    <div class="image-wrapper">
                        <div class="image-placeholder">
                        <img src="./assets/images/1.png" alt="">
                            <!-- <i class="fas fa-building placeholder-icon"></i> -->
                        </div>
                        <div class="overlay">
                            <span class="overlay-category">Real Estate</span>
                            <h3 class="overlay-title">Island Developments</h3>
                            <p class="overlay-description">Tourism & Mega Construction Projects</p>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 10 -->
                <div class="gallery-item" onclick="openModal(9)">
                    <div class="image-wrapper">
                        <div class="image-placeholder">
                        <img src="./assets/images/1.png" alt="">
                            <!-- <i class="fas fa-file-alt placeholder-icon"></i> -->
                        </div>
                        <div class="overlay">
                            <span class="overlay-category">Research</span>
                            <h3 class="overlay-title">FinTech Transformation</h3>
                            <p class="overlay-description">Scopus & Google Scholar Publications</p>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 11 - Wide -->
                <div class="gallery-item" onclick="openModal(10)">
                    <div class="image-wrapper">
                        <div class="image-placeholder">
                        <img src="./assets/images/1.png" alt="">
                            <!-- <i class="fas fa-users placeholder-icon"></i> -->
                        </div>
                        <div class="overlay">
                            <span class="overlay-category">Women Empowerment</span>
                            <h3 class="overlay-title">Employee First Policy</h3>
                            <p class="overlay-description">90% Skill-Based Employment with Community Support</p>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 12 -->
                <div class="gallery-item" onclick="openModal(11)">
                    <div class="image-wrapper">
                        <div class="image-placeholder">
                        <img src="./assets/images/1.png" alt="">
                            <!-- <i class="fas fa-graduation-cap placeholder-icon"></i> -->
                        </div>
                        <div class="overlay">
                            <span class="overlay-category">Education</span>
                            <h3 class="overlay-title">Training & Development</h3>
                            <p class="overlay-description">Academic & Research Institutions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal-backdrop" id="imageModal">
        <div class="modal-content-wrapper">
            <button class="modal-close-btn" onclick="closeModal()">
                <i class="fas fa-times"></i>
            </button>
            <div id="modalBody"></div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const galleryData = [
            {
                icon: 'fa-trophy',
                category: 'International Recognition',
                title: 'Icon of Asia Award',
                description: 'Prestigious honor received at Oxford University, United Kingdom in 2025 for exceptional contribution to FinTech innovation. This award recognizes Dr. V.V.S.N\'s pioneering work in transforming financial technology systems globally.',
                details: ['Oxford University, UK - 2025', 'FinTech Innovation Excellence', 'Global Leadership Recognition', 'Technology Transformation Impact']
            },
            {
                icon: 'fa-medal',
                category: 'Global Honor',
                title: 'Harvard Leadership Award',
                description: 'Recognized by Harvard University, USA for exceptional leadership in sustainable development and innovative project management across multiple continents.',
                details: ['Harvard University, USA', 'Leadership Excellence', 'Sustainable Development Focus', 'International Impact']
            },
            {
                icon: 'fa-award',
                category: 'Distinguished Awards',
                title: 'Mahatma Gandhi Global Leadership Award',
                description: 'Honored in the United Kingdom for outstanding contribution to global leadership and social impact through sustainable practices and community development.',
                details: ['United Kingdom Recognition', 'Global Leadership', 'Social Impact Focus', 'Community Development']
            },
            {
                icon: 'fa-solar-panel',
                category: 'Mega Project',
                title: 'India\'s First Agri Solar Hybrid Plant',
                description: 'Revolutionary integrated sustainable energy project combining 150 MW Solar Power, 20 TPD Biogas, advanced cultivation systems, and 80 MW Wind Power. Creating employment for 3,000+ people with USD 150 million investment in Andhra Pradesh, India.',
                details: ['150 MW Solar + 80 MW Wind Power', '20 TPD Biogas Production', '1,000 Direct + 2,000 Indirect Jobs', 'USD 150M Investment', 'Andhra Pradesh, India']
            },
            {
                icon: 'fa-book-open',
                category: 'Publication',
                title: 'FinTech in Finance',
                description: 'Comprehensive book covering technological transformation in financial systems through FinTech integration. Available on Amazon and Kindle, this publication explores efficient technology blending and fusion into modern finance.',
                details: ['Available on Amazon & Kindle', 'FinTech Innovation', 'Technology Integration', 'Financial Transformation']
            },
            {
                icon: 'fa-atom',
                category: 'Nuclear Excellence',
                title: 'Nuclear Power Excellence Awards',
                description: 'Four prestigious awards received for outstanding contribution to nuclear power commercial operations, safety standards, and advanced energy systems implementation.',
                details: ['Four Distinguished Awards', 'Nuclear Power Operations', 'Safety Excellence', 'Commercial Operations Leadership']
            },
            {
                icon: 'fa-charging-station',
                category: 'Power Generation',
                title: 'Global Energy Systems Leadership',
                description: 'Exceptional leadership across USD 290+ billion global mega projects in power generation, advanced energy systems, and sustainable infrastructure development across multiple countries.',
                details: ['USD 290+ Billion Portfolio', 'Multiple Countries (India, USA, UK, Canada, Australia, UAE)', 'Power Generation Leadership', 'Advanced Energy Systems']
            },
            {
                icon: 'fa-lightbulb',
                category: 'Vision 2030',
                title: 'Sustainable Future Initiative',
                description: 'Comprehensive vision for sustainable development with 90% skill-based employment, women empowerment programs, community support with buyback agreements, and expansion plan to USD 2 billion investment.',
                details: ['3,000+ Total Jobs Creation', '90% Skill-Based Employment', 'Women Empowerment Focus', 'USD 2B Expansion Potential', 'Community Buyback Programs']
            },
            {
                icon: 'fa-building',
                category: 'Real Estate Development',
                title: 'Island Developments & Tourism',
                description: 'Strategic leadership in tourism developments, island real estate projects, and mega construction initiatives across international locations, contributing to nation building and economic growth.',
                details: ['International Portfolio', 'Tourism Development', 'Island Real Estate', 'Mega Constructions']
            },
            {
                icon: 'fa-file-alt',
                category: 'Research Publications',
                title: 'FinTech Transformation Research',
                description: 'Published research articles in Google Scholar and Scopus indexed journals covering technological transformation of transactions by FinTech and efficient technology blending.',
                details: ['Google Scholar Publications', 'Scopus Indexed Journals', 'FinTech Research', 'Technology Transformation']
            },
            {
                icon: 'fa-users',
                category: 'Women Empowerment',
                title: 'Employee First Policy',
                description: 'Revolutionary approach to employment with 90% positions based on skills rather than academic qualifications, special focus on women empowerment, and comprehensive community support programs.',
                details: ['1,000 Direct Jobs', '2,000 Indirect Jobs', '90% Skill-Based Positions', 'Women Empowerment Programs', 'Local Business Support']
            },
            {
                icon: 'fa-graduation-cap',
                category: 'Education',
                title: 'Training & Development Institutions',
                description: 'Establishment of comprehensive training and development institutions along with academic and research facilities to foster education, skill development, and innovation in the community.',
                details: ['Training Institutions', 'Academic Centers', 'Research Facilities', 'Skill Development Programs']
            }
        ];
        
        function openModal(index) {
            const modal = document.getElementById('imageModal');
            const modalBody = document.getElementById('modalBody');
            const data = galleryData[index];
            
            modalBody.innerHTML = `
                <div class="modal-image">
                    <i class="fas ${data.icon} modal-icon"></i>
                </div>
                <span class="modal-category">${data.category}</span>
                <h2 class="modal-title">${data.title}</h2>
                <p class="modal-description">${data.description}</p>
                <div class="modal-details">
                    ${data.details.map(detail => `
                        <div class="modal-detail-item">
                            <i class="fas fa-check-circle"></i>
                            <span>${detail}</span>
                        </div>
                    `).join('')}
                </div>
            `;
            
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
        
        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
        
        // Close modal on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeModal();
            }
        });
        
        // Close modal on backdrop click
        document.getElementById('imageModal').addEventListener('click', (e) => {
            if (e.target.id === 'imageModal') {
                closeModal();
            }
        });
        
        // Animate gallery items on load
        window.addEventListener('load', () => {
            const items = document.querySelectorAll('.gallery-item');
            items.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(30px)';
                setTimeout(() => {
                    item.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
<?php include 'footer.php' ; ?>