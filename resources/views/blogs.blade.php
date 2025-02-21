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
  <link rel="stylesheet" href={{ asset("css/Responsive/ourBlog.css")}}>
=======
  <link rel="stylesheet" href={{ asset("css/style.css")}}>
>>>>>>> emraan
</head>
<body>
  @include('layout.header')
  <!-- Banner -->
  <section>
        <div class="common-banner">
            <img class="w-100" src={{ asset("imgs/ourBlogBanner.png")}} />
        </div>
    </section>
    <!-- Banner -->

    <!-- our Basmati Range -->
    <section class="our-blogs h-100">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Descriptive Text -->
                <div class="col-lg-6 mt-5 p-0 our-blog">
                        <span class="custom-text text-capitalize text-white pb-14 blog-title px-4">OUR BLOGS</span>
                    <hr>
                    <img src={{ asset("imgs/blog01.png")}} width="100%" alt="rice image" class="blogImage">
                </div>  
                <div class="col-lg-6 being-right blog-main-content">
                    <h2 class="mt-5 blog-content">Why Basmati Rice is special than Regular Rice?</h2>

                    <p class="mt-3">When it comes to Basmati Rice, the world has expectations of premiumness. Known as
                        the King of Rice, Basmati Rice is no ordinary long grain of Rice. Alishaan Basmati Rice is grown
                        in the Himalayas with extreme care and love to meet the legacy of......</p>
<<<<<<< HEAD
                </div> 
            </div>
            <div class="row align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 mt-5 being-right blog-main-content">
=======
                </div>

               
                <div class="col-lg-6 mt-5 being-right blog-main-content">
>>>>>>> emraan
                    <h2 class="blog-content">Why Basmati Rice is special than Regular Rice?</h2>

                    <p class="mt-3">When it comes to Basmati Rice, the world has expectations of premiumness. Known as
                        the King of Rice, Basmati Rice is no ordinary long grain of Rice. Alishaan Basmati Rice is grown
                        in the Himalayas with extreme care and love to meet the legacy of......</p>
                </div>
                <div class="col-lg-6 mt-5 our-blog-hr">
                    
                    <img src={{ asset("imgs/ourBlog2.png")}} width="100%" alt="rice image">
                </div>
<<<<<<< HEAD
            </div>
            <div class="row align-items-center">
            <div class="col-lg-6 mt-5 our-blog-hr flex-column-reverse flex-lg-row">
                   <img src={{ asset("imgs/blog3.png")}} width="100%" alt="rice image">
               </div>
               <div class="col-lg-6 mt-5 being-right blog-main-content">
                   <h2 class=" blog-content">Why Basmati Rice is special than Regular Rice?</h2>

                   <p class="mt-3">When it comes to Basmati Rice, the world has expectations of premiumness. Known as
                       the King of Rice, Basmati Rice is no ordinary long grain of Rice. Alishaan Basmati Rice is grown
                   in the Himalayas with extreme care and love to meet the legacy of......</p>
               </div>
=======


                <div class="col-lg-6 mt-5 our-blog-hr">
                   
                    <img src={{ asset("imgs/blog3.png")}} width="100%" alt="rice image">
                </div>
                <div class="col-lg-6 mt-5 being-right blog-main-content">
                    <h2 class=" blog-content">Why Basmati Rice is special than Regular Rice?</h2>

                    <p class="mt-3">When it comes to Basmati Rice, the world has expectations of premiumness. Known as
                        the King of Rice, Basmati Rice is no ordinary long grain of Rice. Alishaan Basmati Rice is grown
                        in the Himalayas with extreme care and love to meet the legacy of......</p>
                </div>
>>>>>>> emraan
            </div>
        </div>
    </section>
  @include('layout.footer')
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src={{ asset("js/custom.js")}}></script>
</body>
</html>

