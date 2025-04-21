<?php include("layout/header.php"); ?>

<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
    <div class="hero-text text-center">
        <style>
            .hero-text h1 {
                font-family: 'Lora', serif;
                font-weight: 700;
                font-size: 4.5rem;
                letter-spacing: 1px;
                margin-bottom: 1rem;
                text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
                line-height: 1.2;
            }
            
            .alambagh {
                font-size: 3.5rem !important;
                display: inline-block;
                background: linear-gradient(135deg, #dfa974 0%, #a67c52 100%);
                -webkit-background-clip: text;
                background-clip: text;
                color: transparent;
                text-shadow: none;
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
                background: #dfa974;
                border-radius: 3px;
            }
            
            .hero-button {
                margin-top: 2.5rem;
                display: flex;
                justify-content: center;
                gap: 20px;
                flex-wrap: wrap;
            }
            
            .hero-button .primary-btn {
                padding: 15px 35px;
                font-size: 1.1rem;
                border-radius: 50px;
                transition: all 0.4s ease;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                position: relative;
                overflow: hidden;
            }
            
            .hero-button .primary-btn:hover {
                transform: translateY(-3px);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            }
            
            .hero-button .primary-btn::after {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(255, 255, 255, 0.1);
                transform: translateX(-100%);
                transition: transform 0.4s ease;
            }
            
            .hero-button .primary-btn:hover::after {
                transform: translateX(0);
            }
            
            @media (max-width: 768px) {
                .hero-text h1 {
                    font-size: 3rem;
                }
                
                .alambagh {
                    font-size: 2.5rem !important;
                }
                
                .hero-text p {
                    font-size: 1.2rem;
                    padding: 0 20px;
                }
                
                .hero-button {
                    flex-direction: column;
                    align-items: center;
                    gap: 15px;
                }
            }
        </style>
        
        <h1>Hotel Ranbirs <span class="alambagh">Alambagh</span></h1>
        
        <p>Experience Luxury Redefined at Lucknow's Premier Heritage Hotel</p>
        
        <div class="hero-button">
            <a href="#" class="primary-btn mx-3">
                <i class="fa fa-compass mr-2"></i> Explore Our Hotel
            </a>
            <a href="#" class="primary-btn">
                <i class="fa fa-calendar-check mr-2"></i> Book Your Stay
            </a>
        </div>
    </div>
</div>
            </div>
            <!-- <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3>Booking Your Hotel</h3>
                        <form action="#">
                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="text" class="date-input" id="date-in">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="text" class="date-input" id="date-out">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="select-option">
                                <label for="guest">Guests:</label>
                                <select id="guest">
                                    <option value="">2 Adults</option>
                                    <option value="">3 Adults</option>
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="room">Room:</label>
                                <select id="room">
                                    <option value="">1 Room</option>
                                    <option value="">2 Room</option>
                                </select>
                            </div>
                            <button type="submit">Check Availability</button>
                        </form>
                    </div>
                </div> -->
        </div>
    </div>
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/hotelranbirs_slider1.jpeg"></div>
        <div class="hs-item set-bg" data-setbg="img/footer-bg.jpg"></div>
        <div class="hs-item set-bg" data-setbg="img/2025-02-11.jpg"></div>
    </div>
</section>
<!-- Hero Section End -->

<!-- About Us Section Begin -->
<section class="aboutus-section spad" style="background: linear-gradient(135deg, #f9f9f9 0%, #ffffff 100%); padding: 100px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="about-text" style="position: relative; z-index: 2;">
                    <div class="section-title">
                        <span style="color: #d4af37; font-size: 18px; letter-spacing: 2px; font-weight: 600;">DISCOVER OUR STORY</span>
                        <h2 style="font-size: 42px; line-height: 1.2; margin: 20px 0 25px; position: relative;">
                            <span style="color: #222;">Experience Luxury at</span><br>
                            <span style="color: #d4af37; position: relative;">Hotel Ranbirs
                                <svg width="120" height="12" viewBox="0 0 120 12" style="position: absolute; bottom: -10px; left: 0;">
                                    <path d="M0,6 Q30,0 60,6 T120,6" stroke="#d4af37" stroke-width="2" fill="none"/>
                                </svg>
                            </span>
                        </h2>
                    </div>
                    <p class="lead-text" style="font-size: 18px; line-height: 1.8; color: #555; margin-bottom: 30px;">
                        Nestled in the heart of Alambagh, Hotel Ranbirs stands as a beacon of refined hospitality, 
                        where timeless elegance meets modern comfort.
                    </p>
                    <div class="about-features" style="margin-bottom: 30px;">
                        <div class="feature-item" style="display: flex; margin-bottom: 15px;">
                            <div style="margin-right: 15px; color: #d4af37; font-size: 24px;">✓</div>
                            <p style="margin: 0; color: #555;">Luxurious accommodations with bespoke amenities</p>
                        </div>
                        <div class="feature-item" style="display: flex; margin-bottom: 15px;">
                            <div style="margin-right: 15px; color: #d4af37; font-size: 24px;">✓</div>
                            <p style="margin: 0; color: #555;">Award-winning multi-cuisine restaurant</p>
                        </div>
                        <div class="feature-item" style="display: flex;">
                            <div style="margin-right: 15px; color: #d4af37; font-size: 24px;">✓</div>
                            <p style="margin: 0; color: #555;">State-of-the-art event spaces for any occasion</p>
                        </div>
                    </div>
                    <a href="#" class="primary-btn about-btn" style="display: inline-block; background: #d4af37; color: #fff; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-weight: 600; letter-spacing: 1px; transition: all 0.3s; border: 2px solid #d4af37;">
                        Explore More <i class="fas fa-chevron-right" style="margin-left: 8px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1 mb-lg-0 mb-5">
                <div class="about-gallery" style="position: relative;">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="gallery-item" style="overflow: hidden; border-radius: 10px; box-shadow: 0 15px 30px rgba(0,0,0,0.1);">
                                <img src="img/restaurant-768x1024.jpeg" alt="Luxury Restaurant" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                                <div class="img-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                                    <span style="color: #fff; font-weight: 600; font-size: 18px;">Gourmet Dining</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-4">
                            <div class="gallery-item" style="overflow: hidden; border-radius: 10px; box-shadow: 0 15px 30px rgba(0,0,0,0.1);">
                                <img src="img/rooms_icon.jpeg" alt="Luxury Suite" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                                <div class="img-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                                    <span style="color: #fff; font-weight: 600; font-size: 18px;">Elegant Rooms</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="gallery-item" style="overflow: hidden; border-radius: 10px; box-shadow: 0 15px 30px rgba(0,0,0,0.1);">
                                <img src="img/food1.avif" alt="Event Space" style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.5s;">
                                <div class="img-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                                    <span style="color: #fff; font-weight: 600; font-size: 18px;">Event Spaces</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="gallery-item" style="overflow: hidden; border-radius: 10px; box-shadow: 0 15px 30px rgba(0,0,0,0.1);">
                                <img src="img/banquet.avif" alt="Wellness Spa" style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.5s;">
                                <div class="img-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                                    <span style="color: #fff; font-weight: 600; font-size: 18px;">Wellness Spa</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="decoration-element" style="position: absolute; width: 150px; height: 150px; border: 15px solid rgba(212, 175, 55, 0.2); top: -20px; right: -20px; z-index: -1;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .gallery-item:hover img {
        transform: scale(1.05);
    }
    .gallery-item:hover .img-overlay {
        opacity: 1;
    }
    .primary-btn:hover {
        background: transparent;
        color: #d4af37;
    }
</style>
<!-- About Us Section End -->

<!-- Services Section End -->
<section class="services-section spad">
    <style>
        .services-section {
            background: #f9f9f9;
            position: relative;
            overflow: hidden;
        }
        
        .services-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('img/service-bg-pattern.png') repeat;
            opacity: 0.03;
            z-index: 0;
        }
        
        .section-title span {
            font-size: 16px;
            color: #dfa974;
            font-weight: 600;
            letter-spacing: 3px;
            text-transform: uppercase;
            display: block;
            margin-bottom: 10px;
        }
        
        .section-title h2 {
            font-size: 42px;
            color: #19191a;
            position: relative;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        
        .section-title h2::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: #dfa974;
        }
        
        .service-item {
            background: #fff;
            padding: 40px 30px;
            margin-bottom: 30px;
            border-radius: 8px;
            text-align: center;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            z-index: 1;
        }
        
        .service-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(223,169,116,0.1) 0%, rgba(255,255,255,0) 100%);
            z-index: -1;
            opacity: 0;
            transition: all 0.4s ease;
        }
        
        .service-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .service-item:hover::before {
            opacity: 1;
        }
        
        .service-item i {
            font-size: 60px;
            color: #dfa974;
            margin-bottom: 25px;
            display: inline-block;
            transition: all 0.4s ease;
        }
        
        .service-item:hover i {
            transform: scale(1.1);
            color: #c58f5a;
        }
        
        .service-item h4 {
            font-size: 22px;
            color: #19191a;
            margin-bottom: 15px;
            font-weight: 600;
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
            background: #dfa974;
            transition: all 0.4s ease;
        }
        
        .service-item:hover h4::after {
            width: 60px;
            background: #c58f5a;
        }
        
        .service-item p {
            color: #6b6b6b;
            font-size: 16px;
            line-height: 1.7;
            margin-bottom: 0;
        }
        
        /* Add decorative elements */
        .service-decor {
            position: absolute;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: rgba(223,169,116,0.1);
            z-index: 0;
        }
        
        .decor-1 {
            top: -50px;
            right: -50px;
        }
        
        .decor-2 {
            bottom: -30px;
            left: -30px;
            width: 60px;
            height: 60px;
        }
        
        @media (max-width: 767px) {
            .section-title h2 {
                font-size: 32px;
            }
            
            .service-item {
                padding: 30px 20px;
            }
            
            .service-item i {
                font-size: 50px;
                margin-bottom: 20px;
            }
        }
    </style>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span>Premium Hospitality</span>
                    <h2>Our Exclusive Services</h2>
                    <p class="mt-3">Experience unparalleled comfort with our curated selection of luxury amenities</p>
                </div>
            </div>
        </div>
        <div class="row position-relative">
            <div class="service-decor decor-1"></div>
            <div class="service-decor decor-2"></div>
            
            <!-- Service Item 1 -->
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-036-parking"></i>
                    <h4>Secure Parking</h4>
                    <p>24/7 monitored parking facility with CCTV surveillance and valet service for complete peace of mind during your stay.</p>
                </div>
            </div>
            
            <!-- Service Item 2 -->
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-033-dinner"></i>
                    <h4>Gourmet Dining</h4>
                    <p>Our award-winning restaurant serves exquisite local and international cuisine prepared by master chefs using seasonal ingredients.</p>
                </div>
            </div>
            
            <!-- Service Item 3 -->
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-026-bed"></i>
                    <h4>Luxury Suites</h4>
                    <p>Indulge in our spacious suites featuring premium bedding, smart climate control, and breathtaking city views for ultimate relaxation.</p>
                </div>
            </div>
            
            <!-- Service Item 4 -->
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-024-towel"></i>
                    <h4>Premium Laundry</h4>
                    <p>Professional laundry service with eco-friendly detergents and same-day return for your convenience and comfort.</p>
                </div>
            </div>
            
            <!-- Service Item 5 -->
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-044-clock-1"></i>
                    <h4>Concierge Service</h4>
                    <p>Our dedicated concierge team is available 24/7 to arrange tours, transportation, and exclusive local experiences.</p>
                </div>
            </div>
            
            <!-- Service Item 6 -->
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-012-cocktail"></i>
                    <h4>Sky Lounge</h4>
                    <p>Rooftop cocktail bar featuring signature drinks, live music, and panoramic views of the city skyline.</p>
                </div>
            </div>
            
            <!-- Service Item 7 -->
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-015-television"></i>
                    <h4>Entertainment</h4>
                    <p>55" Smart TVs with international channels, streaming services, and premium movie selections in every suite.</p>
                </div>
            </div>
            
            <!-- Service Item 8 -->
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-003-wifi"></i>
                    <h4>Ultra-Fast WiFi</h4>
                    <p>Enterprise-grade fiber internet with dedicated bandwidth for seamless streaming and video conferencing.</p>
                </div>
            </div>
            
            <!-- Service Item 9 -->
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-035-business-center"></i>
                    <h4>Executive Business</h4>
                    <p>State-of-the-art meeting rooms with video conferencing, secretarial support, and premium office amenities.</p>
                </div>
            </div>
        </div>
        
        <!-- CTA Button -->
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <a href="#" class="primary-btn" style="padding: 15px 40px; font-size: 18px;">
                    <i class="fa fa-concierge-bell mr-2"></i> Explore All Amenities
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Home Room Section Begin -->
<section class="hp-room-section" style="padding: 100px 0; background: #f9f9f9;">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span style="color: #d4af37; font-size: 18px; letter-spacing: 2px; font-weight: 600;">OUR ACCOMMODATIONS</span>
            <h2 style="font-size: 42px; margin: 15px 0 20px;">Luxurious Rooms & Suites</h2>
            <p style="max-width: 700px; margin: 0 auto; color: #666;">Experience unparalleled comfort in our meticulously designed rooms, blending contemporary elegance with traditional hospitality.</p>
        </div>
        
        <div class="row g-4">
            <!-- Room 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="room-card" style="background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s, box-shadow 0.3s;">
                    <div class="room-img" style="height: 250px; overflow: hidden; position: relative;">
                        <img src="img/room1.avif" alt="Deluxe Twin Room" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s;">
                        <div class="price-tag" style="position: absolute; top: 20px; right: 20px; background: rgba(212, 175, 55, 0.95); color: #fff; padding: 8px 15px; border-radius: 30px; font-weight: 600; font-size: 18px;">
                            ₹1,878 <span style="font-size: 14px;">/night</span>
                        </div>
                        <div class="room-overlay" style="position: absolute; bottom: 0; left: 0; width: 100%; background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 100%); padding: 20px; color: #fff;">
                            <h3 style="margin: 0; font-size: 24px;">Deluxe Twin Room</h3>
                        </div>
                    </div>
                    <div class="room-details" style="padding: 25px;">
                        <div class="room-features" style="margin-bottom: 20px;">
                            <div class="feature-item" style="display: flex; align-items: center; margin-bottom: 10px;">
                                <i class="fas fa-ruler-combined" style="color: #d4af37; width: 25px; margin-right: 10px;"></i>
                                <span style="color: #555;">120 sq.ft</span>
                            </div>
                            <div class="feature-item" style="display: flex; align-items: center; margin-bottom: 10px;">
                                <i class="fas fa-user-friends" style="color: #d4af37; width: 25px; margin-right: 10px;"></i>
                                <span style="color: #555;">Max 5 persons</span>
                            </div>
                            <div class="feature-item" style="display: flex; align-items: center; margin-bottom: 10px;">
                                <i class="fas fa-bed" style="color: #d4af37; width: 25px; margin-right: 10px;"></i>
                                <span style="color: #555;">King Beds</span>
                            </div>
                            <div class="feature-item" style="display: flex; align-items: flex-start;">
                                <i class="fas fa-wifi" style="color: #d4af37; width: 25px; margin-right: 10px; margin-top: 3px;"></i>
                                <span style="color: #555;">Wifi, Television, Bathroom, AC, Room Service</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="room-btn" style="display: inline-block; background: #d4af37; color: #fff; padding: 10px 25px; border-radius: 30px; text-decoration: none; font-weight: 600; transition: all 0.3s; border: 2px solid #d4af37;">
                                Book Now
                            </a>
                            <a href="#" style="color: #d4af37; font-weight: 600; text-decoration: none; display: flex; align-items: center;">
                                Details <i class="fas fa-arrow-right" style="margin-left: 5px; font-size: 12px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Room 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="room-card" style="background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s, box-shadow 0.3s;">
                    <div class="room-img" style="height: 250px; overflow: hidden; position: relative;">
                        <img src="img/hotelranbirs_slider1.jpeg" alt="Deluxe Room" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s;">
                        <div class="price-tag" style="position: absolute; top: 20px; right: 20px; background: rgba(212, 175, 55, 0.95); color: #fff; padding: 8px 15px; border-radius: 30px; font-weight: 600; font-size: 18px;">
                            ₹2,179 <span style="font-size: 14px;">/night</span>
                        </div>
                        <div class="room-overlay" style="position: absolute; bottom: 0; left: 0; width: 100%; background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 100%); padding: 20px; color: #fff;">
                            <h3 style="margin: 0; font-size: 24px;">Deluxe Room</h3>
                        </div>
                    </div>
                    <div class="room-details" style="padding: 25px;">
                        <div class="room-features" style="margin-bottom: 20px;">
                            <div class="feature-item" style="display: flex; align-items: center; margin-bottom: 10px;">
                                <i class="fas fa-ruler-combined" style="color: #d4af37; width: 25px; margin-right: 10px;"></i>
                                <span style="color: #555;">150 sq.ft</span>
                            </div>
                            <div class="feature-item" style="display: flex; align-items: center; margin-bottom: 10px;">
                                <i class="fas fa-user-friends" style="color: #d4af37; width: 25px; margin-right: 10px;"></i>
                                <span style="color: #555;">Max 5 persons</span>
                            </div>
                            <div class="feature-item" style="display: flex; align-items: center; margin-bottom: 10px;">
                                <i class="fas fa-bed" style="color: #d4af37; width: 25px; margin-right: 10px;"></i>
                                <span style="color: #555;">King Beds</span>
                            </div>
                            <div class="feature-item" style="display: flex; align-items: flex-start;">
                                <i class="fas fa-wifi" style="color: #d4af37; width: 25px; margin-right: 10px; margin-top: 3px;"></i>
                                <span style="color: #555;">Wifi, Television, Bathroom, AC, Mini Bar</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="room-btn" style="display: inline-block; background: #d4af37; color: #fff; padding: 10px 25px; border-radius: 30px; text-decoration: none; font-weight: 600; transition: all 0.3s; border: 2px solid #d4af37;">
                                Book Now
                            </a>
                            <a href="#" style="color: #d4af37; font-weight: 600; text-decoration: none; display: flex; align-items: center;">
                                Details <i class="fas fa-arrow-right" style="margin-left: 5px; font-size: 12px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Room 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="room-card" style="background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 30px rgba(0,0,0,0.08); transition: transform 0.3s, box-shadow 0.3s;">
                    <div class="room-img" style="height: 250px; overflow: hidden; position: relative;">
                        <img src="img/rooms_icon.jpeg" alt="Executive Room" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s;">
                        <div class="price-tag" style="position: absolute; top: 20px; right: 20px; background: rgba(212, 175, 55, 0.95); color: #fff; padding: 8px 15px; border-radius: 30px; font-weight: 600; font-size: 18px;">
                            ₹2,690+ <span style="font-size: 14px;">/night</span>
                        </div>
                        <div class="room-overlay" style="position: absolute; bottom: 0; left: 0; width: 100%; background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 100%); padding: 20px; color: #fff;">
                            <h3 style="margin: 0; font-size: 24px;">Executive Room</h3>
                        </div>
                    </div>
                    <div class="room-details" style="padding: 25px;">
                        <div class="room-features" style="margin-bottom: 20px;">
                            <div class="feature-item" style="display: flex; align-items: center; margin-bottom: 10px;">
                                <i class="fas fa-ruler-combined" style="color: #d4af37; width: 25px; margin-right: 10px;"></i>
                                <span style="color: #555;">180 sq.ft</span>
                            </div>
                            <div class="feature-item" style="display: flex; align-items: center; margin-bottom: 10px;">
                                <i class="fas fa-user-friends" style="color: #d4af37; width: 25px; margin-right: 10px;"></i>
                                <span style="color: #555;">Max 5 persons</span>
                            </div>
                            <div class="feature-item" style="display: flex; align-items: center; margin-bottom: 10px;">
                                <i class="fas fa-bed" style="color: #d4af37; width: 25px; margin-right: 10px;"></i>
                                <span style="color: #555;">King Beds</span>
                            </div>
                            <div class="feature-item" style="display: flex; align-items: flex-start;">
                                <i class="fas fa-wifi" style="color: #d4af37; width: 25px; margin-right: 10px; margin-top: 3px;"></i>
                                <span style="color: #555;">Wifi, Television, Bathroom, AC, Mini Bar, Lounge Access</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="room-btn" style="display: inline-block; background: #d4af37; color: #fff; padding: 10px 25px; border-radius: 30px; text-decoration: none; font-weight: 600; transition: all 0.3s; border: 2px solid #d4af37;">
                                Book Now
                            </a>
                            <a href="#" style="color: #d4af37; font-weight: 600; text-decoration: none; display: flex; align-items: center;">
                                Details <i class="fas fa-arrow-right" style="margin-left: 5px; font-size: 12px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="#" class="view-all-btn" style="display: inline-block; padding: 12px 30px; background: transparent; color: #d4af37; border: 2px solid #d4af37; border-radius: 30px; font-weight: 600; text-decoration: none; transition: all 0.3s;">
                View All Rooms <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
            </a>
        </div>
    </div>
</section>

<style>
    .room-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    }
    .room-img img:hover {
        transform: scale(1.1);
    }
    .room-btn:hover {
        background: transparent !important;
        color: #d4af37 !important;
    }
    .view-all-btn:hover {
        background: #d4af37 !important;
        color: #fff !important;
    }
</style>

<!-- Testimonial Section Begin -->
<section class="testimonial-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Testimonials</span>
                    <h2>What Customers Say?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="testimonial-slider owl-carousel">
                    <div class="ts-item">
                        <p>"Wonderful Stay & Excellent Service!"
                            “Hotel Ranbirs Alambagh truly exceeded my expectations. The rooms were clean, modern, and
                            very comfortable. The staff was always polite and ready to help. Location is perfect if
                            you're traveling via Lucknow airport or railway station.”</p>
                        <div class="ti-author">
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star-half_alt"></i>
                            </div>
                            <h5> - Ritika Sharma, Delhi</h5>
                        </div>
                        <img src="img/testimonial-logo.png" alt="">
                    </div>
                    <div class="ts-item">
                        <p>"Best in Alambagh!"
                            “I travel to Lucknow frequently for work and Ranbirs has become my go-to hotel. The Wi-Fi is
                            fast, the rooms are spacious, and their food is delicious. Great value for money!”
                        </p>
                        <div class="ti-author">
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star-half_alt"></i>
                            </div>
                            <h5> - — Amit Khanna, Gurgaon</h5>
                        </div>
                        <img src="img/testimonial-logo.png" alt="">
                    </div>
                    <div class="ts-item">
                        <p>""Perfect for Family Trips"
“We stayed here during our family trip to Lucknow. The staff was very courteous, and the housekeeping service was prompt. My kids loved the food and the cozy vibe of the room. Highly recommended!”

                        </p>
                        <div class="ti-author">
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star-half_alt"></i>
                            </div>
                            <h5> — Poonam & Rajeev Verma, Kanpur</h5>
                        </div>
                        <img src="img/testimonial-logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->

<!-- Blog Section Begin -->
<!-- <section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Hotel News</span>
                    <h2>Our Blog & Event</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="img/about-6.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Travel Trip</span>
                        <h4><a href="#">Tremblant In Canada</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="img/blog-2-1-768x512.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Camping</span>
                        <h4><a href="#">Choosing A Static Caravan</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="img/blog-3-1-1-1024x683.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Event</span>
                        <h4><a href="#">Copper Canyon</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 21th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="blog-item small-size set-bg" data-setbg="img/blog-4-1-768x512.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Event</span>
                        <h4><a href="#">Trip To Iqaluit In Nunavut A Canadian Arctic City</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 08th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item small-size set-bg" data-setbg="img/about-7.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Travel</span>
                        <h4><a href="#">Traveling To Barcelona</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 12th April, 2019</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Blog Section End -->

<?php include("layout/footer.php"); ?>