<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Why Us | Alishaan</title>
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
  <link rel="stylesheet" href={{ asset("css/Responsive/whyus.css")}}>
</head>
<body>
  @include('layout.header')
  <!-- Banner -->
  <section>
    <div class="common-banner">
      <img class="w-100" src={{ asset("imgs/whyus.jpg")}} />
    </div>
  </section>
  <!-- Banner -->

  <!-- why choose Alishan -->
  <section class="whyChooseUsRb">
    <div class="mt-5 why-us-rb mb-5">
      <p class="text-center text-white">
        <span class="custom-text text">WHY CHOOSE</span>
        <img src={{ asset("imgs/Alishaan-head.png")}} class="ms-3 alishaan-head" alt="Alishaan Head">
      </p>
      <hr>
    </div>
    <div class="why-us-content">
      <p>
        Established in the year 1983, Alishaan Basmati Rice is a well-recognized name as a producer,
        wholesaler, and trader of Indian Basmati Rice, offering a wide array of traditional basmati rice. Over these years, we have
        always emphasized stringent quality standards to ensure that the products provided to our clients are still in
        line with their expectations. The goal of the company is to offer the highest quality product while maintaining
        a strong customer relationship. Past 37 years, we have been serving across the length and breadth of the food market
        including ethnic stores, specialty stores, ethnic stores, supermarkets, HORECA & institutions.
      </p>
    </div>
  </section>
  
  <!--  why choose Alishan -->

  <!-- whyusLegacy -->
  <section class="whyus-section">
    <div class="container-fluid">
      <!-- 1 -->
      <div class="whyus-box">
        <div class="row align-items-center custom-legacy flex-column-reverse flex-lg-row">
          <!-- Left side: Legacy text -->
          <div class="col-lg-6 d-flex justify-content-center">
            <div class="whyus-legacy p-4 text-white">
              <h2 class="mb-3">Legacy</h2>
              <p>
              Established in the year 1983, Alishaan Basmati Rice is a well-recognized name as a producer, wholesaler, and trader of Indian Basmati Rice, offering a wide array of traditional basmati rice. Over these years, we have always emphasized stringent quality standards to ensure that the products provided to our clients are still in line with their expectations. The goal of the company is to offer the highest quality product while maintaining a strong customer relationship. Past 37 years, we have been serving across length and breadth of the food market including ethnic stores, speciality stores, ethnic stores, supermarkets, HORECA & institutions.
              </p>
            </div>
          </div>

          <!-- Right side: Image with bowl and spoon -->
          <div class="col-lg-6 text-center">
            <div class="legacy-image-container position-relative">
              <img src={{ asset("imgs/whyusLegacy.png")}} alt="Basmati Rice Bowl" class="bowl-image" />
            </div>
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div class="whyus-box">
        <div class="row align-items-center custom-legacy">


          <!-- Right side: Image with bowl and spoon -->
          <div class="col-lg-6 text-center">
            <div class="legacy-image-container position-relative">
              <img src={{ asset("imgs/whyusQuality.png")}} alt="Basmati Rice Bowl" class="bowl-image" />
            </div>
          </div>
          <!-- Left side: Legacy text -->
  
          <div class="col-lg-6 d-flex justify-content-center">
            <div class="whyus-legacy p-4 text-white">
              <h2 class="mb-3">Quality</h2>
              <p>
                With a battery of hi-tech and top-of-the-line equipment such as Lab Kett Meters, Lab De-Huskers, Electronic Vernier Calipers, Precision Electronic Weighing Scales, Paddy Separator, Lab-polishers coupled with a strong back-up of the qualified technical team, nothing is left to change for establishing the top quality of paddy before it is put on the processing line. Our qualified and trained quality team conduct detailed quality tests at raw material to ensure only and only the right quality raw material is issued to each batch while each production batch is monitored through our in-process quality control team that carries out an inspection every 3 hours. The final material is then checked and approved by QA lab befit each dispatch. 
              </p>
            </div>
          </div>
        </div>
</div>
      <!-- 3 -->
      <div class="whyus-box">
        <div class="row align-items-center custom-legacy flex-column-reverse flex-lg-row">
          <!-- Right side: Image with bowl and spoon -->
  
          <!-- Left side: Legacy text -->
  
          <div class="col-lg-6 d-flex justify-content-center legacy-card">
            <div class="whyus-legacy p-4 text-white">
              <h2 class="mb-3">Strategic Planning</h2>
              <p>
                Established in the year 1983, Alishaan Basmati Rice is a well-recognized name as a producer, wholesaler,
                and trader of Indian Basmati Rice, offering a wide array of traditional basmati rice. Over these years, we
                have always emphasized stringent quality standards to ensure that the products provided to our clients are
                still in line with their expectations. The goal of the company is to offer the highest quality product while maintaining a strong customer
                relationship. Past 37 years, we have been serving across lengths and breadths of the food market including
                ethnic stores, specialty stores, ethnic stores, supermarkets, HORECA & institutions.
              </p>
            </div>
          </div>
          <div class="col-lg-6 text-center">
            <div class="legacy-image-container position-relative">
              <img src={{ asset("imgs/whyus-stregy.png")}} alt="Basmati Rice Bowl" class="bowl-image" />
            </div>
          </div>
        </div>
</div>
    </div>
  </section>
  <!-- whyusLegacy -->

  <!-- whyCertification -->

  <section class="certificate_section">
    <div class="certificate-rb-section">
      <h2 class="certificate-title text-center">Certifications</h2>
      <p class="certificate-description text-center">
        Each grain of Alishaan basmati rice is certified and approved by world-accredited certifying agencies and
        bodies:
      </p>
      <div class="container ">
        <div class="row ">
          <div class="col certificate-list">
            <ul>
              <li>BRC – Grade A</li>
              <li>FSMA</li>
              <li>Costco Addendum</li>
              <li>ISO 9000</li>
              <li>ISO 22000 (FSMS)</li>
            </ul>
          </div>
          <div class="col">
            <img src={{ asset("imgs/certificate.png")}} width="300" />
          </div>
          <div class="col certificate-list">
            <ul>
              <li>BRC – Grade A</li>
              <li>FSMA</li>
              <li>Costco Addendum</li>
              <li>ISO 9000</li>
              <li>ISO 22000 (FSMS)</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- whyCertification -->
  @include('layout.footer')
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src={{ asset("js/custom.js")}}></script>
</body>
</html>
