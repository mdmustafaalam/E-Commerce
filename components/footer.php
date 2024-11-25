<?php require "./components/head.php" ?>

<footer id="footer" class="footer dark-background">
  <div class="footer-top">
    <div class="container">
      <div class="row row-foot gy-4">
        <div class="col-lg-2 col-md-3 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="img/logo.png" alt="" title="" />
            <span class="sitename">MusTafa</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Salt Lake</p>
            <p>West Bangal, India</p>
          </div>
          <div class="footer-contact pt-3">
            <p>
              Welcome to Mustafa – your one-stop shop for quality products. Explore a wide range of
              items tailored to meet your needs, with secure checkout and fast delivery.
            </p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links cng-foot">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#!">Brands</a></li>
            <li><a href="#!">Offers</a></li>
            <li><a href="#!">New</a></li>
            <li><a href="#!">Splurge</a></li>
            <li><a href="#!">Magazine</a></li>
            <li><a href="#!">Elite Offers</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links cng-foot">
          <h4>Company</h4>
          <ul>
            <li><a href="#!">Term & Condition</a></li>
            <li><a href="#!">Privacy Policy</a></li>
            <li><a href="#!">Return and Cancellation Policy</a></li>
            <li><a href="#!">Contact Info</a></li>
          </ul>
        </div>
        <div class="footer-map footer-links">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117925.3523126546!2d88.26495117488783!3d22.535406374621722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1725439736979!5m2!1sen!2sin"
            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="copyright text-center px-3">
    <div
      class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
      <div class="d-flex flex-column align-items-center align-items-lg-start">
        <div>
          © Copyright <strong><span>MusTafa</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 8,
    centeredSlides: true,
    // autoplay: {
    //   delay: 2500,
    //   disableOnInteraction: false,
    // },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
<script>
  function toggleMobileNav() {
    const mobileNav = document.getElementById('mobile-nav-menu-container');
    mobileNav.classList.toggle('active');
  }
</script>
<script>
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);
</script>
<script>
  var swiper = new Swiper(".mySwiperss", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      "@0.00": {
        slidesPerView: 2,
        spaceBetween: 5,
      },
      "@0.57": {
        slidesPerView: 3,
        spaceBetween: 5,
      },
      "@1.00": {
        slidesPerView: 4,
        spaceBetween: 15,
      },
      "@1.50": {
        slidesPerView: 4,
        spaceBetween: 20,
      },
    },
  });
</script>
<script>
  var swiper = new Swiper(".mySwipersrs", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    breakpoints: {
      "@0.00": {
        slidesPerView: 2,
        spaceBetween: 5,
      },
      "@0.37": {
        slidesPerView: 2,
        spaceBetween: 5,
      },
      "@0.87": {
        slidesPerView: 3,
        spaceBetween: 5,
      },
      "@1.33": {
        slidesPerView: 4,
        spaceBetween: 15,
      },
      "@1.50": {
        slidesPerView: 5,
        spaceBetween: 20,
      },
    },
  });
</script>