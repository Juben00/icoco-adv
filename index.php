<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<?php
require_once './components/head.html';
?>

<body class="index-page">

  <?php
  require_once './components/header.php';
  require_once './components/feedback.modal.html';
  require_once './components/confirm.feedback.modal.html';
  ?>

  <main class="main position-relative">

    <?php
    require_once './forms/loginForm.php';
    ?>
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/beach-cover.jpg" alt="">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2>Welcome to Icoco!</h2>
            <p>Make your vacation memorable.
            </p>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <div class="container">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>About Us</h3>
            <h2>Welcome to iCoCo Resort Management System</h2>
            <p>The iCoCo Resort Management System is designed to provide a seamless experience for both guests and
              resort managers. With a focus on efficient booking, facility management, and customer satisfaction, our
              platform helps resorts deliver an exceptional hospitality experience.</p>
            <a class="read-more"><span>Start Booking</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6">
                <div class="icon-box">
                  <i class="bi bi-buildings"></i>
                  <h3>Efficient Facility Management</h3>
                  <p>Streamline resort operations, from managing rooms and amenities to coordinating with staff for a
                    smooth guest experience.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6">
                <div class="icon-box">
                  <i class="bi bi-clipboard-pulse"></i>
                  <h3>Real-time Booking Insights</h3>
                  <p>Gain access to real-time booking information, occupancy rates, and insights to optimize room
                    availability and pricing.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6">
                <div class="icon-box">
                  <i class="bi bi-command"></i>
                  <h3>User-friendly Interface</h3>
                  <p>Designed with usability in mind, our system makes it easy for staff and guests to navigate and use
                    features intuitively.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6">
                <div class="icon-box">
                  <i class="bi bi-graph-up-arrow"></i>
                  <h3>Enhanced Customer Experience</h3>
                  <p>Ensure a memorable stay for guests by enabling personalized services and streamlined interactions
                    from booking to checkout.</p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Our Services</h2>
        <p>iCoCo Resort Management System offers comprehensive solutions to streamline resort operations and enhance
          guest experiences.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Reservation Management</a></h4>
                <p class="description">Efficiently manage bookings, availability, and reservations with real-time
                  updates to ensure a seamless guest experience.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"> <a class="stretched-link">Guest Check-in/Check-out</a>
                </h4>
                <p class="description">Streamline the check-in and check-out process for guests, making it quick, easy,
                  and convenient.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Facility Management</a></h4>
                <p class="description">Manage all resort facilities, from rooms to common areas, ensuring maintenance
                  and service quality.</p>
              </div>
            </div>
          </div><!-- End Service Item -->


          <div class="col-lg-6">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Event and Activity
                    Management</a></h4>
                <p class="description">Plan and organize events and activities for guests, from beachside gatherings to
                  spa sessions.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Features</h2>
        <p>Explore the key features of iCoCo Resort Management System designed for hosts and guests alike.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <!-- Feature 1: Hosts Can Post Their Resorts -->
        <div class="row gy-4 align-items-center features-item">
          <div class="col-lg-5 order-2 order-lg-1">
            <h3>Post Your Resorts with Ease</h3>
            <p>
              As a host, you have the ability to list your resort on our platform, reaching a broad audience of
              potential guests. Create detailed listings complete with photos, amenities, and pricing options to attract
              the right visitors.
            </p>
            <a class="btn btn-get-started">Get Started</a>
          </div>
          <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center">
            <div class="image-stack">
              <img src="assets/img/icoco.png" alt="Host posting resort" class="stack-front">
              <img src="assets/img/icoco.png" alt="Resort listing" class="stack-back">
            </div>
          </div>
        </div><!-- Features Item -->

        <!-- Feature 2: Guests Can Book -->
        <div class="row gy-4 align-items-stretch justify-content-between features-item">
          <div class="col-lg-6 d-flex align-items-center features-img-bg">
            <img src="assets/img/icoco.png" class="img-fluid" alt="Guest booking">
          </div>
          <div class="col-lg-5 d-flex justify-content-center flex-column">
            <h3>Simple and Secure Booking for Guests</h3>
            <p>Guests can browse and book their preferred resorts seamlessly through the iCoCo Resort Management System.
              Our platform provides detailed listings and secure payment options for a worry-free experience.</p>
            <ul>
              <li><i class="bi bi-check"></i> <span>Browse resorts with real-time availability.</span></li>
              <li><i class="bi bi-check"></i><span> Instant booking confirmation upon payment.</span></li>
              <li><i class="bi bi-check"></i> <span>Enjoy a smooth and transparent booking process.</span></li>
            </ul>
            <a class="btn btn-get-started align-self-start">Book Now</a>
          </div>
        </div><!-- Features Item -->

        <!-- Feature 3: Resort Management for Hosts -->
        <div class="row gy-4 align-items-center features-item">
          <div class="col-lg-5 order-2 order-lg-1">
            <h3>Effortless Resort Management</h3>
            <p>
              Hosts can manage their listings, track bookings, and interact with guests directly from the iCoCo
              platform, making it easier to run and promote their resorts effectively.
            </p>
            <a class="btn btn-get-started">Get Started</a>
          </div>
          <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center">
            <div class="image-stack">
              <img src="assets/img/icoco.png" alt="Manage resort" class="stack-front">
              <img src="assets/img/icoco.png" alt="Track bookings" class="stack-back">
            </div>
          </div>
        </div><!-- Features Item -->

      </div>

    </section><!-- /Features Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
              <p>
                Find answers to the most common questions about iCoCo Resort Management System, whether you're a host or
                a guest.
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="faq-container">
              <div class="faq-item faq-active">
                <h3><span class="num">1.</span> <span>How do I list my resort on iCoCo?</span></h3>
                <div class="faq-content">
                  <p>To list your resort, sign up as a host, navigate to the 'Post Resort' section, and fill out the
                    required details about your property, including images, amenities, and pricing information.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">2.</span> <span>Can guests book multiple resorts at once?</span></h3>
                <div class="faq-content">
                  <p>Yes, guests can book multiple resorts by adding their preferred accommodations to their booking
                    list. They will be prompted to complete the booking process for each selection.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">3.</span> <span>What payment methods are accepted on iCoCo?</span></h3>
                <div class="faq-content">
                  <p>iCoCo accepts various secure payment methods, including credit cards, PayPal, and bank transfers.
                    Payment options may vary depending on the resort's location and policies.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">4.</span> <span>How can I manage my bookings as a host?</span></h3>
                <div class="faq-content">
                  <p>Hosts can manage their bookings through the 'Bookings' tab on their dashboard, allowing them to
                    view, approve, or decline bookings and communicate with guests directly.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">5.</span> <span>Is there a cancellation policy for bookings?</span></h3>
                <div class="faq-content">
                  <p>Yes, each resort sets its own cancellation policy, which is displayed at the time of booking.
                    Guests are encouraged to review the policy carefully before confirming their reservation.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Call to Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">
      <img src="assets/img/beach-cover.jpg" alt="Beach cover image for iCoCo Resort">

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Ready to Experience iCoCo?</h3>
              <p>Discover stunning resorts and exceptional service with iCoCo Resort. Book your stay today or become a
                host to share your resort with the world.</p>
              <a class="cta-btn">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Call to Action Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title">
        <h2>Contact Us</h2>
        <p>Have questions? Reach out to us for any inquiries, or simply say hello!</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>123 Paradise Road</p>
                  <p>Zamboanga City, Philippines</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+63 912 345 6789</p>
                  <p>+63 987 654 3210</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>support@icoco.com</p>
                  <p>inquiries@icoco.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday</p>
                  <p>9:00 AM - 6:00 PM</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>

  <?php
  require_once './components/footer.php';
  ?>

  <!-- Scroll Top -->
  <a id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    const toggleSignup = document.getElementById('toggle-signup');
    const toggleLogin = document.getElementById('toggle-login');
    const loginForm = document.getElementById('login-form');
    const signupForm = document.getElementById('signup-form');
    const xButton = document.getElementById('xButton');
    const loginSignupForm = document.getElementById('LoginSignupForm');

    toggleSignup.addEventListener('click', (e) => {
      e.preventDefault();
      loginForm.classList.add('d-none');
      signupForm.classList.remove('d-none');
      toggleSignup.classList.add('d-none');
      toggleLogin.classList.remove('d-none');
    });

    toggleLogin.addEventListener('click', (e) => {
      e.preventDefault();
      signupForm.classList.add('d-none');
      loginForm.classList.remove('d-none');
      toggleLogin.classList.add('d-none');
      toggleSignup.classList.remove('d-none');
    });

    xButton.addEventListener('click', (e) => {
      e.preventDefault();
      loginSignupForm.classList.add('d-none');
      loginSignupForm.classList.remove('d-flex');
    })
  </script>

  <script>
    const getStartBtn = document.getElementById('getStartedBtn');

    getStartBtn.addEventListener('click', (e) => {
      loginSignupForm.classList.remove('d-none');
      loginSignupForm.classList.add('d-flex');
    })
  </script>

  <!-- Bootstrap Bundle (includes Popper.js) -->
  <script src="./assets/vendor/jQuery-3.7.1/jquery-3.7.1.min.js"></script>
  <script src="./assets/js/user.jQuery.js"></script>

</body>

</html>