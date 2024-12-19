<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products Details | Alishaan</title>
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
  <!-- banner section -->
   <section class="trending-banner">
    <div class="container-fluid">
        <div class="row justify-content-left">
            <img src={{ asset("imgs/suparba-prod-banner.png") }} alt="suparba products">
        </div>
    </div>
   </section>

   <section class="product-details">
    <div class="container">
        <div class="row justify-content-center"> 
            <h2 class="mt-5 text-center text-white">Superba Basmati Rice</h2>
            <hr>
            <p>The aroma of authentic Himalayan Basmati rice will instill flavor like no other and compliments every dish cooked with Rice. The king of all rice, the grains can be as long as 25 mm after cooking. The unmatched quality of Superba Basmati Rice will elevate the taste of every cuisine and also be cooked in bulk without losing the taste or the aroma. It’s a feast for a plethora of special occasions and celebrations. This rice is known for its 4X factor as well, 1kg of Superba Basmati Rice can yield as much as 4kg of cooked rice with extreme delicacy.</p>
        </div>

        <div class="row justify-content-center mt-5 pb-5">
            <!-- Card 1 -->
            <div class="col-md-4 mt-5 d-flex justify-content-center">
                <div class="card text-center prod-card" style="width: 21rem;">
                    <img src={{ asset("imgs/wheat.png") }} class="card-img-top" alt="Card Image 1">
                    <div class="card-body">
                        <h3 class="card-title">Best Choice for celebrations <br/>and special occasions</h3>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mt-5 d-flex justify-content-center">
                <div class="card text-center prod-card" style="width: 21rem;">
                    <img src={{ asset("imgs/wheat2.png") }} class="card-img-top" alt="Card Image 2">
                    <div class="card-body">
                        <h3 class="card-title">Yields 4X more cooked<br/> rice than others</h3>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mt-5 d-flex justify-content-center">
                <div class="card text-center prod-card" style="width: 21rem;">
                    <img src={{ asset("imgs/wheat3.png") }} class="card-img-top" alt="Card Image 3">
                    <div class="card-body">
                        <h3 class="card-title">Rich Basmati flavor and<br/> aroma</h3>
                    </div>
                </div>
            </div>

            <div class="container psa">
                <h2 class="custom-heading">Packaging Size Available</h2>
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 custom-box">
                            <p><strong>Pouch Pack</strong>: 1kg &nbsp;&nbsp; 10lb &nbsp;&nbsp; 5kg &nbsp;&nbsp; 20kg</p>
                            <p><strong>Jar</strong>: 1kg &nbsp;&nbsp; 2kg &nbsp;&nbsp; 5kg</p>
                            <p><strong>Alishaan Ultima</strong>: 2.5kg &nbsp;&nbsp; 5kg &nbsp;&nbsp; 19kg</p>
                            <p><strong>Non-Woven bag</strong>: 40lb</p>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container mt-5 pb-5 certi-pp">
          <div class="row justify-content-center">
              <div class="col-md-10">
                  <div class="certification-section text-center">
                      <h2 class="certification-title">Certifications</h2>
                      <p class="certification-subtitle">Each grain of Alishaan basmati rice is certified and approved by world accredited certifying agencies and bodies:</p>
  
                      <div class="row align-items-center">
                          <!-- Left Column -->
                          <div class="col-md-4">
                              <ul class="certification-list text-start">
                                  <li>BRC – Grade A</li>
                                  <li>FSMA</li>
                                  <li>Costco Addendum</li>
                                  <li>ISO 9000</li>
                                  <li>ISO 22000 (FSMS)</li>
                              </ul>
                          </div>
  
                          <!-- Medal Image -->
                          <div class="col-md-4">
                              <img src={{ asset("imgs/alishaan-certi.png") }} alt="Medal" class="medal">
                          </div>
  
                          <!-- Right Column -->
                          <div class="col-md-4">
                              <ul class="certification-list text-start">
                                  <li>WASH For COVID</li>
                                  <li>NPPO USA And China</li>
                                  <li>SMETA</li>
                                  <li>SEDEX</li>
                                  <li>FSSAI</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="variants-section mt-5 pb-5">
        <span>OTHER VARIANTS BY</span><img src={{ asset("imgs/Alishaan-head.png") }} class="ms-3" alt="alishan">
          <hr>
          <div id="productCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- First Slide -->
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="product-card position-relative text-center">
                                <p class="product-title fw-bold mb-2">XL Sella Basmati Rice</p>
                                <img class="img-fluid" src={{ asset("imgs/product01.png") }} alt="XL Sella Basmati Rice">
                                <div class="overlay d-flex justify-content-center align-items-center">
                                    <a href="#" class="text-decoration-underline text-white">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-card position-relative text-center">
                                <p class="product-title fw-bold mb-2">Superba Basmati Rice</p>
                                <img class="img-fluid" src={{ asset("imgs/product02.png") }} alt="Superba Basmati Rice">
                                <div class="overlay d-flex justify-content-center align-items-center">
                                    <a href="#" class="text-decoration-underline text-white">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-card position-relative text-center">
                                <p class="product-title fw-bold mb-2">Daily Basmati Rice</p>
                                <img class="img-fluid" src={{ asset("imgs/product03.png") }} alt="Daily Basmati Rice">
                                <div class="overlay d-flex justify-content-center align-items-center">
                                    <a href="#" class="text-decoration-underline text-white">View</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!-- slide 2 items-->
                <div class="carousel-item">
                  <div class="row justify-content-center">
                      <div class="col-md-4">
                          <div class="product-card position-relative text-center">
                              <p class="product-title fw-bold mb-2">XL Sella Basmati Rice</p>
                              <img class="img-fluid" src={{ asset("imgs/product04.png") }} alt="XL Sella Basmati Rice">
                              <div class="overlay d-flex justify-content-center align-items-center">
                                  <a href="#" class="text-decoration-underline text-white">View</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="product-card position-relative text-center">
                              <p class="product-title fw-bold mb-2">Superba Basmati Rice</p>
                              <img class="img-fluid" src={{ asset("imgs/product05.png") }} alt="Superba Basmati Rice">
                              <div class="overlay d-flex justify-content-center align-items-center">
                                  <a href="#" class="text-decoration-underline text-white">View</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="product-card position-relative text-center">
                              <p class="product-title fw-bold mb-2">Daily Basmati Rice</p>
                              <img class="img-fluid" src={{ asset("imgs/product01.png") }} alt="Daily Basmati Rice">
                              <div class="overlay d-flex justify-content-center align-items-center">
                                  <a href="#" class="text-decoration-underline text-white">View</a>
                              </div>
                          </div>
                      </div>
                      
                  </div>
              </div>
                <!-- Add more slides as needed -->
            </div>
            <!-- Controls -->
            <button class="carousel-control-prev custom-control" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next custom-control" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
    </div>

    </div>
   </section>
  @include('layout.footer')
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src={{ asset("js/custom.js")}}></script>
</body>
</html>

