<?php require "./components/head.php" ?>
<title>PujaBooking</title>
</head>

<body id="body">
  <button type="button" class="mobile-nav-toggle" onclick="toggleMobileNav()"><i class="fa fa-bars"></i></button>
  <main id="main">
    <?php require "./components/navbar.php" ?>

    <!--Intro Section -->
    <section id="intro">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div id="intro-img" class="intro-imgs puja-intro">
              <img src="./img/p2.webp" alt="">
              <img src="./img/p2.webp" alt="">
            </div>
          </div>
        </div>
      </div><!-- #intro -->
    </section>

    <!--about Section-->
    <section id="booking" class="booking hotelbook">
      <div class="container">
        <div class="hotel-details">
          <div class="hotel-info">
            <div class="flex-hotel-head">
              <div class="hotel-header">
                <h2>Kali Puja</h2>
                <p class="location">K block, Tagore Park Kasba, Kolkata</p>
              </div>
              <div class="rating-box">
                <div class="rating-score">
                  4.4 <i class="fas fa-star"></i>
                </div>
                <div class="rating-count">
                  388 Ratings
                </div>
              </div>
            </div>
          </div>
          <div class="hotel-tags">
            <span class="tag">Mid range</span>
            <span class="tag wizard-member">WIZARD MEMBER</span>
            <span class="tag checkin-rating">5.0 • Check-in rating</span>
          </div>
          <div class="company-service">
            <span><i class="fas fa-heart"></i> Company Serviced</span>
          </div>

          <div class="content mobile-padding pt-4">
            <p class="m-0 mb-2">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut molestias cupiditate ab quisquam labore unde
              quasi, impedit adipisci sed pariatur accusantium officiis accusamus quidem. Magni possimus non eaque dolor
              sunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto facilis, accusamus minus dolores
              magni labore nesciunt aut voluptatum voluptatibus reiciendis laborum libero ab iure deserunt iste at ea.
              Accusamus, enim.
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium possimus ipsam aliquid dolore illum,
              eum consequuntur quisquam velit quaerat totam facilis quidem qui blanditiis nemo nesciunt fugiat vel. Rem,
              harum.
            </p>
          </div>

        </div>
        <div class="book-details">
          <div class="price-section">
            <div class="price-hotel">
              ₹ 598 <span class="original-price">₹321</span> <span class="discount">81% off</span>
            </div>
            <div class="taxes-fees">+ taxes & fees: ₹108</div>
          </div>
          <form class="row booking-details mb-3">
            <div class="col-md-4 form-group">
              <label for="pujas" class="form-label">Puja's type</label>
              <select class="form-control" id="pujas" name="pujas" require>
                <option value="">Online</option>
                <option value="">Offline</option>
              </select>
            </div>
            <div class="col-md-4 form-group">
              <label for="pujaList" class="form-label">List Of Puja</label>
              <select class="form-control" id="pujaList" name="pujaList" require>
                <option value="">General</option>
                <option value="">Special</option>
              </select>
            </div>
            <div class="col-md-4 form-group">
              <label for="slot" class="form-label">Select Slot</label>
              <input type="time" class="form-control" id="slot" name="slot" required>
            </div>
            <div class="col-md-4 form-group">
              <label for="checkIn" class="form-label">Select Date</label>
              <input type="date" class="form-control" id="checkIn" placeholder="Date" name="checkIn" require>
            </div>
            <div class="col-md-4 form-group">
              <label for="purohitList" class="form-label">Purohit Name</label>
              <input type="text" class="form-control" id="purohitList" value="Suman Thakur" name="purohitList" require>
            </div>
            <div class="col-md-4 form-group">
              <label for="naam" class="form-label">Name</label>
              <input type="text" class="form-control" id="naam" placeholder="Name" name="naam" require>
            </div>
            <div class="col-md-4 form-group">
              <label for="dakshina" class="form-label">Puja Dakshina</label>
              <input type="number" class="form-control" id="dakshina" placeholder="Dakshina" name="dakshina" min="0"
                require>
            </div>
            <div class="col-md-4 form-group">
              <label for="prasad" class="form-label"> </label>
              <div class="checkbox-cng">
                <label>
                  Prasad
                  <input class="ml-2" type="checkbox" name="ticket" value="General" onclick="toggleTextField(this)">
                </label>
              </div>
            </div>
            <div class="col-md-4 form-group prasadFields">
              <label for="prasadInput1" class="form-label">Village/City</label>
              <input type="text" class="form-control" id="prasadInput1" placeholder="Village / City">
            </div>
            <div class="col-md-4 form-group prasadFields">
              <label for="prasadInput2" class="form-label">District</label>
              <input type="text" class="form-control" id="prasadInput2" placeholder="District">
            </div>
            <div class="col-md-4 form-group prasadFields">
              <label for="prasadInput3" class="form-label">Pin</label>
              <input type="text" class="form-control" id="prasadInput3" placeholder="Pin">
            </div>
            <div class="col-md-6 form-group">
              <label for="checkbox" class="form-label"> </label>
              <div class=" checkbox-cng">
                <label>General<input class="ml-2" type="checkbox" name="ticket" value="General"
                    onclick="onlyOneCheckbox(this)"></label>
                <label> VIP<input class="ml-2" type="checkbox" name="ticket" value="VIP"
                    onclick="onlyOneCheckbox(this)"></label>
                <label>VVIP<input class="ml-2" type="checkbox" name="ticket" value="VVIP"
                    onclick="onlyOneCheckbox(this)">
                </label>
              </div>
            </div>
          </form>
          <div class="savings-section px-4">
            <div class="savings-label">Your savings</div>
            <div class="savings-amount">₹160</div>
          </div>
          <div class="savings-section px-4">
            <div class="savings-label">Total Price <br>
              <div class="taxes-included">Including taxes & fees</div>
            </div>
            <div class="savings-amount">₹700</div>
          </div>
          <div class="booking-system mt-4">
            <button class="continue-booking">
              <a href="#!">
                Continue to Book
              </a></button>
          </div>
        </div>

      </div>
    </section><!-- #about -->

  </main>
  <?php require "./components/footer.php" ?>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const checkInInput = document.getElementById('checkIn');

      // Set the minimum date for check-in as today
      const today = new Date().toISOString().split('T')[0];
      checkInInput.setAttribute('min', today);

      // Set the minimum date for check-out based on the selected check-in date
      checkInInput.addEventListener('change', function () {
        checkOutInput.value = "";  // Clear the check-out date
        checkOutInput.setAttribute('min', this.value);
      });
    });

    function onlyOneCheckbox(checkbox) {
      var checkboxes = document.getElementsByName('ticket');
      checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false;
      });
    }

    function toggleTextField(checkbox) {
      var textFields = document.getElementsByClassName('prasadFields');
      for (var i = 0; i < textFields.length; i++) {
        if (checkbox.checked) {
          textFields[i].style.display = 'block';
        } else {
          textFields[i].style.display = 'none';
        }
      }
    }

    function setMinTime() {
      var currentTime = new Date();
      var hours = currentTime.getHours();
      var minutes = currentTime.getMinutes();

      // Format the time to match the format required by the time input (HH:MM)
      hours = hours < 10 ? '0' + hours : hours;
      minutes = minutes < 10 ? '0' + minutes : minutes;

      var minTime = hours + ':' + minutes;
      document.getElementById('slot').setAttribute('min', minTime);
    }

    // Set the minimum time when the page loads
    window.onload = setMinTime;
  </script>
</body>

</html>