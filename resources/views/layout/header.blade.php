<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container">
      <!-- Brand Logo -->
      <a class="navbar-brand" href="/">
        <img src={{ asset("imgs/Alishaan-Logo-web.png")}} alt="Alishaan Logo" class="logo">
      </a>
      <!-- Navbar Toggle for Mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navbar Links -->
      <div class="collapse navbar-collapse nav-div" id="navbarNav">
            <ul class="navbar-nav ms-5">
                <li class="nav-item me-3">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link {{ Request::is('why-us') ? 'active' : '' }}" href="/why-us">Why Us</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link {{ Request::is('products') ? 'active' : '' }}" href="/products">Products</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link {{ Request::is('trending') ? 'active' : '' }}" href="/trending">Trending</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link {{ Request::is('blogs') ? 'active' : '' }}" href="/blogs">Our Blogs</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link {{ Request::is('distributor') ? 'active' : '' }}" href="/distributor">Be a Distributor</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>