<?php
session_start();
$isLoggedIn = isset($_SESSION['user']);
$username = $_SESSION['user']['name'] ?? '';
?>


<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VerdiTrip - Khám Phá Việt Nam</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Merriweather:wght@400;500;700&display=swap" rel="stylesheet"> -->

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <link rel="shortcut icon" href="/VerdiTrip (7).png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
    />
  </head>
  <body>
    <div class="main-container">
      <header>
        <div class="logo" data-aos="fade-right" data-aos-duration="1000">
          <a href="#">
            <img src="assets/VerdiTrip.png" alt="VerdiTrip Logo" />
          </a>
        </div>

        <div
          class="hamburger-menu"
          data-aos="fade-left"
          data-aos-duration="1000"
        >
          <i class="bx bx-menu"></i>
        </div>

        <nav class="main-nav" data-aos="fade-down" data-aos-duration="1000">
          <ul>
            <li>
              <i class="bx bx-info-circle"></i
              ><a href="#about-us" class="active">GIỚI THIỆU</a>
            </li>
            <li>
              <i class="bx bx-map"></i><a href="#destinations">ĐIỂM ĐẾN</a>
            </li>
            <li>
              <i class="bx bx-calendar"></i
              ><a href="#experience">TRẢI NGHIỆM</a>
            </li>
            <li><i class="bx bx-phone"></i><a href="#contact">LIÊN HỆ</a></li>
          </ul>
        </nav>

        <div
          class="header-controls"
          data-aos="fade-left"
          data-aos-duration="1000"
        >
          <div class="search-container">
            <form class="search-form">
              <input
                type="text"
                placeholder="Tìm điểm đến..."
                class="search-input"
              />
              <button type="submit" class="search-btn">
                <i class="bx bx-search"></i>
              </button>
            </form>
          </div>

          <div class="book-btn">
            <?php if ($isLoggedIn): ?>
            <div id="user-area">
              <p>
                Xin chào, <strong><?= htmlspecialchars($username) ?></strong>!
              </p>
              <a href="http://localhost/auth/verditrip-master%202/logout.php" class="btn primary-btn">ĐĂNG XUẤT</a>
            </div>
            <?php else: ?>
            <a href="http://localhost/auth/verditrip-master%202/index.php" class="btn primary-btn">ĐĂNG NHẬP</a>
            <?php endif; ?>
          </div>
        </div>
      </header>

      <!-- Sidebar cho mobile -->
      <div class="sidebar">
        <div class="close-icon">
          <i class="bx bx-x"></i>
        </div>

        <ul>
          <li><a href="#about-us" class="active">GIỚI THIỆU</a></li>
          <li><a href="#destinations">ĐIỂM ĐẾN</a></li>
          <li><a href="#experience">TRẢI NGHIỆM</a></li>
          <li><a href="#contact">LIÊN HỆ</a></li>
        </ul>

        <div class="book-btn" data-aos="fade-up" data-aos-duration="1000">
          <?php if ($isLoggedIn): ?>
          <div id="user-area">
            <p>
              Xin chào, <strong><?= htmlspecialchars($username) ?></strong>!
            </p>
            <a href="logout.php" class="btn primary-btn">ĐĂNG XUẤT</a>
          </div>
          <?php else: ?>
          <a href="index.php" class="btn primary-btn">ĐĂNG NHẬP</a>
          <?php endif; ?>
        </div>
      </div>
      <section class="hero-section" data-aos="fade-up" data-aos-duration="1000">
        <div class="hero-image">
          <img
            src="assets/halong.jpg"
            alt="Vịnh Hạ Long - Kỳ quan thiên nhiên thế giới"
          />

          <div class="slide-controls">
            <div class="slide-dot active"></div>
            <div class="slide-dot"></div>
            <div class="slide-dot"></div>
          </div>
        </div>

        <div
          class="hero-content"
          data-aos="fade-right"
          data-aos-duration="1000"
        >
          <h6>KHÁM PHÁ ĐẤT NƯỚC HÌNH CHỮ S</h6>
          <h1>Trải Nghiệm<br />Vẻ Đẹp<br />Việt Nam</h1>
          <div class="hero-buttons">
            <a href="#destinations" class="btn book-trip-btn">KHÁM PHÁ NGAY</a>
            <a href="#location" class="btn location-btn"
              ><i class="bx bx-map"></i
            ></a>
          </div>
        </div>

        <!-- <div class="about-card">
          <div class="about-header">GIỚI THIỆU</div>
          <div class="about-content">
            <img
              src="assets/VerdiTrip.png"
              alt="Đội ngũ VerdiTrip"
              class="team-photo"
            />
            <div class="about-text">
              <h4>Đội Ngũ Chúng Tôi</h4>
              <p>
                Chuyên gia du lịch với kinh nghiệm tạo nên những hành trình khó
                quên tại Việt Nam.
              </p>
              <a href="#about" class="learn-more-link"
                ><i class="bx bx-right-arrow-alt"></i
              ></a>
            </div>
          </div>
        </div> -->
      </section>

      <div class="social-links" data-aos="fade-up" data-aos-duration="1000">
        <div class="social-icons">
          <a href="#"><i class="bx bxl-instagram"></i></a>
          <a href="#"><i class="bx bxl-facebook"></i></a>
          <a href="#"><i class="bx bxl-tiktok"></i></a>
          <a href="#"><i class="bx bxl-pinterest"></i></a>
        </div>
      </div>

      <!-- <div class="travel-partners">
        <div class="partner">
          <img src="assets/VerdiTrip.png" alt="Tripadvisor" />
        </div>
        <div class="partner">
          <img src="assets/VerdiTrip.png" alt="Saigontourist" />
        </div>
        <div class="partner">
          <img src="assets/VerdiTrip.png" alt="Vietravel" />
        </div>
        <div class="partner">
          <img src="assets/VerdiTrip.png" alt="Vietnam Airlines" />
        </div>
      </div> -->

      <section
        id="destinations"
        class="destinations-section"
        data-aos="fade-up"
        data-aos-duration="1000"
      >
        <div class="section-header" data-aos="fade-up" data-aos-duration="1000">
          <h2>Thành Phố Nổi Bật</h2>
          <p>Những thành phố không thể bỏ lỡ tại Việt Nam</p>
          <div
            class="navigation-arrows"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <button class="nav-arrow prev">
              <i class="bx bx-chevron-left"></i>
            </button>
            <button class="nav-arrow next">
              <i class="bx bx-chevron-right"></i>
            </button>
          </div>
        </div>

        <div
          class="destinations-slider"
          data-aos="fade-up"
          data-aos-duration="1000"
        >
          <div class="destination-card">
            <img src="assets/halong.jpg" alt="Vịnh Hạ Long" />
            <h3>Đà Nẵng</h3>
            <p>
              Đà Nẵng là thành phố biển năng động Việt Nam. Nơi đây với cảnh
              quan thiên nhiên tuyệt đẹp và sự phát triển du lịch
            </p>
            <a href="danang.php" class="btn outline-btn">KHÁM PHÁ</a>
          </div>

          <div class="destination-card">
            <img src="assets/hoian.jpg" alt="Phố Cổ Hội An" />
            <h3>Phố Cổ Hội An</h3>
            <p>
              Thành phố cổ quyến rũ với những ngôi nhà cổ kính, đèn lồng đầy màu
              sắc và không khí truyền thống đặc trưng.
            </p>
            <a
              href="http://127.0.0.1:5500/ptoject-main/ha.html"
              class="btn outline-btn"
              >KHÁM PHÁ</a
            >
          </div>

          <div class="destination-card">
            <img src="assets/sapa.jpg" alt="Sapa" />
            <h3>Sapa</h3>
            <p>
              Thiên đường mây trắng với những thửa ruộng bậc thang tuyệt đẹp và
              văn hóa đa dạng của các dân tộc miền núi.
            </p>
            <a href="#" class="btn outline-btn">KHÁM PHÁ</a>
          </div>

          <div class="destination-card">
            <img src="assets/phongnhakebang.jpg" alt="Phong Nha - Kẻ Bàng" />
            <h3>Phong Nha - Kẻ Bàng</h3>
            <p>
              Vùng đất của những hang động kỳ vĩ, trong đó có Sơn Đoòng - hang
              động lớn nhất thế giới.
            </p>
            <a href="#" class="btn outline-btn">KHÁM PHÁ</a>
          </div>

          <div class="destination-card">
            <img src="assets/ninhbinh.jpg" alt="Ninh Bình" />
            <h3>Ninh Bình</h3>
            <p>
              Ninh Bình - Tuyệt sắc miền Cố đô. Vẻ đẹp non nước hữu tình, nơi di
              sản và thiên nhiên hội tụ.
            </p>
            <a href="#" class="btn outline-btn">KHÁM PHÁ</a>
          </div>
        </div>
      </section>

      <section
        id="experience"
        class="booking-process"
        data-aos="fade-up"
        data-aos-duration="1000"
      >
        <div class="section-header">
          <h2>Trải Nghiệm Du Lịch</h2>
          <p>Khám phá văn hóa và thiên nhiên Việt Nam</p>
        </div>

        <div class="process-steps">
          <div
            class="process-step left-step"
            data-aos="fade-right"
            data-aos-duration="1000"
          >
            <div class="step-icon">
              <i class="bx bx-landscape"></i>
            </div>
            <div class="step-content">
              <h3>Thiên Nhiên<br />Tuyệt Đẹp</h3>
              <p>
                Từ những vịnh biển hoang sơ đến những dãy núi hùng vĩ, Việt Nam
                sở hữu cảnh quan thiên nhiên đa dạng đang chờ bạn khám phá.
              </p>
            </div>
          </div>

          <div
            class="process-step center-step"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <div class="step-icon">
              <i class="bx bx-restaurant"></i>
            </div>
            <div class="step-content">
              <h3>Ẩm Thực<br />Đặc Sắc</h3>
              <p>
                Bạn có thể thưởng thức hàng trăm món ăn ngon và đặc sản địa
                phương trên khắp các vùng miền, khám phá nền ẩm thực đã được thế
                giới công nhận.
              </p>
              <a href="#" class="btn outline-btn">TÌM HIỂU THÊM</a>
            </div>
          </div>

          <div
            class="process-step right-step"
            data-aos="fade-left"
            data-aos-duration="1000"
          >
            <div class="step-icon">
              <i class="bx bx-buildings"></i>
            </div>
            <div class="step-content">
              <h3>Di Sản<br />Văn Hóa</h3>
              <p>
                Việt Nam tự hào với 8 di sản được UNESCO công nhận cùng với nền
                văn hóa lâu đời đậm đà bản sắc dân tộc.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section
        id="about-us"
        class="about-us-section"
        data-aos="fade-up"
        data-aos-duration="1000"
      >
        <div class="about-image" data-aos="fade-right" data-aos-duration="1000">
          <img src="assets/vietnam.jpg" alt="Văn hóa Việt Nam" />
        </div>

        <div
          class="about-text-container"
          data-aos="fade-left"
          data-aos-duration="1000"
        >
          <h2>Về Chúng Tôi</h2>
          <p>
            VerdiTrip là đơn vị tiên phong trong lĩnh vực quảng bá du lịch tại
            Việt Nam. Chúng tôi tự hào giới thiệu đến du khách trong và ngoài
            nước vẻ đẹp thiên nhiên hùng vĩ, nền văn hóa phong phú và ẩm thực
            đặc sắc của đất nước hình chữ S. Với đội ngũ chuyên nghiệp và giàu
            kinh nghiệm, chúng tôi cung cấp thông tin chính xác, hữu ích và hấp
            dẫn về các điểm đến du lịch, giúp du khách lên kế hoạch cho chuyến
            đi hoàn hảo.
          </p>

          <div class="team-info" data-aos="fade-up" data-aos-duration="1000">
            <img
              src="assets/VerdiTrip.png"
              alt="Đội ngũ VerdiTrip"
              class="team-photo-small"
            />
            <div class="team-text" data-aos="fade-up" data-aos-duration="1000">
              <h4>Đội Ngũ Chúng Tôi</h4>
              <p>
                Chuyên gia du lịch với kinh nghiệm tạo nên những nội dung hấp
                dẫn về du lịch Việt Nam.
              </p>
              <a href="#about" class="learn-more-link"
                ><i class="bx bx-right-arrow-alt"></i
              ></a>
            </div>
            <a href="#" class="btn primary-btn read-more-btn">XEM THÊM</a>
          </div>
        </div>
      </section>

      <section
        id="contact"
        class="achievements-section"
        data-aos="fade-up"
        data-aos-duration="1000"
      >
        <div class="achievement-header">
          <span>ĐƠN VỊ QUẢNG BÁ DU LỊCH UY TÍN</span>
          <h2>Thành Tựu Của Chúng Tôi</h2>
          <p>
            VerdiTrip tự hào đã giới thiệu vẻ đẹp Việt Nam đến hàng triệu du
            khách trong và ngoài nước. Từ những bãi biển hoang sơ đến những di
            sản văn hóa đặc sắc, chúng tôi luôn nỗ lực mang đến những thông tin
            chính xác, hữu ích và hấp dẫn nhất về du lịch Việt Nam.
          </p>
        </div>

        <div
          class="achievement-stats"
          data-aos="fade-up"
          data-aos-duration="1000"
        >
          <div class="stat-item primary">
            <h3>5M+</h3>
            <p>Lượt Truy Cập</p>
          </div>
          <div class="stat-item">
            <h3>500+</h3>
            <p>Bài Viết</p>
          </div>
          <div class="stat-item">
            <h3>63</h3>
            <p>Tỉnh Thành</p>
          </div>
          <div class="stat-item primary">
            <h3>120+</h3>
            <p>Điểm Đến</p>
          </div>
          <div class="stat-item primary">
            <h3>8+</h3>
            <p>Năm Kinh Nghiệm</p>
          </div>
          <div class="stat-item">
            <h3>15+</h3>
            <p>Giải Thưởng</p>
          </div>
        </div>

        <div
          class="achievement-image"
          data-aos="fade-up"
          data-aos-duration="1000"
        >
          <img src="assets/vietnam.jpg" alt="Giải thưởng Du lịch Việt Nam" />
        </div>
      </section>

      <footer class="footer" data-aos="fade-up" data-aos-duration="1000">
        <div class="footer-content" data-aos="fade-up" data-aos-duration="1000">
          <div
            class="footer-company"
            data-aos="fade-right"
            data-aos-duration="1000"
          >
            <h3 class="footer-logo">VerdiTrip</h3>
            <p>
              Đơn vị quảng bá du lịch Việt Nam hàng đầu. Chúng tôi mang đến
              những thông tin hữu ích giúp bạn khám phá vẻ đẹp đất nước hình chữ
              S.
            </p>
            <div
              class="footer-social"
              data-aos="fade-left"
              data-aos-duration="1000"
            >
              <a href="#"><i class="bx bxl-facebook"></i></a>
              <a href="#"><i class="bx bxl-instagram"></i></a>
              <a href="#"><i class="bx bxl-tiktok"></i></a>
              <a href="#"><i class="bx bxl-youtube"></i></a>
            </div>
          </div>

          <div class="footer-links" data-aos="fade-up" data-aos-duration="1000">
            <h4>Khám Phá</h4>
            <ul>
              <li><a href="#destinations">Miền Bắc</a></li>
              <li><a href="#destinations">Miền Trung</a></li>
              <li><a href="#destinations">Miền Nam</a></li>
              <li><a href="#destinations">Đảo & Biển</a></li>
            </ul>
          </div>

          <div class="footer-links" data-aos="fade-up" data-aos-duration="1000">
            <h4>Thông Tin</h4>
            <ul>
              <li><a href="#about-us">Về Chúng Tôi</a></li>
              <li><a href="#experience">Trải Nghiệm</a></li>
              <li><a href="#">Bài Viết</a></li>
              <li><a href="#contact">Liên Hệ</a></li>
            </ul>
          </div>

          <div
            class="footer-contact"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <h4>Liên Hệ</h4>
            <p><i class="bx bx-map"></i> Hòa Châu, Hòa Vang, TP Đà Nẵng</p>
            <p><i class="bx bx-phone"></i> +84 775544920</p>
            <p><i class="bx bx-envelope"></i> verditrip@gmail.com</p>
            <p><i class="bx bx-time"></i> 8:00 - 17:00, Thứ 2 - Thứ 6</p>
          </div>
        </div>

        <div class="footer-bottom" data-aos="fade-up" data-aos-duration="1000">
          <p>&copy; 2025 VerdiTrip. Bản quyền thuộc về VerdiTrip.</p>
          <div class="footer-policy">
            <a href="#">Điều khoản sử dụng</a>
            <a href="#">Chính sách bảo mật</a>
          </div>
        </div>
      </footer>
    </div>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 1000,
        once: false,
      });
    </script>
  </body>
</html>
