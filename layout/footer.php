  <!-- Footer Section Begin -->
  <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                    <div class="ft-about text-center lg:text-left p-4">
    <!-- Logo -->
    <div class="logo mb-4">
        <a href="#">
            <img src="img/ranbirs-alambagh-logo-transparent.jpg"
                 style="width: 200px; border-radius: 8px;"
                 alt="Hotel Ranbirs Alambagh Logo">
        </a>
    </div>

    <!-- Tagline -->
    <p class="text-gray-600 text-sm mb-6 font-medium">
        Comfort meets convenience – book with confidence.
    </p>

    <!-- Social & Booking Icons -->
    <div class="fa-social flex flex-wrap justify-center lg:justify-start gap-4 text-gray-700">
        <!-- Facebook -->
        <a href="https://www.facebook.com/Ranbirsalambagh" target="_blank" title="Facebook"
           class="w-9 h-9 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition-colors footer-icons">
            <i class="fa-brands fa-facebook-f text-blue-600"></i>
        </a>

        <!-- Instagram -->
        <a href="https://www.instagram.com/hotelranbirsalambagh/" target="_blank" title="Instagram"
           class="w-9 h-9 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center hover:opacity-90 transition-colors footer-icons">
            <i class="fa-brands fa-instagram text-white"></i>
        </a>

        <!-- Zomato -->
        <a href="https://www.zomato.com/lucknow/ranbirs-alambagh" target="_blank" title="Zomato"
           class="w-9 h-9 bg-red-100 rounded-full flex items-center justify-center hover:bg-red-200 transition-colors footer-icons">
            <img class="w-100" src="img/WhatsApp_Image_2025-04-24_at_16.46.16-removebg-preview (1).png" alt="">
        </a>

        <!-- Goibibo -->
        <a href="https://www.goibibo.com/hotels/hotel-details/?checkin=20250423&checkout=20250424&roomString=1-2-0&searchText=Hotel%20Ranbirs%20Alambagh" target="_blank" title="Goibibo"
           class="w-9 h-9 bg-orange-100 rounded-full flex items-center justify-center hover:bg-orange-200 transition-colors footer-icons">
           <img class="w-100" src="img/goibo-removebg-preview.png" alt="">
        </a>

        <!-- MakeMyTrip -->
        <a href="https://www.makemytrip.com/hotels/hotel_ranbirs_alambagh-details-lucknow.html" target="_blank" title="MakeMyTrip"
           class="w-9 h-9 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition-colors footer-icons">
           <img src="img/WhatsApp_Image_2025-04-24_at_16.38.13-removebg-preview.png" alt="">
        </a>

       <style>
        .footer-icons{
            overflow: hidden !important;
        }
        .footer-icons > i{
            font-size: 20px !important;
        }
       </style>
       
    </div>
</div>

<!-- Font Awesome CDN (add this in your head tag) -->
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>0522 432 7173</li>
                                <li>reseravtaion@hotelranbirsalamabagh.com</li>
                                <li>Hotel Ranbirs, KBC- 11, Kanpur Rd, Sector B, Bargawan, Alambagh, Lucknow, Uttar Pradesh 226012</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="admin-panel/newsletter_submit.php" method="POST" class="fn-form">
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit"><i class="fa fa-send"></i></button>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Environmental Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy; <script>document.write(new Date().getFullYear());</script>Ranbir Alambagh. Powered by <a class="text-white" style="font-weight:600;" href="https://yashinfosystem.com" target="_blank">Yash Infosystems</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0 . --></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

<!-- AOS Animation (ensure AOS library is included) -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script>
  function closeModal() {
    document.getElementById('modal').classList.add('hidden');
  }

  window.addEventListener("DOMContentLoaded", () => {
    const message = document.getElementById('popup-message');
    if (message && message.textContent.trim() !== '') {
      document.getElementById('modal-message').textContent = message.textContent;
      document.getElementById('modal').classList.remove('hidden');
    }
  });
</script>
<script src="https://cdn.tailwindcss.com"></script>
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>