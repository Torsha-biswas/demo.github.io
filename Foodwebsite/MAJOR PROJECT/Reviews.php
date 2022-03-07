

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- ===== Link Swiper's CSS ===== -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- ===== Fontawesome CDN Link ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
        
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="Reviews.css">
    
    <!--<title>Card with Sliding Feature</title>-->
</head>
<body>

  <section>
    
    <div class="swiper mySwiper container">
      <div class="swiper-wrapper content">

        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="1.png" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
             
            </div>

            <div class="name-profession">
              <span class="name">Prem Shahi</span>
              <span class="profession">Must try paneer tikka</span>
            </div>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <p><b> This Restaurant gives the most fresh and tasty food yummy and Delicious</b></p>
            
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="2.jpg" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              
            </div>

            <div class="name-profession">
              <span class="name">Ria Jain</span>
              <span class="profession">must try dosa</span>
            </div>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>

           <p><b> It provides various  types of fusion food must visit the place.</b></p>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="3.png" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
             
            </div>

            <div class="name-profession">
              <span class="name">Niraj Singh</span>
              <span class="profession">icecream and veg items</span>
            </div>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <p> <b>Best  food in good food must try and visit this place.</b></p>
            
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="4.jpg" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              
            </div>

            <div class="name-profession">
              <span class="name">Raj Singh</span>
              <span class="profession">Tasty and yummy Chinese items</span>
            </div>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
             <p> <b>Every food items are yummy.</b></p>
            
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="5.webp" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
             
            </div>

            <div class="name-profession">
              <span class="name">Priya Sharma</span>
              <span class="profession">Delicious deserts </span>
            </div>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <p> <b>Tasty and Delicious sweets must visit.</b></p>
            
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="6.jpg" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              
            </div>

            <div class="name-profession">
              <span class="name">Shivam Kumar</span>
              <span class="profession">yummy Chicken</span>
            </div>

            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>

             <p> <b>It's  a best place to have fun and have good food. </b></p>
          </div>
        </div>
       
       

      </div>
    </div>

    <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
  </section>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
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
  <a href= "feedback.php"  class= "review-button">Your Feedback</a>

</body>
</html>
