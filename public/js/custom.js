function setActiveTab(element) {
    // Remove 'active' class from all nav-links
    document.querySelectorAll('.nav-link').forEach(link => {
      link.classList.remove('active');
    });
  
    // Add 'active' class to the clicked nav-link
    element.classList.add('active');
  }
  