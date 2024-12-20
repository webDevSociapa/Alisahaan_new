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
<<<<<<< HEAD
  <link rel="stylesheet" href={{ asset("css/Responsive/about.css")}}>
=======
  <link rel="stylesheet" href={{ asset("css/style.css")}}>
>>>>>>> emraan
</head>
<body>
  @include('layout.header')
  <!-- Banner -->
  <section>
    <div class="common-banner">
      <img class="w-100" src={{ asset("imgs/about-banner.png")}} />
    </div>
  </section>
  <!-- Banner -->

  <!-- being alishaan -->
  <section class="about-alishan h-100">
    <div class="container-fluid">
<<<<<<< HEAD
    <div class="row align-items-center flex-column-reverse flex-lg-row">
        <!-- Descriptive Text -->
        <div class="col-lg-6 being-right-about">
          <span>BEING</span><img src={{ asset("imgs/Alishaan-head.png")}} class="ms-3 alishaan-head" alt="alishan">
          <hr>
          <p class="title-content">“There is no love sincerer than the love of food.”― George Bernard Shaw”</p>
          <p class="desc-content1">
=======
      <div class="row">
        <!-- Descriptive Text -->
        <div class="col-lg-6 being-right-about">
          <span>BEING</span><img src={{ asset("imgs/Alishaan-head.png")}} class="ms-3" alt="alishan">
          <hr>
          <p class="mt-5">“There is no love sincerer than the love of food.”― George Bernard Shaw”</p>
          <p class="mt-3">
>>>>>>> emraan
            At Alishaan we savor a legacy that has a grain of tradition, the culture of purity, and the value of
            exclusivity. Our profound legacy of over 40 years coupled with the best milling and production practices
            bring to you, not just the finest varieties of <a href="#" class="text-white">Superba</a>, <a href="#"
              class="text-white">XL Sella</a>, <a href="#" class="text-white">Delight</a>,<a href="#"
              class="text-white"> Aroma A1</a>, <a href="#" class="text-white">Brown Basmati Rice</a>, but the finest
            dining experience. </p>
<<<<<<< HEAD
          <p class="mt-3 desc-content1">Born in the lap of the Himalayas and nurtured with the holy Ganges river,<a href="#"
              class="text-white">each grain of Alishaan</a> is a culinary delight. Careful seed selection and the best
=======
          <p class="mt-3">Born in the lap of the Himalayas and nurtured with the holy Ganges river,<a href="#"
              class="text-white"> each grain of Alishaan</a> is a culinary delight. Careful seed selection and the best
>>>>>>> emraan
            farming practices ensure the longest and the most aromatic grains that are pure, full of flavor, and fluffy.
            The state-of-the-art multi-level processing ensures a salubrious aroma, a delectable taste, and immaculately
            clean rice.</p>
        </div>

<<<<<<< HEAD
        <div class="col-lg-6 text-center rice being-img">
=======
        <div class="col-lg-6 text-center mt-5 rice being-img">
>>>>>>> emraan
          <img src={{ asset("imgs/about-being-bg.png")}} alt="rice image">
        </div>
      </div>
    </div>
  </section>
  <!-- End being alishaan -->

  @include('layout.footer')
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src={{ asset("js/custom.js")}}></script>
</body>
</html> 