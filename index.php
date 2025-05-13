<?php session_start(); ?>
<?php include("layout/header.php"); ?>
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/Hotel">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Hotel in Alambagh Lucknow | Luxury Stay & Banquets | Hotel Ranbirs</title>
    <meta name="description"
        content="Experience premium hospitality at Hotel Ranbirs Alambagh - Luxury rooms, multi-cuisine restaurant & elegant banquet halls near Phoenix Mall, Lucknow. Best hotel for weddings, events and comfortable stays.">
    <meta name="keywords"
        content="luxury hotel Alambagh, best hotels in Lucknow, banquet hall near Phoenix Mall, wedding venues Lucknow, deluxe rooms Alambagh, fine dining Lucknow, Hotel Ranbirs Alambagh, 5 star hotel Lucknow, luxury stay Alambagh">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Hotel Ranbirs Alambagh">
    <meta property="og:title" content="Hotel Ranbirs Alambagh | Luxury Stay & Banquets in Lucknow">
    <meta property="og:description"
        content="Premium 5-star hotel with luxury rooms, fine dining & banquet facilities in Alambagh, Lucknow near Phoenix Mall.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.hotelranbirsalambagh.com/">
    <meta property="og:image" content="https://www.hotelranbirsalambagh.com/img/hotelranbirs_slider1.jpeg">
    <meta property="og:site_name" content="Hotel Ranbirs Alambagh">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="canonical" href="https://www.hotelranbirsalambagh.com/">

    <!-- Schema.org Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Hotel",
      "name": "Hotel Ranbirs Alambagh",
      "url": "https://www.hotelranbirsalambagh.com/",
      "description": "Luxury 3-star hotel offering premium accommodations, fine dining, and banquet facilities in Alambagh, Lucknow near Phoenix Mall",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Alambagh",
        "addressLocality": "Lucknow",
        "addressRegion": "Uttar Pradesh",
        "postalCode": "226012",
        "addressCountry": "India"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "26.8002979",
        "longitude": "80.8973748"
      },
      "telephone": "+91522 432 7173",
      "openingHours": "24/7",
      "priceRange": "₹₹₹₹",
      "starRating": {
        "@type": "Rating",
        "ratingValue": "5"
      },
      "image": [
        "https://www.hotelranbirsalambagh.com/img/hotelranbirs_slider1.jpeg",
        "https://www.hotelranbirsalambagh.com/img/ranbirs-front.jpg",
        "https://www.hotelranbirsalambagh.com/img/restaurant-768x1024.jpeg"
      ],
      "amenityFeature": [
        {"@type": "LocationFeatureSpecification", "name": "Free Parking"},
        {"@type": "LocationFeatureSpecification", "name": "Air Conditioning"},
        {"@type": "LocationFeatureSpecification", "name": "Restaurant"},
        {"@type": "LocationFeatureSpecification", "name": "Banquet Hall"},
        {"@type": "LocationFeatureSpecification", "name": "WiFi"},
        {"@type": "LocationFeatureSpecification", "name": "Room Service"},
        {"@type": "LocationFeatureSpecification", "name": "Swimming Pool"}
      ],
      "sameAs": [
        "https://www.facebook.com/hotelranbirsalambagh",
        "https://www.instagram.com/hotelranbirsalambagh"
      ]
    }
    </script>
    <style>
        /* Global Variables */
        :root {
            --primary-color: #d4af37;
            --secondary-color: #a67c52;
            --dark-color: #222;
            --light-color: #f9f5ef;
            --text-color: #555;
            --gold: #d4af37;
            --dark-gold: #c19b2e;
            --light-gold: #f9f5ef;
        }

        /* Utility Classes */
        .text-gold {
            color: var(--gold) !important;
        }

        .bg-gold {
            background-color: var(--gold) !important;
        }

        .bg-light-gold {
            background-color: var(--light-gold) !important;
        }

        .border-gold {
            border-color: var(--gold) !important;
        }

        .btn-gold {
            background-color: var(--gold) !important;
            color: white !important;
        }

        .btn-outline-gold {
            border-color: var(--gold) !important;
            color: var(--gold) !important;
        }

        .letter-spacing-2 {
            letter-spacing: 1.5px;
        }

        .object-cover {
            object-fit: cover;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            color: white;
            height: 80vh;
            display: flex;
            align-items: center;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
            overflow: hidden;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .hero-text,
        .hero-button {
            position: relative;
            z-index: 2;
        }

        .hero-text h1 {
            font-weight: 700;
            font-size: 4.5rem;
            letter-spacing: 1px;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
            line-height: 1.2;
        }

        .alambagh {
            font-size: 1.5rem;
            display: inline-block;
            background: linear-gradient(135deg, #dfa974 0%, #a67c52 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            position: relative;
            padding-left: 15px;
        }

        .alambagh::before {
            content: "";
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            height: 70%;
            width: 4px;
            background: #dfa974;
            border-radius: 2px;
        }

        .hero-text p {
            font-size: 1.5rem;
            color: rgba(255, 255, 255, 0.9);
            max-width: 700px;
            margin: 0 auto 2rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
            position: relative;
            display: inline-block;
        }

        .hero-text p::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: var(--primary-color);
            border-radius: 3px;
        }

        .hero-button {
            margin-top: 2.5rem;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .primary-btn {
            padding: 15px 35px;
            font-size: 1.1rem;
            border-radius: 50px;
            transition: all 0.4s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
            background: var(--primary-color);
            color: white;
            border: 2px solid var(--primary-color);
            text-decoration: none;
        }

        .primary-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            background: transparent;
            color: white;
        }

        .hero-slider .hs-item {
            height: 80vh;
            background-size: cover;
            background-position: center;
        }

        /* Services Section */
        .services-section {
            background-color: #f9f9f9;
        }

        .service-card {
            border-radius: 10px;
            background: white;
            transition: all 0.4s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            height: 100%;
        }

        .service-icon {
            width: 60px;
            height: 60px;
            background: #f5f5f5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem !important;
            color: #222;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            background: #ECEFCA;
            color: #213448;
            font-size: 1.6em !important;
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            transition: background 0.3s ease;
        }

        .service-card:hover .image-overlay {
            background: rgba(0, 0, 0, 0.4);
        }

        .service-card:hover .fa-arrow-right {
            transform: translateX(4px);
        }

        .service-image {
            height: 300px;
            object-fit: cover;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }

        .service-card:hover .service-icon {
            background: #222 !important;
        }

        .service-card:hover .service-icon i {
            color: white !important;
        }

        .service-card:hover img {
            transform: scale(1.05);
        }

        .service-card:hover .image-overlay {
            background: rgba(0, 0, 0, 0.3);
        }

        .service-card:hover a i {
            transform: translateX(5px);
        }

        /* Premium Services */
        .premium-services-section {
            background: #f9f9f9;
            padding: 80px 0;
            position: relative;
        }

        .service-item {
            background: white;
            padding: 40px 30px;
            margin-bottom: 30px;
            border-radius: 8px;
            text-align: center;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            z-index: 1;
        }

        .service-item i {
            font-size: 60px;
            color: var(--primary-color);
            margin-bottom: 25px;
            transition: all 0.4s ease;
        }

        .service-item:hover i {
            transform: scale(1.1);
        }

        .service-item h4 {
            font-size: 22px;
            color: var(--dark-color);
            margin-bottom: 15px;
            position: relative;
            padding-bottom: 15px;
        }

        .service-item h4::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 2px;
            background: var(--primary-color);
            transition: all 0.4s ease;
        }

        .service-item:hover h4::after {
            width: 60px;
        }

        /* Rooms Section */
        .room-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 30px;
        }

        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .room-img {
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .room-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .room-card:hover .room-img img {
            transform: scale(1.1);
        }

        .price-tag {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(212, 175, 55, 0.95);
            color: white;
            padding: 8px 15px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 18px;
        }

        .room-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, transparent 100%);
            padding: 20px;
            color: white;
        }

        .room-overlay h3 {
            margin: 0;
            font-size: 24px;
        }

        .room-details {
            padding: 25px;
        }

        .room-features {
            margin-bottom: 20px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .feature-item i {
            color: var(--primary-color);
            width: 25px;
            margin-right: 10px;
        }

        .room-cta {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .room-btn {
            display: inline-block;
            background: var(--primary-color);
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: 2px solid var(--primary-color);
        }

        .room-btn:hover {
            background: transparent;
            color: var(--primary-color);
        }

        .details-link {
            color: var(--primary-color);
            font-weight: 600;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .view-all-btn {
            display: inline-block;
            padding: 12px 30px;
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
        }

        .view-all-btn:hover {
            background: var(--primary-color);
            color: white;
        }

        /* Video Section */
        .video-section {
            position: relative;
            padding: 100px 0;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/video-bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
        }

        /* Testimonial Section */
        .testimonial-section {
            padding: 80px 0;
            background: white;
        }

        .ts-item {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            margin: 15px;
        }

        .ts-item p {
            font-style: italic;
            color: var(--text-color);
            margin-bottom: 20px;
        }

        .ti-author {
            margin-bottom: 20px;
        }

        .rating {
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .heading2 {
            font-size: 2rem !important;
            font-weight: 600;
        }

        /* Modal Styles */
        #modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 50;
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.4s ease-out;
        }

        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .hero-text h1 {
                font-size: 3.5rem;
            }

            .room-features {
                grid-template-columns: 1fr;
            }

            .youtube-responsive {
                display: none !important;
            }
        }

        @media (max-width: 768px) {
            .hero-text h1 {
                font-size: 2.5rem;
            }

            .alambagh {
                font-size: 1.2rem;
            }

            .hero-text p {
                font-size: 1.1rem;
            }

            .hero-button {
                flex-direction: column;
                gap: 15px;
            }

            .section-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .hero-text h1 {
                font-size: 2rem;
            }

            section {
                overflow-x: hidden;
            }

            .hero-text p {
                font-size: 1rem;
            }

            .primary-btn {
                padding: 12px 25px;
                font-size: 1rem;
            }

            * {
                font-size: 13px;
            }
        }
    </style>
</head>
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-text text-center">
                    <h1>Hotel Ranbirs <span class="alambagh text-warning">Alambagh</span></h1>
                    <p>Luxury Accommodation & Banquet Hall in Alambagh, Lucknow</p>
                    <h6 class="text-white">Premium Rooms • Exquisite Dining • Elegant Event Spaces</h6>
                    <div class="hero-button">
                        <a href="https://wa.me/918188084121?text=Hello%2C%20I%20would%20like%20to%20reserve%20a%20table%20at%20Hotel%20Ranbirs%20Alambagh.%20Here%20are%20the%20details%3A%0A-%20Date%3A%20_____%0A-%20Time%3A%20_____%0A-%20Number%20of%20Guests%3A%20_____%0A%0AThank%20you!"
                            target="_blank" class="primary-btn mx-3"
                            aria-label="Book a table at Hotel Ranbirs Alambagh restaurant">
                            <i class="fa fa-compass mr-2"></i> Reserve Table
                        </a>
                        <a href="https://wa.me/918188084121?text=Hello%2C%20I%20would%20like%20to%20book%20a%20stay%20at%20Hotel%20Ranbirs%20Alambagh.%20Here%20are%20my%20stay%20details%3A%0A-%20Check-in%20Date%3A%20_____%0A-%20Check-out%20Date%3A%20_____%0A-%20Number%20of%20Guests%3A%20_____%0A-%20Room%20Type%3A%20Standard%2FLuxury%2FSuite%0A%0AThank%20you!"
                            target="_blank" class="primary-btn mx-3"
                            aria-label="Book your stay at Hotel Ranbirs Alambagh">
                            <i class="fa fa-calendar-check mr-2"></i> Book Your Stay
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/hotelranbirs_slider1.jpeg"
            alt="Luxury Hotel in Alambagh Lucknow - Hotel Ranbirs Exterior View"></div>
        <div class="hs-item set-bg" data-setbg="img/ranbirs-front.jpg"
            alt="Elegant Lobby Area at Hotel Ranbirs Alambagh"></div>
        <div class="hs-item set-bg" data-setbg="img/2025-02-11.jpg"
            alt="Fine Dining Restaurant at Hotel Ranbirs Lucknow"></div>
    </div>
    <div class="hero-overlay"></div>
</section>

<?php
if (isset($_SESSION['message'])) {
    echo '<div id="popup-message" style="display:none;">' . htmlspecialchars($_SESSION['message']) . '</div>';
    unset($_SESSION['message']);
}
?>

<!-- Services Section -->
<section class="services-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title text-center">
                    <span>PREMIUM FACILITIES</span>
                    <h2 class="heading2">Our Hotel Services in Alambaghh</h2>
                    <p class="mt-3"> Experience excellence across every aspect of your stay - from luxurious rooms to
                        celebrations and
                        fine dining.</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-lg-6 mb-3" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100 overflow-hidden position-relative">
                    <div class="position-relative overflow-hidden service-image">
                        <img src="img/rooms_icon.jpeg"
                            alt="Deluxe Rooms at Hotel Ranbirs Alambagh - Luxury Accommodation in Lucknow"
                            class="img-fluid w-100">
                        <div class="image-overlay"></div>
                    </div>
                    <div class="p-4 p-xl-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3">
                                <i class="fas fa-bed"></i>
                            </div>
                            <h3 class="mb-0">Deluxe & Executive Rooms</h3>
                        </div>
                        <p class="mb-4 text-secondary">
                            Spacious, elegantly furnished rooms with luxurious amenities designed for comfort and
                            style.
                            Perfect for business travelers and families visiting Lucknow.
                        </p>
                        <a href="rooms.php"
                            class="text-decoration-none d-inline-flex align-items-center fw-semibold text-dark"
                            aria-label="Explore our room options">
                            Explore More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-lg-6 mb-3" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card h-100 overflow-hidden position-relative">
                    <div class="position-relative overflow-hidden service-image">
                        <img src="img/bavnquet_ranbir-alambagh-1024x768 (1).jpeg"
                            alt="Banquet Hall at Hotel Ranbirs Alambagh - Wedding Venues in Lucknow"
                            class="img-fluid w-100">
                        <div class="image-overlay"></div>
                    </div>
                    <div class="p-4 p-xl-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3">
                                <i class="fas fa-glass-cheers"></i>
                            </div>
                            <h3 class="mb-0">Banquet for Events</h3>
                        </div>
                        <p class="mb-4 text-secondary">
                            Perfect venues for weddings, pre-weddings, birthdays, and corporate events with elegant
                            décor
                            and professional service. Among the best banquet halls in Alambagh.
                        </p>
                        <a href="banquet.php"
                            class="text-decoration-none d-inline-flex align-items-center fw-semibold text-dark"
                            aria-label="View our banquet facilities">
                            Explore More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-lg-6 mb-3" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card h-100 overflow-hidden position-relative">
                    <div class="position-relative overflow-hidden service-image">
                        <img src="img/restaurant-768x1024.jpeg"
                            alt="Multi-Cuisine Restaurant at Hotel Ranbirs Alambagh - Best Dining in Lucknow"
                            class="img-fluid w-100">
                        <div class="image-overlay"></div>
                    </div>
                    <div class="p-4 p-xl-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <h3 class="mb-0">Exotic Restaurant & Dining</h3>
                        </div>
                        <p class="mb-4 text-secondary">
                            Multi-cuisine delights featuring authentic Lucknowi flavors along with continental
                            dishes.
                            Private dining options available for special occasions.
                        </p>
                        <a href="restaurant.php"
                            class="text-decoration-none d-inline-flex align-items-center fw-semibold text-dark"
                            aria-label="Discover our restaurant">
                            Explore More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-lg-6 mb-3" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card h-100 overflow-hidden position-relative">
                    <div class="position-relative overflow-hidden service-image">
                        <img src="img/private-dining.jpg" alt="Romantic private dining at Hotel Ranbirs in Lucknow"
                            class="img-fluid w-100">
                        <div class="image-overlay"></div>
                    </div>
                    <div class="p-4 p-xl-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="service-icon me-3">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h3 class="mb-0">Private Dining Area</h3>
                        </div>
                        <p class="mb-4 text-secondary">
                            Perfect for family meals, business lunches, romantic dinners, or celebrations—enjoy
                            curated menus,
                            personalized service, and a serene ambiance away from the crowd.
                        </p>
                        <a href="restaurant.php"
                            class="text-decoration-none d-inline-flex align-items-center fw-semibold text-dark"
                            aria-label="Learn about private dining">
                            Explore More <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Premium Services Section -->
<section class="premium-services-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title text-center">
                    <span>Luxury Amenities</span>
                    <h2 class="heading2">Our Hotel Facilities in Alambagh</h2>
                    <p class="mt-3">Experience unparalleled comfort with our premium amenities and services</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-parking"></i>
                    <h4>Secure Parking</h4>
                    <p>24/7 monitored parking facility with CCTV surveillance and valet service for complete peace
                        of mind during your stay.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-utensils"></i>
                    <h4>Gourmet Dining</h4>
                    <p>Our award-winning restaurant serves exquisite local and international cuisine prepared by
                        master chefs using seasonal ingredients.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-bed"></i>
                    <h4>Luxury Rooms</h4>
                    <p>Indulge in our spacious suites featuring premium bedding, smart climate control, and
                        breathtaking city views for ultimate relaxation.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-tshirt"></i>
                    <h4>Premium Laundry</h4>
                    <p>Professional laundry service with eco-friendly detergents and same-day return for your
                        convenience and comfort.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-wind"></i>
                    <h4>Air Conditioning</h4>
                    <p>Experience cool comfort with advanced air conditioning in every room, ensuring the perfect
                        temperature throughout your stay.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-tv"></i>
                    <h4>Entertainment</h4>
                    <p>55" Smart TVs with international channels, streaming services, and premium movie selections
                        in every suite.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <a href="amenities.php" class="primary-btn" aria-label="View all hotel amenities">
                    <i class="fas fa-concierge-bell mr-2"></i> Explore All Amenities
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Rooms Section -->
<section class="rooms-section pt-5">
    <div class="container">
        
 <div class="row">
     <div class="col-lg-12 text-center">
         <div class="section-title text-center">
             <span>LUXURY ACCOMMODATION<</span>
             <h2 class="heading2">Our Rooms & Suites in Alambagh</h2>
             <p class="mt-3"> Experience comfort in our meticulously designed rooms, blending
                contemporary elegance with traditional hospitality.</p>
         </div>
     </div>
 </div>
        <div class="row g-4">
            <!-- Room 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="room-card">
                    <div class="room-img">
                        <img src="img/room1.avif"
                            alt="Deluxe Twin Room at Hotel Ranbirs - Best Budget Rooms in Alambagh">
                        <div class="price-tag">₹1,878 <span>/night</span></div>
                        <div class="room-overlay">
                            <h3 class="text-white">Deluxe Twin Room</h3>
                        </div>
                    </div>
                    <div class="room-details">
                        <div class="room-features">
                            <div class="feature-item">
                                <i class="fas fa-ruler-combined"></i>
                                <span>120 sq.ft</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-user-friends"></i>
                                <span>Max 5 persons</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-bed"></i>
                                <span>Single Beds</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-wifi"></i>
                                <span>Wifi, Television, Bathroom, AC, Room Service</span>
                            </div>
                        </div>
                        <div class="room-cta d-flex justify-content-between mt-3">
                            <a href="https://wa.me/918188084121?text=Hello%2C%20I%20would%20like%20to%20book%20the%20Deluxe%20Twin%20Room%20at%20Hotel%20Ranbirs%20Alambagh.%20Please%20share%20availability%20and%20details."
                                target="_blank" class="room-btn" aria-label="Book Deluxe Twin Room">
                                Book Now
                            </a>
                            <a href="rooms.php" class="details-link" aria-label="View Deluxe Twin Room details">
                                Details <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Room 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="room-card">
                    <div class="room-img">
                        <img src="img/hotelranbirs_slider1.jpeg"
                            alt="Deluxe Room at Hotel Ranbirs - Comfortable Stay in Lucknow">
                        <div class="price-tag">₹2,179 <span>/night</span></div>
                        <div class="room-overlay">
                            <h3 class="text-white">Deluxe Room</h3>
                        </div>
                    </div>
                    <div class="room-details">
                        <div class="room-features">
                            <div class="feature-item">
                                <i class="fas fa-ruler-combined"></i>
                                <span>150 sq.ft</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-user-friends"></i>
                                <span>Max 5 persons</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-bed"></i>
                                <span>Double Beds</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-wifi"></i>
                                <span>Wifi, Television, Bathroom, AC, Mini Bar</span>
                            </div>
                        </div>
                        <div class="room-cta d-flex justify-content-between mt-3">
                            <a href="https://wa.me/918188084121?text=Hello%2C%20I%20would%20like%20to%20book%20the%20Deluxe%20Room%20at%20Hotel%20Ranbirs%20Alambagh.%20Please%20share%20availability%20and%20details."
                                target="_blank" class="room-btn" aria-label="Book Deluxe Room">
                                Book Now
                            </a>
                            <a href="rooms.php" class="details-link" aria-label="View Deluxe Room details">
                                Details <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Room 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="room-card">
                    <div class="room-img">
                        <img src="img/rooms_icon.jpeg"
                            alt="Executive Room at Hotel Ranbirs - Premium Accommodation in Alambagh">
                        <div class="price-tag">₹2,690+ <span>/night</span></div>
                        <div class="room-overlay">
                            <h3 class="text-white">Executive Room</h3>
                        </div>
                    </div>
                    <div class="room-details">
                        <div class="room-features">
                            <div class="feature-item">
                                <i class="fas fa-ruler-combined"></i>
                                <span>180 sq.ft</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-user-friends"></i>
                                <span>Max 5 persons</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-bed"></i>
                                <span>Double Beds</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-wifi"></i>
                                <span>Wifi, Television, Bathroom, AC, Mini Bar, Lounge Access</span>
                            </div>
                        </div>
                        <div class="room-cta d-flex justify-content-between mt-3">
                            <a href="https://wa.me/918188084121?text=Hello%2C%20I%20would%20like%20to%20book%20the%20Executive%20Room%20at%20Hotel%20Ranbirs%20Alambagh.%20Please%20share%20availability%20and%20details."
                                target="_blank" class="room-btn" aria-label="Book Executive Room">
                                Book Now
                            </a>
                            <a href="rooms.php" class="details-link" aria-label="View Executive Room details">
                                Details <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="rooms.php" class="view-all-btn" aria-label="View all room options">
                View All Rooms <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Video Section -->
<section class="py-5 bg-dark text-white youtube-responsive"
    style="background-image: url('img/banner1.jpeg'); background-size: cover; background-position: center;">
    <div class="container py-5 text-center">
        <h2 class="display-5 fw-bold mb-4 heading2">Discover Hotel Ranbirs Alambagh</h2>
        <p class="lead mb-5">Take a virtual tour of our luxury hotel and facilities in Lucknow</p>
        <a href="https://www.youtube.com/watch?v=LbssS1PKsd8" class="video-popup d-inline-block position-relative"
            target="_blank" aria-label="Watch our hotel video tour">
            <div class="position-absolute top-50 start-50 translate-middle bg-gold rounded-circle p-3 shadow">
                <i class="fas fa-play fa-2x text-white"></i>
            </div>
        </a>
    </div>
</section>

<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Guest Reviews</span>
                    <h2 class="heading2">What Our Guests Say About Hotel Ranbirs Alambagh?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="testimonial-slider owl-carousel">
                    <div class="ts-item">
                        <p>"Amazing service and rooms! From the moment I checked in, I felt valued. Rooms were
                            pristine and beautifully designed. Will definitely stay again!"</p>
                        <div class="ti-author">
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <h5>– Ravi Sharma</h5>
                        </div>
                        <img src="img/testimonial-logo.png" alt="5 star review for Hotel Ranbirs Alambagh">
                    </div>
                    <div class="ts-item">
                        <p>"Perfect venue for celebrations. We hosted our anniversary party at Hotel Ranbirs and
                            everything was perfect — décor, food, and service. Truly memorable!"</p>
                        <div class="ti-author">
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star-half_alt"></i>
                            </div>
                            <h5>– Priya Kapoor</h5>
                        </div>
                        <img src="img/testimonial-logo.png" alt="4.5 star review for Hotel Ranbirs">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Location Section -->
<section class="py-5">
    <div class="container">
            
 <div class="row">
     <div class="col-lg-12 text-center">
         <div class="section-title text-center">
             <h2 class="heading2">Our Location in Alambagh, Lucknow</h2>
             <p class="mt-3"> Conveniently located just 5 minutes from Phoenix Mall and easily
                    accessible from all major areas of Lucknow.</p>
         </div>
     </div>
 </div>
            <div class="col-lg-12">
                <div class="rounded-4 overflow-hidden shadow-sm">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.245897704151!2d80.8973748!3d26.800297899999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bff979032b0a5%3A0xf5bc3720f8edeb7e!2sHotel%20Ranbirs%20Alambagh!5e0!3m2!1sen!2sin!4v1745304836077!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        title="Hotel Ranbirs Alambagh Location Map"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("layout/footer.php"); ?>