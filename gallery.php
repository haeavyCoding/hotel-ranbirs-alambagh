<?php include("layout/header.php"); ?>
<head>
    <title>Photo Gallery | Hotel Ranbirs Alambagh - Luxury Rooms, Banquets & Dining in Lucknow</title>
    <meta name="description" content="Explore our photo gallery showcasing luxury rooms, elegant banquet halls, fine dining restaurant and events at Hotel Ranbirs Alambagh, the best hotel near Phoenix Mall Lucknow.">
    <link rel="canonical" href="https://hotelranbirsalambagh.com/gallery.php" />
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Schema Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Hotel",
      "name": "Hotel Ranbirs Alambagh",
      "image": [
        "https://hotelranbirsalambagh.com/img/room1.avif",
        "https://hotelranbirsalambagh.com/img/banquet2.jpg",
        "https://hotelranbirsalambagh.com/img/restaurant2.jpg"
      ],
      "description": "Luxury hotel offering premium accommodations, banquet facilities and fine dining in Alambagh, Lucknow",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Alambagh",
        "addressLocality": "Lucknow",
        "addressRegion": "Uttar Pradesh",
        "postalCode": "226012",
        "addressCountry": "India"
      }
    }
    </script>
</head>

<!-- Breadcrumb Section with AOS -->
<div class="breadcrumb-section" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('img/banner1.jpeg'); background-size: cover; background-position: center; padding: 120px 0; color: #fff;" data-aos="fade">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h1 style="font-size: 48px; margin-bottom: 20px; font-weight: 700; color: white;" data-aos="fade-up">Photo Gallery</h1>
                    <div class="bt-option" style="font-size: 18px;" data-aos="fade-up" data-aos-delay="100">
                        <a href="./index.php" style="color: #d4af37; text-decoration: none;">Home</a>
                        <span style="color: #fff; margin: 0 10px;">/</span>
                        <span>Gallery</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Filter Section with AOS -->
<section class="gallery-filter-section" style="padding: 50px 0;" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="gallery-filter text-center">
                    <h2 style="font-size: 2rem; margin-bottom: 30px; color: #222;" data-aos="fade-up">Explore Our Facilities</h2>
                    <ul class="filter-controls" style="list-style: none; padding: 0; margin: 0 0 30px 0; display: flex; justify-content: center; flex-wrap: wrap;" data-aos="fade-up" data-aos-delay="100">
                        <li class="active" data-filter="*" style="margin: 5px 10px; cursor: pointer; padding: 8px 20px; border-radius: 30px; background: #d4af37; color: #fff; font-weight: 600; transition: all 0.3s;">All</li>
                        <li data-filter=".rooms" style="margin: 5px 10px; cursor: pointer; padding: 8px 20px; border-radius: 30px; background: #f5f5f5; color: #333; font-weight: 600; transition: all 0.3s;">Rooms & Suites</li>
                        <li data-filter=".banquet" style="margin: 5px 10px; cursor: pointer; padding: 8px 20px; border-radius: 30px; background: #f5f5f5; color: #333; font-weight: 600; transition: all 0.3s;">Banquet Halls</li>
                        <li data-filter=".restaurant" style="margin: 5px 10px; cursor: pointer; padding: 8px 20px; border-radius: 30px; background: #f5f5f5; color: #333; font-weight: 600; transition: all 0.3s;">Restaurant</li>
                        <li data-filter=".events" style="margin: 5px 10px; cursor: pointer; padding: 8px 20px; border-radius: 30px; background: #f5f5f5; color: #333; font-weight: 600; transition: all 0.3s;">Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section with AOS -->
<section class="gallery-section" style="padding: 0 0 80px 0;">
    <div class="container-fluid">
        <div class="row gallery-grid">
            <!-- Rooms Gallery -->
            <div class="col-lg-3 col-md-4 col-sm-6 grid-item rooms" style="padding: 5px;" data-aos="fade-up" data-aos-delay="100">
                <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                    <img src="img/room1.avif" alt="Deluxe Room at Hotel Ranbirs Alambagh - Luxury Accommodation in Lucknow" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                    <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                        <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                            <h3 style="margin-bottom: 10px; font-size: 22px;">Deluxe Room</h3>
                            <p style="margin: 0;">Experience luxury in our spacious rooms</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 grid-item rooms" style="padding: 5px;" data-aos="fade-up" data-aos-delay="150">
                <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                    <img src="img/room2.avif" alt="Executive Suite at Hotel Ranbirs Alambagh - Premium Room in Lucknow" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                    <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                        <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                            <h3 style="margin-bottom: 10px; font-size: 22px;">Executive Suite</h3>
                            <p style="margin: 0;">Premium accommodation with extra space</p>
                        </div>
                    </div>
                </div>
            </div>
            

                <div class="col-lg-3 col-md-4 col-sm-6 grid-item rooms" style="padding: 5px;">
                    <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                        <img src="img/room3.jpg" alt="Luxury bathroom in our rooms" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                            <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                                <h4 style="margin-bottom: 10px; font-size: 22px;">Luxury Bathroom</h4>
                                <p style="margin: 0;">Modern amenities for your comfort</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 grid-item rooms" style="padding: 5px;">
                    <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                        <img src="img/hotelranbirs_slider1.jpeg" alt="Room service at Hotel Ranbirs" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                            <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                                <h4 style="margin-bottom: 10px; font-size: 22px;">Room Service</h4>
                                <p style="margin: 0;">Enjoy delicious meals in your room</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Banquet Gallery -->
                <div class="col-lg-3 col-md-4 col-sm-6 grid-item banquet" style="padding: 5px;">
                    <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                        <img src="img/banquet2.jpg" alt="Birthday party setup in banquet hall" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                            <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                                <h4 style="margin-bottom: 10px; font-size: 22px;">Birthday Celebrations</h4>
                                <p style="margin: 0;">Perfect venue for memorable parties</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 grid-item banquet" style="padding: 5px;">
                    <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                        <img src="img/bavnquet_ranbir-alambagh-1024x768 (1).jpeg" alt="Wedding reception in our banquet" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                            <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                                <h4 style="margin-bottom: 10px; font-size: 22px;">Wedding Receptions</h4>
                                <p style="margin: 0;">Elegant space for your special day</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 grid-item banquet" style="padding: 5px;">
                    <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                        <img src="img/banquet.avif" alt="Corporate event in banquet hall" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                            <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                                <h4 style="margin-bottom: 10px; font-size: 22px;">Corporate Events</h4>
                                <p style="margin: 0;">Professional setting for business meetings</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 grid-item banquet" style="padding: 5px;">
                    <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                        <img src="img/banqqut1.jpg" alt="Banquet hall decoration" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                            <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                                <h4 style="margin-bottom: 10px; font-size: 22px;">Elegant Decor</h4>
                                <p style="margin: 0;">Beautifully decorated for every occasion</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Restaurant Gallery -->
                <div class="col-lg-3 col-md-4 col-sm-6 grid-item restaurant" style="padding: 5px;">
                    <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                        <img src="img/restaurant2.jpg" alt="Restaurant seating and table layout" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                            <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                                <h4 style="margin-bottom: 10px; font-size: 22px;">Dining Area</h4>
                                <p style="margin: 0;">Comfortable seating for all guests</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 grid-item restaurant" style="padding: 5px;">
                    <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                        <img src="img/restaurant3.avif" alt="Private dining area in restaurant" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                            <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                                <h4 style="margin-bottom: 10px; font-size: 22px;">Private Dining</h4>
                                <p style="margin: 0;">Exclusive space for special occasions</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 grid-item restaurant" style="padding: 5px;">
                    <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                        <img src="img/restaurant1.jpg" alt="Chef preparing food in our kitchen" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                            <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                                <h4 style="margin-bottom: 10px; font-size: 22px;">Our Chefs</h4>
                                <p style="margin: 0;">Expert preparation of delicious dishes</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 grid-item restaurant" style="padding: 5px;">
                    <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                        <img src="img\food3.avif" alt="Signature dishes at our restaurant" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                            <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                                <h4 style="margin-bottom: 10px; font-size: 22px;">Signature Dishes</h4>
                                <p style="margin: 0;">Our most popular culinary creations</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Events Gallery -->
                <div class="col-lg-3 col-md-4 col-sm-6 grid-item events" style="padding: 5px;">
                    <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                        <img src="img/event1.jpg" alt="Couple celebrating anniversary at Hotel Ranbirs" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                            <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                                <h4 style="margin-bottom: 10px; font-size: 22px;">Anniversary Celebration</h4>
                                <p style="margin: 0;">Creating beautiful memories</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 grid-item events" style="padding: 5px;">
                    <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                        <img src="img/event2.jpg" alt="Family gathering at our hotel" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                            <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                                <h4 style="margin-bottom: 10px; font-size: 22px;">Family Gatherings</h4>
                                <p style="margin: 0;">Perfect venue for family reunions</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 grid-item events" style="padding: 5px;">
                    <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                        <img src="img/event2.jpg" alt="Corporate conference at Hotel Ranbirs" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                            <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                                <h4 style="margin-bottom: 10px; font-size: 22px;">Corporate Conferences</h4>
                                <p style="margin: 0;">Professional setting for business events</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 grid-item events" style="padding: 5px;">
                    <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                        <img src="img/event1.jpg" alt="Kitty party celebration" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                            <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                                <h4 style="margin-bottom: 10px; font-size: 22px;">Kitty Parties</h4>
                                <p style="margin: 0;">Fun gatherings with friends</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Modal -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="background: transparent; border: none;">
                <div class="modal-body text-center">
                    <img src="" id="modalImage" style="max-width: 100%; max-height: 80vh; border-radius: 5px;">
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <section class="cta-section" style="padding: 80px 0; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/banner1.jpeg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 style="font-size: 42px; color: #fff; margin-bottom: 20px;">Want to See More?</h2>
                    <p style="color: #fff; font-size: 18px; margin-bottom: 30px; text-align: center;">Visit us to experience the luxury and comfort of Hotel Ranbirs firsthand.</p>
                    <a href="contact.php" style="display: inline-block; background: #d4af37; color: #fff; padding: 15px 30px; border-radius: 30px; text-decoration: none; font-weight: 600; font-size: 18px; transition: all 0.3s;">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <style>
        .filter-controls li:hover {
            background: #d4af37 !important;
            color: #fff !important;
        }
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        .cta-section a:hover {
            background: #c19b2e;
        }
        @media (max-width: 576px) {
        h2 {
            font-size: 1.7rem !important;
        }
        section{
            overflow-x: hidden;
        }

        p {
            font-size: .9rem;
        }

        * {
            font-size: 15px;
        }
        .gallery-filter ul li{
            margin: 5px 5px !important;
            padding: 7px 8px !important;
        }
    }
    </style>

    <!-- JavaScript for Gallery Filter and Modal -->
    <script>
        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterControls = document.querySelectorAll('.filter-controls li');
            const galleryItems = document.querySelectorAll('.gallery-grid .grid-item');
            
            filterControls.forEach(control => {
                control.addEventListener('click', function() {
                    // Update active class
                    filterControls.forEach(c => c.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Get filter value
                    const filterValue = this.getAttribute('data-filter');
                    
                    // Filter items
                    galleryItems.forEach(item => {
                        if (filterValue === '*' || item.classList.contains(filterValue.substring(1))) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
            
            // Modal functionality
            const galleryItemsClickable = document.querySelectorAll('.gallery-item');
            const modal = new bootstrap.Modal(document.getElementById('galleryModal'));
            const modalImage = document.getElementById('modalImage');
            
            galleryItemsClickable.forEach(item => {
                item.addEventListener('click', function() {
                    const imgSrc = this.querySelector('img').getAttribute('src');
                    modalImage.setAttribute('src', imgSrc);
                    modal.show();
                });
            });
        });
    </script>

<?php include("layout/footer.php"); ?>