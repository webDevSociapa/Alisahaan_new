<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trending | Alishaan</title>
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
  <link rel="stylesheet" href={{ asset("css/Responsive/home.css") }}>
</head>
<body>
  @include('layout.header')
  <!-- banner section -->
  <section class="trending-banner">
    <div class="container-fluid">
        <div class="row justify-content-left">
            <img src={{ asset("imgs/trending-banner.jpg")}} alt="">
        </div>
    </div>
   </section>

   <section class="trending">
    <div class="container-fluid">
        <h2 class="pt-5 text-center">Trending</h2>
        <hr>
        <div class="row trending-row">
            <div class="col-md-6 trending-left">
                <p>At <a href="#" class="text-white">Alishaan</a>, not only do we produce the <a href="#" class="text-white">Finest Basmati Rice</a>, but also offer an insight into our production, packaging, and marketing processes.</p>
                <p> Our endeavor is to gather more and more faith and love from our consumers, fans, and food enthusiasts. Our regular online events are an attempt to increase engagement where the world can express their views, share knowledge and build a community that is bound by creativity and innovation around our product. </p>
                <p>On numerous occasions, we have crafted campaigns to make space for our consumer community to connect with our Brand and discover more. This social media dashboard also helps our workforce to realize the appreciation by visitors and fans of our brand. </p>
                <p>Let’s take a journey that celebrates years of effort, precision in procurement, and proficient business acumen to turn a commodity into a Global Brand spanning over 40+ countries.</p>
            </div>
            <div class="col-md-6 trending-right">
                <img src={{ asset("imgs/right-img.png")}} alt="image">
            </div>
        </div>

        <div class="row mt-5 tab">
            <ul class="nav nav-tabs nav-fill mb-3" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button onclick="setActiveTab(this)" class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Social Media</button>
                  <hr class="tab-hr">
                </li>
                <li class="nav-item" role="presentation">
                  <button onclick="setActiveTab(this)" class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Videos</button>
                  <hr class="tab-hr">
                </li>
                <li class="nav-item" role="presentation">
                  <button onclick="setActiveTab(this)" class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Campaign</button>
                  <hr class="tab-hr">
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="container mt-4">
                        <div class="row mt-5 g-2 text-center"> <!-- Added 'g-2' for small gap -->
                          <!-- Image 1 -->
                          <div class="col-md-3 col-sm-6">
                            <img src={{ asset("imgs/insta1.png")}} alt="Image 1" class="img-fluid rounded">
                          </div>
                          <!-- Image 2 -->
                          <div class="col-md-3 col-sm-6">
                            <img src={{ asset("imgs/insta1.png")}} alt="Image 2" class="img-fluid rounded">
                          </div>
                          <!-- Image 3 -->
                          <div class="col-md-3 col-sm-6">
                            <img src={{ asset("imgs/insta1.png")}} alt="Image 3" class="img-fluid rounded">
                          </div>
                          <!-- Image 4 -->
                          <div class="col-md-3 col-sm-6">
                            <img src={{ asset("imgs/insta1.png")}} alt="Image 4" class="img-fluid rounded">
                          </div>
                        </div>

                        <div class="row mb-5 mt-5 g-2 text-center"> <!-- Added 'g-2' for small gap -->
                            <!-- Image 1 -->
                            <div class="col-md-3 col-sm-6">
                              <img src={{ asset("imgs/insta1.png")}} alt="Image 1" class="img-fluid rounded">
                            </div>
                            <!-- Image 2 -->
                            <div class="col-md-3 col-sm-6">
                              <img src={{ asset("imgs/insta1.png")}} alt="Image 2" class="img-fluid rounded">
                            </div>
                            <!-- Image 3 -->
                            <div class="col-md-3 col-sm-6">
                              <img src={{ asset("imgs/insta1.png")}} alt="Image 3" class="img-fluid rounded">
                            </div>
                            <!-- Image 4 -->
                            <div class="col-md-3 col-sm-6">
                              <img src={{ asset("imgs/insta1.png")}} alt="Image 4" class="img-fluid rounded">
                            </div>
                          </div>    
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="container mt-4">
                        <div class="row mb-5 mt-5 g-2 text-center"> <!-- Added 'g-2' for small gap -->
                          <!-- Image 1 -->
                          <div class="col-md-3 col-sm-6">
                            <img src={{ asset("imgs/insta2.png")}} alt="Image 1" class="img-fluid rounded">
                          </div>
                          <!-- Image 2 -->
                          <div class="col-md-3 col-sm-6">
                            <img src={{ asset("imgs/insta2.png")}} alt="Image 2" class="img-fluid rounded">
                          </div>
                          <!-- Image 3 -->
                          <div class="col-md-3 col-sm-6">
                            <img src={{ asset("imgs/insta2.png")}} alt="Image 3" class="img-fluid rounded">
                          </div>
                          <!-- Image 4 -->
                          <div class="col-md-3 col-sm-6">
                            <img src={{ asset("imgs/insta2.png")}} alt="Image 4" class="img-fluid rounded">
                          </div>
                        </div>
                      </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
              </div>
        </div>
        <div class="mt-5 mb-5 ms-5 text-center content-border trending-insta">
          <a class="text-decoration-none" href="https://www.instagram.com/alishaan_basmati_rice/"><img src={{ asset("imgs/insta-icon.png")}} alt="insta"><span>Follow us on Instagram</span></a>
        </div>

    </div>
   </section>
  @include('layout.footer')
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src={{ asset("js/custom.js")}}></script>
</body>
</html> 
