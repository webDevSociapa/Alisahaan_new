<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | Alishaan</title>
  <!-- Toastr CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- gogle fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sen:wght@400..800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sen:wght@400..800&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href={{ asset("css/style.css")}}>
<<<<<<< HEAD
=======
  <link rel="stylesheet" href={{ asset("css/Responsive/contact.css")}}>
>>>>>>> emraan
</head>
<body>
  @include('layout.header')
  <!-- Banner -->
  <section>
        <div class="common-banner">
<<<<<<< HEAD
            <img class="w-100" width="1440" src={{ asset("imgs/contactBanner.png")}} />
=======
            <img class="w-100" width="1440" src={{ asset("imgs/contact-us-banner.jpg")}} />
>>>>>>> emraan
        </div>
    </section>
    <!-- Banner -->

    <!-- be a distributor -->

    <section class="contact-section">
        <div class="container-fluid">
<<<<<<< HEAD
            <div class="being-right mb-5">
                <span>Contact</span><img src={{ asset("imgs/Alishaan-head.png")}} class="ms-3" alt="alishan">
                <hr class="distributor-line mb-4" />
            </div>
            <div class="row">
                <div class="col-md-6 contact-form-data">
=======
            
            <div class="row">
                <div class="col-md-6 contact-form-data">
                <div class="being-right mt-5 mb-5">
                <span>Contact</span><img src={{ asset("imgs/Alishaan-head.png")}} class="ms-3" alt="alishan">
                <hr class="distributor-line mb-4" />
            </div>
>>>>>>> emraan
                <form class="mb-4" action="{{ route('submit.query') }}" method="POST">
                    @csrf
                    <input type="text" name="fullName" placeholder="Full Name" class="form-input-contact" />
                    <input type="email" name="email" placeholder="Email" class="form-input-contact" />
                    <input type="text" name="contact" placeholder="Contact Number" class="form-input-contact" />
                    <textarea name="message" placeholder="Message" class="form-input-contact textarea"></textarea>
                    <button type="submit" class="submit-button">Send Us</button>
                </form>

                </div>
                <div class="col-md-6">
<<<<<<< HEAD
                    <img src={{ asset("imgs/contact-image.png")}} alt="contact us" class="contact-image" />
=======
                    <img src={{ asset("imgs/contact-image.jpg")}} alt="contact us" class="contact-image" />
>>>>>>> emraan
                </div>
            </div>
        </div>
    </section>
    <!-- be a distributor -->

    <!-- contact -->
    <section class="location-section">
        <div class="container-fluid">
            <div class="text-center location-header">
                <span class="location-title">Our Location</span>
                <hr class="location-line" />
            </div>
            <div class="location-map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d444563.10624083434!2d77.097969!3d28.674779!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi%2C%20India!5e1!3m2!1sen!2sus!4v1732876257020!5m2!1sen!2sus"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="map-iframe"></iframe>
            </div>
        </div>
    </section>
  @include('layout.footer')
  <!-- Toastr JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src={{ asset("js/custom.js")}}></script>
</body>
</html>
