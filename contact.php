<?php 
$pageTitle = "Contact Hotel Ranbirs Alambagh | Luxury Hotel in Lucknow";
$pageDescription = "Contact Hotel Ranbirs in Alambagh, Lucknow for bookings & inquiries. Call +91 5224327173 or email reservation@hotelranbirsalambagh.com";
$pageKeywords = "contact hotel ranbirs, hotel in alambagh lucknow, luxury stay contact, banquet hall booking lucknow";
include("layout/header.php");
include("admin-panel/config.php");

// Initialize variables
$name = $email = $phone = $subject = $message = '';
$success_message = $error_message = '';

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $phone = mysqli_real_escape_string($conn, trim($_POST['phone'] ?? ''));
    $subject = mysqli_real_escape_string($conn, trim($_POST['subject'] ?? ''));
    $message = mysqli_real_escape_string($conn, trim($_POST['message']));
    
    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        $error_message = "Name, email, and message are required fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format.";
    } else {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO contact_submissions (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);
        
        if ($stmt->execute()) {
            $success_message = "Thank you! Your message has been submitted successfully.";
            // Clear form fields after successful submission
            $name = $email = $phone = $subject = $message = '';
        } else {
            $error_message = "Error: " . $stmt->error;
        }
        $stmt->close();
    }
}
?>
<head>
    <link rel="canonical" href="https://hotelranbirsalambagh.com/contact.php" />
    <meta property="og:title" content="Contact Hotel Ranbirs Alambagh | Luxury Stay in Lucknow" />
    <meta property="og:description" content="Get in touch with Hotel Ranbirs for room bookings, banquet hall reservations and special requests." />
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Hotel",
      "name": "Hotel Ranbirs Alambagh",
      "description": "Luxury hotel in Alambagh, Lucknow offering premium accommodations and banquet facilities",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "KBC-11, Kanpur Road, Sector B, Bargawan",
        "addressLocality": "Alambagh",
        "addressRegion": "Uttar Pradesh",
        "postalCode": "226012",
        "addressCountry": "India"
      },
      "telephone": "+915224327173",
      "email": "reservation@hotelranbirsalambagh.com",
      "image": "https://hotelranbirsalambagh.com/img/logo.png",
      "url": "https://hotelranbirsalambagh.com"
    }
    </script>
</head>

<!-- Breadcrumb Section -->
<div class="breadcrumb-section" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('img/contact-bg.jpg'); background-size: cover; background-position: center; padding: 120px 0; color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h1 style="font-size: 48px; margin-bottom: 20px; font-weight: 700; color: white;">Contact Hotel Ranbirs</h1>
                    <div class="bt-option" style="font-size: 18px;">
                        <a href="./index.php" style="color: #d4af37; text-decoration: none;">Home</a>
                        <span style="color: #fff; margin: 0 10px;">/</span>
                        <span>Contact Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<section class="contact-section py-5" style="background: #f9f9f9;">
    <div class="container">
        <?php if (!empty($success_message)): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-left: 5px solid #28a745;">
                <?php echo $success_message; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        
        <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="border-left: 5px solid #dc3545;">
                <?php echo $error_message; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        
        <div class="row">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="contact-info p-4" style="background: #fff; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); height: 100%;">
                    <h2 style="font-size: 32px; margin-bottom: 25px; color: #222; position: relative; padding-bottom: 15px;">
                        <span style="position: absolute; bottom: 0; left: 0; width: 60px; height: 3px; background: #d4af37;"></span>
                        Our Contact Information
                    </h2>
                    <p style="color: #666; line-height: 1.8; margin-bottom: 30px;">
                        We're here to assist you with room bookings, banquet reservations, and any special requests. Our team is available 24/7 to ensure your stay in Lucknow is memorable.
                    </p>
                    
                    <div class="contact-method mb-4 d-flex">
                        <div class="icon-box mr-4" style="width: 60px; height: 60px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-map-marker-alt" style="font-size: 24px; color: #d4af37;"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 18px; margin-bottom: 5px; color: #222;">Address</h4>
                            <p style="color: #666; margin: 0;">
                                KBC-11, Kanpur Road, Sector B<br>
                                Bargawan, Alambagh<br>
                                Lucknow, Uttar Pradesh 226012
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact-method mb-4 d-flex">
                        <div class="icon-box mr-4" style="width: 60px; height: 60px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-phone-alt" style="font-size: 24px; color: #d4af37;"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 18px; margin-bottom: 5px; color: #222;">Phone</h4>
                            <p style="color: #666; margin: 0;">
                                <a href="tel:+915224327173" style="color: #666; text-decoration: none;">+91 522 432 7173</a><br>
                                <a href="tel:+918188084116" style="color: #666; text-decoration: none;">+91 81880 84116 (WhatsApp)</a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact-method d-flex">
                        <div class="icon-box mr-4" style="width: 60px; height: 60px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-envelope" style="font-size: 24px; color: #d4af37;"></i>
                        </div>
                        <div>
                            <h4 style="font-size: 18px; margin-bottom: 5px; color: #222;">Email</h4>
                            <p style="color: #666; margin: 0;">
                                <a href="mailto:reservation@hotelranbirsalambagh.com" style="color: #666; text-decoration: none;">reservation@hotelranbirsalambagh.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
                <div class="contact-form p-4" style="background: #fff; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                    <h2 style="font-size: 32px; margin-bottom: 25px; color: #222; position: relative; padding-bottom: 15px;">
                        <span style="position: absolute; bottom: 0; left: 0; width: 60px; height: 3px; background: #d4af37;"></span>
                        Send Us a Message
                    </h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <input type="text" name="name" class="form-control" placeholder="Your Name*" value="<?php echo htmlspecialchars($name); ?>" required style="padding: 12px 15px; border: 1px solid #eee; border-radius: 5px; height: 50px;">
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="email" name="email" class="form-control" placeholder="Your Email*" value="<?php echo htmlspecialchars($email); ?>" required style="padding: 12px 15px; border: 1px solid #eee; border-radius: 5px; height: 50px;">
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="tel" name="phone" class="form-control" placeholder="Phone Number" value="<?php echo htmlspecialchars($phone); ?>" style="padding: 12px 15px; border: 1px solid #eee; border-radius: 5px; height: 50px;">
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" value="<?php echo htmlspecialchars($subject); ?>" style="padding: 12px 15px; border: 1px solid #eee; border-radius: 5px; height: 50px;">
                            </div>
                            <div class="col-12 mb-4">
                                <textarea name="message" class="form-control" placeholder="Your Message*" required style="padding: 12px 15px; border: 1px solid #eee; border-radius: 5px; min-height: 150px;"><?php echo htmlspecialchars($message); ?></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary" style="background: #d4af37; border: none; padding: 12px 40px; font-weight: 600; letter-spacing: 1px; font-size: 16px;">
                                    Send Message <i class="fas fa-paper-plane ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section py-0">
    <div class="container-fluid p-0">
        <div class="map" style="height: 500px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.245897704151!2d80.8973748!3d26.800297899999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bff979032b0a5%3A0xf5bc3720f8edeb7e!2sHotel%20Ranbirs%20Alambagh!5e0!3m2!1sen!2sin!4v1745304836077!5m2!1sen!2sin"
                height="500" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" title="Hotel Ranbirs Alambagh Location Map"></iframe>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('img/cta-bg.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 style="font-size: 36px; color: #fff; margin-bottom: 20px;">Need Immediate Assistance?</h2>
                <p style="color: #fff; font-size: 18px; margin-bottom: 30px;">Our team is available 24/7 to help with your inquiries and bookings.</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="tel:+915224327173" class="btn btn-primary mx-2 mb-2" style="background: #d4af37; border: none; padding: 12px 30px; font-weight: 600;">
                        <i class="fas fa-phone me-2"></i> Call Now
                    </a>
                    <a href="https://wa.me/918188084116" class="btn btn-success mx-2 mb-2" style="border: none; padding: 12px 30px; font-weight: 600;">
                        <i class="fab fa-whatsapp me-2"></i> WhatsApp
                    </a>
                    <a href="mailto:reservation@hotelranbirsalambagh.com" class="btn btn-outline-light mx-2 mb-2" style="border: 2px solid #d4af37; color: #fff; padding: 12px 30px; font-weight: 600;">
                        <i class="fas fa-envelope me-2"></i> Email Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .contact-method:hover .icon-box {
        background: rgba(212, 175, 55, 0.2) !important;
        transform: scale(1.05);
    }
    .btn-primary:hover {
        background: #c19b2e !important;
    }
    .btn-outline-light:hover {
        background: #d4af37 !important;
        border-color: #d4af37 !important;
    }
    .contact-form input:focus,
    .contact-form textarea:focus {
        border-color: #d4af37 !important;
        box-shadow: 0 0 0 0.2rem rgba(212, 175, 55, 0.25);
    }
  
    @media (max-width: 768px) {
        .breadcrumb-text h1 {
            font-size: 32px !important;
        }
        .contact-section {
            padding-top: 30px !important;
            padding-bottom: 30px !important;
        }
        .contact-info, .contact-form {
            padding: 20px !important;
        }
        h2 {
            font-size: 28px !important;
        }
    }
    
    @media (max-width: 576px) {
        .breadcrumb-text h1 {
            font-size: 28px !important;
        }
        .contact-method {
            flex-direction: column;
        }
        .icon-box {
            margin-bottom: 15px !important;
            margin-right: 0 !important;
        }
        .cta-section h2 {
            font-size: 28px !important;
        }
        .btn {
            padding: 10px 20px !important;
            font-size: 14px !important;
            margin-bottom: 10px !important;
        }
    }
</style>

<?php 
// Close database connection
$conn->close();
include("layout/footer.php"); 
?>