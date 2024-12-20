<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | Alishaan</title>
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
</head>
<body>
  @include('layout.header')
<!-- Banner -->
<section>
    <div class="common-banner">
      <img class="w-100" src={{ asset("imgs/distributor-banner.png")}} />
    </div>
  </section>
  <!-- Banner -->

  <!-- be a distributor -->

  <section class="distributor-section">
    <div class="container-fluid">
      <div class="text-center distributor-header">
        <span class="distributor-title">Be a Distributor</span>
        <hr class="distributor-line" />
      </div>
      <div class="row justify-content-center">
        <div class="distributor-card">
          <!-- Left Side: Form -->
          <div class="distributor-contact">
            <form>
              <input type="text" name="fullName" placeholder="Full Name" class="form-input" />
              <input type="email" name="email" placeholder="Email" class="form-input" />
              <input type="text" name="contact" placeholder="Contact Number" class="form-input" />
              <input type="text" name="compname" placeholder="Company Name" class="form-input" />
              <textarea name="message" placeholder="Message" class="form-input textarea"></textarea>
              <button type="submit" class="submit-button">Send Us</button>
            </form>
          </div>
          <!-- Right Side: Image -->
          <div class="distributor-img">
            <img src={{ asset("imgs/beDistributor.png")}} alt="Be a Distributor" class="distributor-image" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- be a distributor -->
  @include('layout.footer')
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src={{ asset("js/custom.js")}}></script>
</body>
</html>
    