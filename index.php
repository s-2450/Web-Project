<?php
// 可選：設定頁面標題。這個變數會傳遞給 header.php
$pageTitle = "Group 3 Project";
// 引入 header 檔案
include 'header.php';
?>

 <!-- =========================
        CAROUSEL
    ========================= -->
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4500">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/index-carousel/Yuito-Takeuchi.png" class="d-block w-100" alt="" />
      </div>

      <div class="carousel-item">
        <img src="/img/index-carousel/kizuna-ai.png" class="d-block w-100" alt="" />
      </div>

      <div class="carousel-item">
        <img src="./img/yoasobi 1.png" class="d-block w-100" alt="" />
      </div>

      <div class="carousel-item">
        <img src="./img/Jennie.png" class="d-block w-100" alt="" />
      </div>

      <div class="carousel-item">
        <img src="./img/dearjane.png" class="d-block w-100" alt="" />
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- =========================
        TODAY'S PICKS
    ========================= -->
  <section class="container py-5 text-center">
    <p class="text-primary fs-5">Music chosen to match your mood</p>
    <h2 class="display-4 fw-bold mb-4">Today's Picks</h2>

    <a href="musicitems1.html" class="cta-btn mb-4">Try Now</a>

    <div class="row mt-4 g-4">
      <div class="col-6 col-md-3">
        <a href="music6.html" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-lg home-card">
            <img src="/img/Song/K歌之王-AIR.jpg" class="card-img-top rounded" alt="K Song King AIR" />
            <div class="card-body text-center">
              <h5 class="card-title">K歌之王 AIR</h5>
              <p class="small">Listen Now</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-6 col-md-3">
        <a href="music2.html" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-lg home-card">
            <img src="/img/Song/手繪黑卡.jpg" class="card-img-top rounded" alt="Hand-drawn Black Card" />
            <div class="card-body text-center">
              <h5 class="card-title">手繪黑卡</h5>
              <p class="small">Listen Now</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-6 col-md-3">
        <a href="music11.html" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-lg home-card">
            <img src="/img/Song/IRIS-OUT.jpg" class="card-img-top rounded" alt="IRIS OUT" />
            <div class="card-body text-center">
              <h5 class="card-title">IRIS OUT</h5>
              <p class="small">Listen Now</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-6 col-md-3">
        <a href="music12.html" class="text-decoration-none text-dark">
          <div class="card h-100 shadow-lg home-card">
            <img src="/img/Song/洗濯機.jpg" class="card-img-top rounded" alt="Washing Machine" />
            <div class="card-body text-center">
              <h5 class="card-title">洗濯機</h5>
              <p class="small">Listen Now</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <hr class="footer-divider" />

  <!-- =========================
        LOSSLESS AUDIO
    ========================= -->
  <section class="container py-5 text-center">
    <p class="text-primary fs-5">Experience pure, authentic sound</p>
    <h2 class="display-4 fw-bold">Lossless Audio</h2>
    <p class="text-muted fs-5 mb-4">
      Preserves all original audio data for CD-like clarity
    </p>

    <a href="latestnews.html" class="cta-btn mb-4">Learn More</a>

    <div class="row align-items-center mt-5">
      <div class="col-lg-6 mb-4">
        <img src="/img/index-img/BBBOX-Lossless.png" class="img-fluid rounded shadow" alt="BBBOX Lossless" />
      </div>

      <div class="col-lg-6 mb-4 text-center">
        <img src="/img/index-img/HD.png" class="tag-icon mb-3" style="width: 60px" />
        <img src="/img/index-img/HI-FI.png" class="tag-icon mb-3" style="width: 60px" />

        <h2 class="fw-bold display-5 mb-3">BBBOX Lossless Audio</h2>

        <p class="text-muted fs-5 mb-0">
          Higher-than-CD quality, supporting up to 24bit / 192kHz — without
          any upsampling.
        </p>
      </div>
    </div>
  </section>

  <hr class="footer-divider" />

  <!-- =========================
        EXPLORE BBBOX
    ========================= -->
  <section class="container py-5 text-center">
    <p class="fs-5">Featured Functions</p>
    <h2 class="display-4 fw-bold">Explore BBBOX</h2>
    <a href="about.html" class="cta-btn">Try for Free</a>

    <div class="row g-4 mt-4">
      <div class="col-6 col-md-3">
        <div class="card h-100 shadow-lg home-card">
          <img src="/img/index-img/Listening-achievement.png" class="card-img-top home-explore-img" alt="" />
          <div class="card-body text-center">
            <h5 class="card-title">Listening Achievements</h5>
            <p class="small">Track your sound journey with activity badges</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="card h-100 shadow-lg home-card">
          <img src="/img/index-img/Listen-together.png" class="card-img-top home-explore-img" alt="" />
          <div class="card-body text-center">
            <h5 class="card-title">Listen Together</h5>
            <p class="small">
              Enjoy music with your favorite artists or friends
            </p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="card h-100 shadow-lg home-card">
          <img src="/img/index-img/Music-recognition.png" class="card-img-top home-explore-img" alt="" />
          <div class="card-body text-center">
            <h5 class="card-title">Music Recognition</h5>
            <p class="small">Identify any song instantly</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="card h-100 shadow-lg home-card">
          <img src="/img/index-img/Multi-device-Support.png" class="card-img-top home-explore-img" alt="" />
          <div class="card-body text-center">
            <h5 class="card-title">Multi-device Support</h5>
            <p class="small">Listen anytime, anywhere</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr class="footer-divider" />

  <!-- =========================
        MUSIC RECOGNITION
    ========================= -->
  <section class="container py-5">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4">
        <div class="text-center">
          <img src="/img/index-img/listen-music.png" class="tag-icon mb-3" style="width: 60px" alt="listen music" />

          <h2 class="fw-bold display-5 mb-3">Music Recognition</h2>

          <p class="text-muted fs-5 mb-0">
            Identify songs or melodies instantly —<br />
            never miss a tune again.
          </p>
        </div>
      </div>

      <div class="col-lg-6">
        <img src="/img/index-img/Music-recognition-1.png" class="img-fluid rounded shadow" alt="Music Recognition" />
      </div>
    </div>
  </section>

  <hr class="footer-divider" />

  <!-- =========================
        MOOD-BASED MUSIC
    ========================= -->
  <section class="container py-5 text-center">
    <h2 class="display-4 fw-bold">Music for Every Mood</h2>
    <p class="text-muted fs-5 mb-3">
      Discover curated playlists that match your vibe — personalized for you
    </p>

    <a href="musicitems1.php" class="cta-btn">Learn More</a>
  </section>

  <!-- =========================
        Infinite Slider
    ========================= -->
  <section class="slideshow-one-line">
    <div class="scroll-track">
      <!-- Group 1 -->
      <div class="group">
        <img src="./img/home moving 1.png" alt="Listen 1" />
        <a href="musicitems1.html" class="overlay-btn">Listen Now</a>
      </div>

      <div class="group">
        <img src="./img/home moving 2.png" alt="Listen 2" />
        <a href="musicitems1.html" class="overlay-btn">Listen Now</a>
      </div>

      <div class="group">
        <img src="./img/home moving 3.png" alt="Listen 3" />
        <a href="musicitems1.html" class="overlay-btn">Listen Now</a>
      </div>

      <div class="group">
        <img src="./img/home moving 4.jpg" alt="Listen 4" />
        <a href="musicitems1.html" class="overlay-btn">Listen Now</a>
      </div>

      <div class="group">
        <img src="./img/home moving 5.jpg" alt="Listen 5" />
        <a href="musicitems1.html" class="overlay-btn">Listen Now</a>
      </div>

      <div class="group">
        <img src="./img/home moving 6.jpg" alt="Listen 6" />
        <a href="musicitems1.html" class="overlay-btn">Listen Now</a>
      </div>

      <div class="group">
        <img src="./img/home moving 7.jpg" alt="Listen 7" />
        <a href="musicitems1.html" class="overlay-btn">Listen Now</a>
      </div>

      <!-- Duplicate set -->
      <div class="group">
        <img src="./img/home moving 1.png" alt="Listen 1" />
        <a href="musicitems1.html" class="overlay-btn">Listen Now</a>
      </div>

      <div class="group">
        <img src="./img/home moving 2.png" alt="Listen 2" />
        <a href="musicitems1.html" class="overlay-btn">Listen Now</a>
      </div>

      <div class="group">
        <img src="./img/home moving 3.png" alt="Listen 3" />
        <a href="musicitems1.html" class="overlay-btn">Listen Now</a>
      </div>

      <div class="group">
        <img src="./img/home moving 4.jpg" alt="Listen 4" />
        <a href="musicitems1.html" class="overlay-btn">Listen Now</a>
      </div>

      <div class="group">
        <img src="./img/home moving 5.jpg" alt="Listen 5" />
        <a href="musicitems1.html" class="overlay-btn">Listen Now</a>
      </div>

      <div class="group">
        <img src="./img/home moving 6.jpg" alt="Listen 6" />
        <a href="musicitems1.html" class="overlay-btn">Listen Now</a>
      </div>

      <div class="group">
        <img src="./img/home moving 7.jpg" alt="Listen 7" />
        <a href="musicitems1.html" class="overlay-btn">Listen Now</a>
      </div>
    </div>
  </section>
<?php
// 引入 footer 檔案
include 'footer.php';
?>