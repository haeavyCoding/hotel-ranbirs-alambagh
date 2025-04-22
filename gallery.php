<?php include("layout/header.php"); ?>
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('img/gallery-bg.jpg'); background-size: cover; background-position: center; padding: 120px 0; color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2 style="font-size: 48px; margin-bottom: 20px; font-weight: 700; color: white;">Photo Gallery</h2>
                        <div class="bt-option" style="font-size: 18px;">
                            <a href="./home.html" style="color: #d4af37; text-decoration: none;">Home</a>
                            <span style="color: #fff; margin: 0 10px;">/</span>
                            <span>Gallery</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Gallery Filter Section -->
    <section class="gallery-filter-section" style="padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-filter text-center">
                        <ul class="filter-controls" style="list-style: none; padding: 0; margin: 0 0 30px 0; display: flex; justify-content: center; flex-wrap: wrap;">
                            <li class="active" data-filter="*" style="margin: 5px 10px; cursor: pointer; padding: 8px 20px; border-radius: 30px; background: #d4af37; color: #fff; font-weight: 600; transition: all 0.3s;">All</li>
                            <li data-filter=".rooms" style="margin: 5px 10px; cursor: pointer; padding: 8px 20px; border-radius: 30px; background: #f5f5f5; color: #333; font-weight: 600; transition: all 0.3s;">Rooms</li>
                            <li data-filter=".banquet" style="margin: 5px 10px; cursor: pointer; padding: 8px 20px; border-radius: 30px; background: #f5f5f5; color: #333; font-weight: 600; transition: all 0.3s;">Banquet</li>
                            <li data-filter=".restaurant" style="margin: 5px 10px; cursor: pointer; padding: 8px 20px; border-radius: 30px; background: #f5f5f5; color: #333; font-weight: 600; transition: all 0.3s;">Restaurant</li>
                            <li data-filter=".events" style="margin: 5px 10px; cursor: pointer; padding: 8px 20px; border-radius: 30px; background: #f5f5f5; color: #333; font-weight: 600; transition: all 0.3s;">Events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section" style="padding: 0 0 80px 0;">
        <div class="container-fluid">
            <div class="row gallery-grid">
                <!-- Rooms Gallery -->
                <div class="col-lg-3 col-md-4 col-sm-6 grid-item rooms" style="padding: 5px;">
                    <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                        <img src="img/gallery/room1.jpg" alt="Deluxe Room interior" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                            <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                                <h4 style="margin-bottom: 10px; font-size: 22px;">Deluxe Room</h4>
                                <p style="margin: 0;">Experience luxury in our spacious rooms</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 grid-item rooms" style="padding: 5px;">
                    <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                        <img src="img/gallery/room2.jpg" alt="Executive Suite at Hotel Ranbirs" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s;">
                            <div class="gallery-content text-center" style="padding: 20px; color: #fff;">
                                <h4 style="margin-bottom: 10px; font-size: 22px;">Executive Suite</h4>
                                <p style="margin: 0;">Premium accommodation with extra space</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 grid-item rooms" style="padding: 5px;">
                    <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 5px;">
                        <img src="img/gallery/room3.jpg" alt="Luxury bathroom in our rooms" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
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
                        <img src="img/gallery/room4.jpg" alt="Room service at Hotel Ranbirs" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
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
                        <img src="img/gallery/banquet1.jpg" alt="Birthday party setup in banquet hall" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
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
                        <img src="img/gallery/banquet2.jpg" alt="Wedding reception in our banquet" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
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
                        <img src="img/gallery/banquet3.jpg" alt="Corporate event in banquet hall" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
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
                        <img src="img/gallery/banquet4.jpg" alt="Banquet hall decoration" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
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
                        <img src="img/gallery/restaurant1.jpg" alt="Restaurant seating and table layout" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
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
                        <img src="img/gallery/restaurant2.jpg" alt="Private dining area in restaurant" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
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
                        <img src="img/gallery/restaurant3.jpg" alt="Chef preparing food in our kitchen" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
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
                        <img src="img/gallery/restaurant4.jpg" alt="Signature dishes at our restaurant" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
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
                        <img src="img/gallery/event1.jpg" alt="Couple celebrating anniversary at Hotel Ranbirs" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
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
                        <img src="img/gallery/event2.jpg" alt="Family gathering at our hotel" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
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
                        <img src="img/gallery/event3.jpg" alt="Corporate conference at Hotel Ranbirs" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
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
                        <img src="img/gallery/event4.jpg" alt="Kitty party celebration" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s;">
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
    <section class="cta-section" style="padding: 80px 0; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/gallery-cta-bg.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 style="font-size: 42px; color: #fff; margin-bottom: 20px;">Want to See More?</h2>
                    <p style="color: #fff; font-size: 18px; margin-bottom: 30px; max-width: 700px;">Visit us to experience the luxury and comfort of Hotel Ranbirs firsthand.</p>
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