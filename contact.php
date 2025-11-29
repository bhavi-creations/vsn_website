<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Section</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 0;
        } */

        .contact-section {
            position: relative;
            padding: 80px 0;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 700;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
            animation: fadeInDown 0.8s ease;
        }

        .lead {
            color: #f0f0f0;
            font-size: 1.2rem;
            font-weight: 300;
            animation: fadeInUp 0.8s ease;
        }

        .contact-info {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px 35px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            height: 100%;
            transition: transform 0.3s ease;
            animation: slideInLeft 1s ease;
        }

        .contact-info:hover {
            transform: translateY(-10px);
        }

        .contact-info h3 {
            font-size: 2rem;
            color: #667eea;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
            padding: 15px;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            background: #f8f9ff;
            transform: translateX(10px);
        }

        .contact-item i {
            font-size: 1.8rem;
            color: #667eea;
            margin-right: 20px;
            min-width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .contact-item strong {
            display: block;
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 5px;
        }

        .contact-item div {
            color: #666;
            line-height: 1.6;
        }

        .social-links {
            display: flex;
            gap: 15px;
            padding-top: 20px;
            border-top: 2px solid #eee;
        }

        .social-links a {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .social-links a:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.6);
        }

        .social-links a i {
            font-size: 1.3rem;
        }

        .contact-form {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            animation: slideInRight 1s ease;
        }

        .form-control {
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            padding: 15px 20px;
            margin-bottom: 20px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8f9ff;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
            background: white;
            outline: none;
        }

        .form-control::placeholder {
            color: #999;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 150px;
        }

        .btn-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            position: relative;
            overflow: hidden;
        }

        .btn-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: left 0.5s ease;
        }

        .btn-custom:hover::before {
            left: 100%;
        }

        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.6);
        }

        .btn-custom:active {
            transform: translateY(-1px);
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @media (max-width: 991px) {
            .contact-info {
                margin-bottom: 30px;
            }

            .section-title {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 576px) {
            .section-title {
                font-size: 2rem;
            }

            .contact-form, .contact-info {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <section id="contact" class="contact-section mt-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Contact Us</h2>
                <p class="lead mt-4">Get in Touch for Collaboration & Partnership Opportunities</p>
            </div>
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <div class="contact-info">
                        <h3>Let's Connect</h3>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Location</strong><br>
                                Andhra Pradesh, India
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email</strong><br>
                                vsncorp2025@gmail.com
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>Phone</strong><br>
                                +971 56 112 3452
                            </div>
                        </div>
                        <!-- <div class="social-links mt-4">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form">
                        <form  action="contactform.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="contactname" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="Number" class="form-control" name="contactnumber" placeholder="Your Number" required>
                                </div>
                            </div>
                            <input type="text" class="form-control" name="contactsubject" placeholder="Subject" required>
                            <textarea class="form-control" rows="5" name="contactmessage" placeholder="Your Message" required></textarea>
                            <button type="submit" class="btn btn-custom w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include 'footer.php'; ?>