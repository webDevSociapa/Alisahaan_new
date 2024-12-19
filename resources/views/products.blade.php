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
            <img class="w-100" src={{ asset("imgs/superba-banner.jpg")}} />
        </div>
    </section>
    <!-- Banner -->

    <!-- our Basmati Range -->

    <section class="whyChooseUsRb">
        <div class="why-us-rb">
            <p class="text-center text-white">
                <span class="custom-text text-capitalize">OUR BASMATI RANGE</span>
            </p>
            <hr>
        </div>
        <div class="why-us-content">
            <p>
                Grown in the foothills of misty Himalayas and nurtured by pristine snow-fed Ganges, Alishaan Basmati
                Rice gives your palate a delicate Indian concoction. This culinary magic comes to you after a lot of
                hard work, patience & careful tending. To get the most refined grain possible, the specifications are
                strictly adhered to, and the best quality paddy is dried & graded. Best milling, polishing, & packing
                ensures the grain is long, slender pearly white & genuinely aromatic. The state-of-the-art
                multi-cleaning process cleans each grain, eliminating dust, dirt, stones, and other elements. The
                quality is measured by the length, fitness, and smooth texture of the grain. Thus the result astounds
                with a salubrious aroma, a delectable taste, and immaculately clean rice.
            </p>
        </div>
    </section>

    <!--our Basmati Range  -->

    <!-- Products Alishan -->

    <section class="products-alishan">
        <div class="container">
            <div class="row justify-content-center gap-3">
                <!-- Card 1 -->
                <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center product-cards">
                        <div class="whyus-products text-center">
                            <a href="/product-details" class="text-decoration-none">
                                <h3 class="mb-3">Superba Basmati Rice</h3>
                                <img src={{ asset("imgs/product01.png")}} alt="Superba Basmati Rice" class="product-img">
                            </a>
                        </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center product-cards">
                    <div class="whyus-products text-center">
                        <a href="/product-details" class="text-decoration-none">
                            <h3 class="mb-3">XL SELLA BASMATI RICE</h3>
                            <img src={{ asset("imgs/product02.png")}} alt="XL SELLA BASMATI RICE" class="product-img">
                        </a>    
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center product-cards">
                    <div class="whyus-products text-center">
                        <a href="/product-details" class="text-decoration-none">
                            <h3 class="mb-3">Daily BASMATI RICE</h3>
                            <img src={{ asset("imgs/product03.png")}} alt="Superba Basmati Rice" class="product-img">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center gap-3">
                <!-- Card 4 -->
                <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center product-cards">
                    <div class="whyus-products text-center">
                        <a href="/product-details" class="text-decoration-none">
                            <h3 class="mb-3">Daily BASMATI RICE</h3>
                            <img src={{ asset("imgs/product04.png")}} alt="Superba Basmati Rice" class="product-img">
                        </a>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center product-cards">
                    <div class="whyus-products text-center">
                        <a href="/product-details" class="text-decoration-none">
                            <h3 class="mb-3">Daily BASMATI RICE</h3>
                            <img src={{ asset("imgs/product05.png")}} alt="Superba Basmati Rice" class="product-img">
                        </a>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center product-cards">
                    <div class="whyus-products text-center">
                        <a href="/product-details" class="text-decoration-none">
                            <h3 class="mb-3">Daily BASMATI RICE</h3>
                            <img src={{ asset("imgs/brown-rice.png")}} alt="Superba Basmati Rice" class="product-img">
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
<!-- Products Alishaan -->
  @include('layout.footer')
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src={{ asset("js/custom.js")}}></script>
</body>
</html>

