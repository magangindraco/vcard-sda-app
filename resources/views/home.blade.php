<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to SDA</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #800020; /* Burgundy text color */
        }

        .navbar {
            background-color: #800020; /* Burgundy Navbar */
        }

        .navbar .navbar-brand, .navbar .nav-link {
            color: #ffffff !important; /* White text in navbar */
        }

        .navbar .nav-link:hover {
            color: #f1e8e8 !important; /* Lighter hover effect */
        }

        .hero {
            background: url('{{ asset('images/background.jpg') }}') no-repeat center center;
            background-size: cover;
            height: 100vh;
            color: white; /* White text for contrast */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 20px;
        }

        .btn-custom {
            background-color: #a59a9a; /* Burgundy Button */
            color: white;
            border: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-custom:hover {
            background-color: #600000; /* Darker burgundy on hover */
            transform: scale(1.05);
        }

        .features-section, .products-section, .testimonials-section, .contact-section {
            padding: 50px 0;
        }

        .features-section {
            background-color: #ffffff; /* White background */
        }

        .products-section {
            background-color: #800020; /* Burgundy background */
            color: white; /* White text for readability */
        }

        .testimonials-section {
            background-color: #ffffff; /* White background */
        }

        .contact-section {
            background-color: #800020; /* Burgundy background */
            color: white; /* White text for readability */
        }

        .feature-box, .product-box, .testimonial-box {
            padding: 20px;
            border: 2px solid #800020; /* Burgundy border */
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .feature-box:hover, .product-box:hover, .testimonial-box:hover {
            transform: scale(1.05);
        }

        footer {
            background-color: #ffffff; /* White */
            color: #800020; /* Burgundy text */
            padding: 20px 0;
        }

        footer p, footer a {
            margin: 0;
            color: #800020;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .contact-section input, .contact-section textarea {
            border: 2px solid #ffffff; /* White border */
            border-radius: 8px;
        }

        .contact-section input::placeholder, .contact-section textarea::placeholder {
            color: white;
        }

        .contact-section input:focus, .contact-section textarea:focus {
            box-shadow: 0px 0px 5px rgba(255, 255, 255, 0.5); /* White focus shadow */
        }

        /* New styles for image and video sections */
        .media-section {
            padding: 50px 0;
            background-color: #f8f9fa; /* Light background for contrast */
        }

        .media-section img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .media-section video {
            max-width: 100%;
            border-radius: 8px;
        }

        .media-description {
            margin-top: 10px;
            font-size: 0.9rem;
            color: #0b0606;
        }
        footer {
        font-family: Arial, sans-serif; /* Use a consistent font */
        }

        .contact-info .icon {
            width: 20px; /* Adjust icon size */
            margin-right: 10px;
        }

        .btn-more {
            display: inline-flex; /* Ensure buttons are inline */
            text-decoration: none;
            color: #333; /* Adjust text color */
            padding: 5px 10px; /* Add padding for buttons */
            border-radius: 5px; /* Rounded corners */
        }

        .btn-green {
            background-color: #4CAF50; /* Green background for the button */
            color: white;
            padding: 10px 20px; /* Add padding for the button */
            border: none;
            border-radius: 5px;
            text-decoration: none; /* Remove underline */
        }

        .list-unstyled {
            padding-left: 0; /* Remove default padding */
        }

        .list-unstyled li {
            margin-bottom: 5px; /* Space between list items */
        }

        .row {
            margin-bottom: 20px; /* Add spacing between rows */
        }

        .mt-2 {
            margin-top: 1rem; /* Add margin top for spacing */
        }

        .container {
            max-width: 1200px; /* Set maximum width for the container */
            margin: 0 auto; /* Center the container */
        }

        .jiwa-on-air {
        background-color: #f9f9f9; /* Optional background color */
        }

        .video-thumbnail {
            margin-bottom: 20px; /* Space between thumbnails */
        }

        .video-thumbnail img {
            width: 100%; /* Make images responsive */
            border-radius: 5px; /* Rounded corners */
        }

        .play-button {
            position: absolute; /* Overlay play button on the thumbnail */
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .play-button img {
            width: 60px; /* Adjust play button size */
        }

        h5 {
            font-size: 1.2em; /* Title size */
            margin-top: 10px; /* Space between title and image */
        }

        p {
            font-size: 0.9em; /* Description size */
            color: #666; /* Gray text color */
        }


    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="sda.co.id">
              <img src="{{ asset('images/sdastore.png') }}" alt="Logo" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Welcome to Our Coffee World</h1>
            <p>Experience the finest coffee blends.</p>
            <a href="employees" class="btn btn-custom btn-lg">Masuk Halaman Admin</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="jiwa-on-air" style="padding: 40px 0;">
        <div class="container">
            <h2 class="text-center mb-4">Jiwa Group On The Air</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="video-thumbnail position-relative">
                        <img src="{{ asset('images/video-thumbnail-1.png') }}" alt="Video Thumbnail 1" class="img-fluid">
                        <a href="video-link-1" class="play-button">
                            <img src="{{ asset('images/play-button.png') }}" alt="Play Button">
                        </a>
                    </div>
                    <h5>Centra Cup</h5>
                    <p>Jadi kisah baru, dibingkai dalam kata membuat cerita.</p>
                </div>
    
                <div class="col-md-3">
                    <div class="video-thumbnail position-relative">
                        <img src="{{ asset('images/video-thumbnail-2.png') }}" alt="Video Thumbnail 2" class="img-fluid">
                        <a href="video-link-2" class="play-button">
                            <img src="{{ asset('images/play-button.png') }}" alt="Play Button">
                        </a>
                    </div>
                    <h5>Cocol Dippin' Fries</h5>
                    <p>Cemilan terbaru yang bisa kamu coba sekarang.</p>
                </div>
    
                <div class="col-md-3">
                    <div class="video-thumbnail position-relative">
                        <img src="{{ asset('images/video-thumbnail-3.png') }}" alt="Video Thumbnail 3" class="img-fluid">
                        <a href="video-link-3" class="play-button">
                            <img src="{{ asset('images/play-button.png') }}" alt="Play Button">
                        </a>
                    </div>
                    <h5>Janji Jiwa x OATSIDE</h5>
                    <p>Rayakan hari #temansejiwa bersama menu Oatstanding.</p>
                </div>
    
                <div class="col-md-3">
                    <div class="video-thumbnail position-relative">
                        <img src="{{ asset('images/video-thumbnail-4.png') }}" alt="Video Thumbnail 4" class="img-fluid">
                        <a href="video-link-4" class="play-button">
                            <img src="{{ asset('images/play-button.png') }}" alt="Play Button">
                        </a>
                    </div>
                    <h5>Refresher Series</h5>
                    <p>Kesegaran Baru untuk semua #temansejiwa!</p>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Products Section -->
    <section id="products" class="products-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="product-box">
                        <h3>Arabica Coffee</h3>
                        <p>Rich and flavorful coffee for enthusiasts.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-box">
                        <h3>Robusta Coffee</h3>
                        <p>Strong and bold coffee for a perfect morning.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-box">
                        <h3>Espresso</h3>
                        <p>Get your energy boost with our top espresso.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="testimonial-box">
                        <h3>John Doe</h3>
                        <p>"The best coffee I've ever tasted. The quality is unmatched!"</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-box">
                        <h3>Jane Smith</h3>
                        <p>"Their service is exceptional. The coffee is always fresh and rich in flavor!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Media Section -->
    <section class="media-section">
        <div class="container">
            <h3 class="text-center">Gallery & Videos</h3>
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="path_to_your_image.jpg" alt="Coffee Image" class="img-fluid">
                    <div class="media-description">A beautiful cup of coffee to brighten your day.</div>
                </div>
                <div class="col-md-6 text-center">
                    <video controls>
                        <source src="path_to_your_video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="media-description">Watch how our coffee is made from bean to cup.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h3>Contact Us</h3>
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" placeholder="Your Message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-custom">Send Message</button>
            </form>
        </div>
    </section>

    
    <!-- Footer -->
    <footer style="background-color: #f9f9f9; padding: 40px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-start">
                    <a href="sda.co.id">
                        <img src="{{ asset('images/sda.png') }}" alt="Logo" style="height: 40px;">
                    </a>
                    <p class="mt-2">PT Indraco Global Indonesia</p>
                    <strong>Hubungi Kami</strong>
                    <div class="contact-info mt-2">
                        <div class="d-flex align-items-center mb-2">
                            <img src="//jiwagroup.com/assets/img/mail.png" class="icon me-2">
                            <a href="mailto:sda@indraco.com" class="link-grey">sda@indraco.com</a>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <img src="//jiwagroup.com/assets/img/location.png" class="icon me-2">
                            <p>Jl. Semeru Industri 1 No. 133-135, Bambe, Driyorejo, Gresik 61177 - Indonesia</p>
                        </div>
                    </div>
                    <strong>Ikuti Kami</strong>
                    <div class="social-links mt-2" >
                        <a href="https://www.youtube.com/c/JiwaGroup/about" target="_blank" class="btn-more me-2">
                            <img src="//jiwagroup.com/assets/img/icon-yt.svg" alt="YouTube"> YouTube
                        </a>
                        <a href="https://instagram.com/jiwagroup?utm_medium=copy_link" target="_blank" class="btn-more">
                            <img src="//jiwagroup.com/assets/img/icon-ig.svg" alt="Instagram"> Instagram
                        </a>
                    </div>
                </div>
    
                <div class="col-md-4 text-center">
                    <strong>BRAND</strong>
                    <ul class="list-unstyled mt-3">
                        <li><a href="//jiwagroup.com/id/brand/detail/18/KopiSejutaJiwa">Tugu Buaya</a></li>
                        <li><a href="//jiwagroup.com/id/brand/detail/17/BurgerGeber">Uang Emas</a></li>
                        <li><a href="//jiwagroup.com/id/brand/detail/3/JiwaTea">Ucafe</a></li>
                        <li><a href="//jiwagroup.com/id/brand/detail/1/JanjiJiwa">Suppreso</a></li>
                    </ul>
                </div>
    
                <div class="col-md-4 text-end">
                    <strong>SDA</strong>
                    <div class="mt-2">Download Sekarang</div>
                    <a href="https://apps.apple.com/us/app/jiwa-by-kopi-janji-jiwa/id644405362" target="_blank" class="me-2">
                        <img src="//jiwagroup.com/assets/img/app-apple.png" alt="Apple App Store" style="height: 40px;">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.jiwa.jiwagroup" target="_blank">
                        <img src="//jiwagroup.com/assets/img/app-google.png" alt="Google Play Store" style="height: 40px;">
                    </a>
                    <strong class="d-block mt-3">PARTNERSHIP</strong>
                    <div class="mt-2">Let's become a partner and build the perfect product</div>
                    <a href="//jiwagroup.com/id/partnership" class="btn btn-green mt-2">Become A Partner</a>
                </div>
            </div>
    
            <div class="row mt-4 text-center">
                <p>&copy; 2024 SDA. All Rights Reserved. | <a href="#">Privacy Policy</a></p>
            </div>
        </div>
    </footer>
    

</body>
</html>