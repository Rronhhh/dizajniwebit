<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <title>About Us - CodingNepal</title>
  <style>
   body {
  margin: 0;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

/* Navigation styles */
nav {
  background-color: #333;
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 20px;
}

.nav-items {
  list-style: none;
  display: flex;
}

.nav-items li {
  margin-right: 20px;
}

.logo {
  font-size: 1.5rem;
  font-weight: bold;
}

.logo a {
  text-decoration: none;
  color: inherit;
}

/* About Section styles */
.about-section {
  padding: 40px;
  text-align: center;
  background-color: #f9f9f9;
}

.about-text {
  max-width: 800px;
  margin: 0 auto;
  color: #555;
}

/* Reviews Section styles */
.reviews-section {
  background-color: #f9f9f9;
  padding: 40px;
  text-align: center;
}

.review-container {
  display: flex;
  justify-content: space-around;
  align-items: center;
  margin-top: 20px;
}

.review-card {
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  max-width: 300px;
  text-align: left;
  display: none;
  animation: fadeIn 1s ease-in-out;
}

.review-card p {
  font-style: italic;
  color: #555;
}

.review-card h3 {
  margin-top: 0;
  color: #333;
}

.slide {
  display: none;
}

/* Add styles for the slideshow controls */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  transform: translateY(100%);
   width: auto;
  padding: 16px;
  color: #fff;
  font-weight: bold;
  font-size: 18px;
  transition: 0.3s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  background-color: #333;
}

.prev {
  left: 10px; /* Adjust this value to move the controls horizontally */
  border-radius: 3px 0 0 3px;
}

.next {
  right: 10px; /* Adjust this value to move the controls horizontally */
  border-radius: 0 3px 3px 0;
}
/* Animation */
@keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

/* Footer styles */
.FooterSection {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
  text-align: center;
}

.footer-links a {
  color: #fff;
  margin: 0 10px;
  text-decoration: none;
}
    body {
      margin: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Navigation styles */
    nav {
      background-color:  #171c24;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 20px;
    }

    .nav-items {
      list-style: none;
      display: flex;
    }

    .nav-items li {
      margin-right: 20px;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: bold;
    }

    .logo a {
      text-decoration: none;
      color: inherit;
    }

    /* About Section styles */
    .about-section {
      padding: 40px;
      text-align: center;
      background-color: #f9f9f9;
    }

    .about-text {
      max-width: 800px;
      margin: 0 auto;
      color: #555;
    }

    /* Reviews Section styles */
    .reviews-section {
      background-color: #f9f9f9;
      padding: 40px;
      text-align: center;
    }

    .review-container {
      display: flex;
      justify-content: space-around;
      align-items: center;
      margin-top: 20px;
    }

    .review-card {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 300px;
      text-align: left;
      display: none;
      animation: fadeIn 1s ease-in-out;
    }

    .review-card p {
      font-style: italic;
      color: #555;
    }

    .review-card h3 {
      margin-top: 0;
      color: #333;
    }

    .slide {
      display: none;
    }

    .prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: auto;
  padding: 16px;
  color: #fff;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  background-color: #333;
}

.prev {
  left: 10px; /* Adjust this value to move the controls horizontally */
  border-radius: 3px 0 0 3px;
}

.next {
  right: 10px; /* Adjust this value to move the controls horizontally */
  border-radius: 0 3px 3px 0;
}

    /* Animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    /* Footer styles */
    .FooterSection {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    .footer-links a {
      color: #fff;
      margin: 0 10px;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <!-- Navigation -->
  <nav>
    <div class="logo"><a href="#">CodingNepal</a></div>
    <div class="nav-items">
      <li><a href="./home.html">Home</a></li>
      <li><a href="./about.html">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="./loginRegister.html">Login/Register</a></li>
    </div>
  </nav>

  <!-- About Section -->
  <section class="about-section">
    <h2>About MobileShop</h2>
    <div class="about-text">
      <p>
        Welcome to MobileShop, your ultimate destination for all things tech and innovation.
      </p>
      <p>
        Established with a vision to redefine the mobile shopping experience, MobileShop is not just a store; it's a journey into the world of cutting-edge technology and style. Our mission is to bring you the latest smartphones, accessories, and gadgets that seamlessly blend into your dynamic lifestyle.
      </p>
      <p>
        At MobileShop, we believe in the power of innovation and the impact it can have on our lives. That's why we carefully curate our collection to feature products that embody the perfect synergy of form and function. Each item in our inventory is selected to elevate your mobile experience and keep you ahead of the technological curve.
      </p>
      <p>
        Our passionate team at MobileShop consists of tech enthusiasts, trendsetters, and customer service professionals who are dedicated to providing you with an unparalleled shopping experience. From answering your queries to ensuring swift deliveries, we're here to make your journey with MobileShop seamless and enjoyable.
      </p>
      <p>
        As we embark on this exciting adventure, we invite you to explore our vast array of products, discover the latest trends, and be a part of the MobileShop community. Thank you for choosing MobileShop—where technology meets style, and innovation knows no bounds!
      </p>
      
    </div>
  </section>

  <!-- Reviews Section -->
  <section class="reviews-section">
    <h2>What our customers say</h2>
    <div class="review-container">
        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
      <div class="review-card slide">
        <h3>John Doe</h3>
        <p>"Great products and excellent customer service! I highly recommend MobileShop."</p>
      </div>
      <div class="review-card slide">
        <h3>Jane Smith</h3>
        <p>"The quality of their accessories is impressive. Fast shipping too!"</p>
      </div>
      <div class="review-card slide">
        <h3>Bob Johnson</h3>
        <p>"I purchased a smartphone, and it exceeded my expectations. Will buy again."</p>
      </div>
      <div class="review-card slide">
        <h3>Alice Williams</h3>
        <p>"Fashionable Smartwatch is a game-changer. Love the design and features."</p>
      </div>
      <div class="review-card slide">
        <h3>Charlie Brown</h3>
        <p>"MobileShop offers a fantastic range of products. Great value for money!"</p>
      </div>
    </div>
  
    <!-- Add slideshow controls inside review-container -->
    
  </section>

  <!-- Footer Section -->
  <section class="FooterSection">
    <footer class="footer-distributed">
      <div class="footer-centered">
        <div class="footer-left">
          <h3>Coding<span>Nepal</span></h3>
          <p class="footer-links">
            <a href="index.html" class="link-1">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="./loginRegister.html">Login/Register</a>
          </p>
          <p class="footer-company-name">CodingNepal © 2023</p>
        </div>
        <div class="footer-center">
          <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Kathmandu, Nepal</span></p>
          </div>
          <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:info@codingnepal.com">info@codingnepal.com</a></p>
          </div>
        </div>
        <div class="footer-right">
          <p class="footer-company-about">
            <span>About CodingNepal</span>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim cumque animi, soluta id omnis sint nulla quidem nisi rerum neque earum eius adipisci commodi. Vitae iusto doloribus sed ex accusamus.
          </p>
        </div>
      </div>
    </footer>
  </section>

  <!-- Slideshow Script -->
  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    showSlide(currentSlide);
  
    function showSlide(index) {
      slides.forEach((slide) => (slide.style.display = 'none'));
      slides[index].style.display = 'block';
    }
  
    function changeSlide(n) {
      currentSlide += n;
      if (currentSlide < 0) {
        currentSlide = slides.length - 1;
      } else if (currentSlide >= slides.length) {
        currentSlide = 0;
      }
      showSlide(currentSlide);
    }
  
    // Add event listeners for slideshow controls
    document.querySelector('.review-container').addEventListener('click', (event) => {
      if (event.target.classList.contains('prev')) {
        changeSlide(-1);
      } else if (event.target.classList.contains('next')) {
        changeSlide(1);
      }
    });
  </script>
</body>

</html> 