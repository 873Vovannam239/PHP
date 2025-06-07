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
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css"
    />
    <link rel="stylesheet" href="styles1.css" />
    <link rel="shortcut icon" href="/VerdiTrip (7).png" type="image/x-icon" />
    <link rel="shortcut icon" href="/VerdiTrip (7).png" type="image/x-icon" />  
     <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  </head>
  <body>
    <div class="main-container" data-aos="fade-up">
      <!-- Header -->
      <header>
        <div class="logo" data-aos="fade-right">
          <a href="#">
            <img src="assets/VerdiTrip.png" alt="VerdiTrip Logo" />
          </a>
        </div>

        <div class="hamburger-menu"   data-aos="fade-left"  >
          <i class="bx bx-menu"></i>
        </div>

        <nav class="main-nav" data-aos="fade-down">
          <ul>
            <li>
              <i class="bx bx-info-circle" ></i
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

        <div class="header-controls" data-aos="fade-left">
          <div class="search-container" data-aos="fade-right">
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

          <?php if ($isLoggedIn): ?>
    <p>Xin chào, <strong><?= htmlspecialchars($username) ?></strong>!</p>
    <a href="logout.php" class="btn primary-btn">ĐĂNG XUẤT</a>
<?php else: ?>
    <a href="index.php" class="btn primary-btn">ĐĂNG NHẬP</a>
<?php endif; ?>


        </div>
      </header>

      <!-- Sidebar cho mobile -->
      <div class="sidebar"  data-aos="fade-right">
        <div class="close-icon">
          <i class="bx bx-x"></i>
        </div>

        <ul>
          <li><a href="#about-us" class="active">GIỚI THIỆU</a></li>
          <li><a href="#destinations">ĐIỂM ĐẾN</a></li>
          <li><a href="#experience">TRẢI NGHIỆM</a></li>
          <li><a href="#contact">LIÊN HỆ</a></li>
        </ul>

        <div class="book-btn" data-aos="fade-up">
          <a href="#login" class="btn primary-btn">ĐĂNG NHẬP</a>
        </div>
      </div>
      <section class="hero-section" data-aos="fade-up">
        <div class="hero-image">
          <img
            src="assets/bien1.jpg"
            alt="Vịnh Hạ Long - Kỳ quan thiên nhiên thế giới"
          />

          <div class="slide-controls" data-aos="fade-up">
            <div class="slide-dot active"></div>
            <div class="slide-dot"></div>
            <div class="slide-dot"></div>
          </div>
        </div>

        <div class="hero-content" data-aos="fade-up">
          <h6>KHÁM PHÁ</h6>
          <h1>Trải Nghiệm<br />Vẻ Đẹp<br />Đà Nẵng</h1>
          <div class="hero-buttons" data-aos="fade-up">
            <a href="#destinations" class="btn book-trip-btn">KHÁM PHÁ NGAY</a>
            <a href="#location" class="btn location-btn"
              ><i class="bx bx-map"></i
            ></a>
              </div>
        </div>
      </section>

      <div class="social-links" data-aos="fade-up">
        <div class="social-icons" data-aos="fade-up">
          <a href="#"><i class="bx bxl-instagram"></i></a>
          <a href="#"><i class="bx bxl-facebook"></i></a>
          <a href="#"><i class="bx bxl-tiktok"></i></a>
          <a href="#"><i class="bx bxl-pinterest"></i></a>
        </div>
      </div>

      <section id="destinations" class="destinations-section"   data-aos="fade-up">
        <div class="section-header" data-aos="fade-up">
          <h2>Điểm Đến Nổi Bật</h2>
          <p>Những địa điểm không thể bỏ lỡ tại Đà Nẵng</p>
          <div class="navigation-arrows" data-aos="fade-up">
            <button class="nav-arrow prev">
              <i class="bx bx-chevron-left"></i>
            </button>
            <button class="nav-arrow next">
              <i class="bx bx-chevron-right"></i>
            </button>
          </div>
        </div>

        <div class="destinations-slider"  data-aos="fade-up">
          <div class="destination-card" data-aos="fade-up">
            <img src="anh/bien/bien1.jpg" alt="Ảnh biển">

            <h3>Biển Đà Nẵng</h3>
            <p>
              Biển Đà Nẵng nổi tiếng với bờ cát trắng, nước trong xanh và không
              gian thoáng đãng, thu hút du khách bởi vẻ đẹp tự nhiên và các hoạt
              động giải trí sôi động
            </p>
            <a href="#" class="btn outline-btn">KHÁM PHÁ</a>
          </div>

          <div class="destination-card" data-aos="fade-up">
            <img src="anh/cau/songhan1.jpg" alt="câu sông hàn" />
            <h3>Cầu sông Hàn</h3>
            <p>
              Cầu Sông Hàn là biểu tượng của Đà Nẵng, nổi bật với thiết kế quay
              độc đáo, nối liền hai bờ sông Hàn, thu hút du khách bởi vẻ đẹp
              lung linh về đêm.
            </p>
            <a href="#" class="btn outline-btn">KHÁM PHÁ</a>
          </div>

          <div class="destination-card" data-aos="fade-up">
            <img
              src="anh/banahill/bui-ngoc-0MKumUvzVF8-unsplash(1).jpg"
              alt="Banahill"
            />
            <h3>Bà Nà Hill</h3>
            <p>
              Bà Nà Hills là khu du lịch nổi tiếng ở Đà Nẵng, nằm trên núi Chúa,
              với khí hậu mát mẻ, Cầu Vàng độc đáo và Làng Pháp cổ kính.
            </p>
            <a href="#" class="btn outline-btn">KHÁM PHÁ</a>
          </div>

          <div class="destination-card"   data-aos="fade-up">
            <img
              src="anh/langmamnamo/6E070496-38D6-4482-B7DD-83415CA36DBE_1_201_a.jpeg"
              alt="Làng mắm nam ô"
            />
            <h3>Làng mắm nam ô</h3>
            <p>
              Làng mắm Nam Ô nổi tiếng với nước mắm truyền thống mang
              hương vị đậm đà đặc trưng.Nơi đây được công nhận là Di sản văn hóa
              phi vật thể quốc gia.
            </p>

            <a href="#" class="btn outline-btn">KHÁM PHÁ</a>
          </div>

          <div class="destination-card" data-aos="fade-up">
            <img src="anh/nhatho/1.png" alt="Giáo Xứ Chính Toà " />
            <h3>Giáo Xứ Chính Toà</h3>
            <p>
              Nhà thờ Chính Tòa (Nhà thờ Con Gà), là biểu tượng kiến trúc và tôn
              giáo nổi bật tại Đà Nẵng.Trên đỉnh có biểu tượng con gà – tượng
              trưng cho sự sám hối và thức tỉnh.
            </p>

            <a href="#" class="btn outline-btn">KHÁM PHÁ</a>
          </div>

          <div class="destination-card" data-aos="fade-up">
            <img src="anh/sontra/4.jpg" alt=" Sơn Trà" />
            <h3>Sơn Trà</h3>
            <p>
              Bán đảo Sơn Trà nổi tiếng với thiên nhiên hoang sơ, rừng núi và biển hòa quyện. Đây là điểm đến lý tưởng để khám phá cảnh đẹp, tham quan chùa Linh Ứng.
            </p>

            <a href="#" class="btn outline-btn">KHÁM PHÁ</a>
          </div>

          <div class="destination-card" data-aos="fade-up">
            <img src="anh/tuongdai/tuongdai.jpg" alt=" Tượng đài" />
            <h3>Tượng đài 2/9  </h3>
            <p>
              Đây là nơi tưởng niệm các anh hùng danh sĩ đã hy sinh vì độc lập dân tộc. Tượng đài có thiết kế với ba cánh vươn cao, biểu tượng cho tinh thần kiên cường, bất khuất.
            </p>

            <a href="#" class="btn outline-btn">KHÁM PHÁ</a>
          </div>

        </div>

        </div>
      </section>

      <section id="experience" class="booking-process" data-aos="fade-up">
        <div class="header">
          <h2>Trải Nghiệm Du Lịch</h2>
          <p>Khám phá văn hóa và thiên nhiên Đà Nẵng</p>
        </div>

        <div class="process-steps" data-aos="fade-up">
          <div class="process-step left-step" data-aos="fade-up">
            <div class="step-icon" data-aos="fade-right">
              <i class="bx bx-landscape"></i>
            </div>
            <div class="step-content" data-aos="fade-left">
              <h3 class="special-section-title">Thiên Nhiên Tuyệt Đẹp</h3>
              <p class="special-section-title">
 Đà Nẵng nổi bật với vẻ đẹp hài hòa giữa biển xanh, núi non và rừng nguyên sinh. Cảnh quan đa dạng từ bãi biển Mỹ Khê, bán đảo Sơn Trà đến Ngũ Hành Sơn, kết hợp với không khí trong lành tạo nên thiên đường nghỉ dưỡng và khám phá thiên nhiên tuyệt vời.</p>
<div class="nature-gallery">
  <div class="image big">
    <img src="anh/cau/songhan1.jpg" alt="Sơn Trà">
  </div>

  <div class="image-column">
    <div class="image small">
      <img src="anh/bien/hoanghon.jpg" alt="Ngũ Hành Sơn">
    </div>
    <div class="image small">
      <img src="anh/bien/hoanghon2.jpg" alt="Hòn Trà">
    </div>
  </div>

  <div class="image big">
    <img src="anh/cau/cầuthuậnphước.jpg" alt="Đèo Hải Vân">
  </div>
</div>



  </div>
  
    </div>
  </div>


    </div>
  </div>


            </div>
          </div>
              
              
              

            </div>
          </div>

          <div class="process-step center-step" data-aos="fade-up">
            <div class="step-icon step-icon-special" data-aos="fade-right">
              <i class="bx bx-restaurant"></i>
            </div>
           <section id="amthuc">
    <h2>Ẩm Thực Đặc Sắc</h2>
    <p>Bạn có thể thưởng thức hàng trăm món ăn ngon và đặc sản địa phương trên khắp các vùng miền, khám phá nền ẩm thực đã được thế giới công nhận.</p>
    
    <section id="tranding">
  <div class="container-food">
    <div class="swiper tranding-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide tranding-slide">
          <div class="tranding-slide-img">
            <img src="anh/1.png" alt="Bánh xèo" />
          </div>
        </div>

        <div class="swiper-slide tranding-slide">
          <div class="tranding-slide-img">
            <img src="anh/2.png" alt="Bánh bèo" />
          </div>
        </div>

        <div class="swiper-slide tranding-slide">
          <div class="tranding-slide-img">
            <img src="anh/3.png" alt="Mì Quảng" />
          </div>
        </div>

        <div class="swiper-slide tranding-slide">
          <div class="tranding-slide-img">
            <img src="anh/4.png" alt="Bún chả cá" />
          </div>
        </div>

        <div class="swiper-slide tranding-slide">
          <div class="tranding-slide-img">
            <img src="anh/5.png" alt="Bánh tráng cuốn thịt heo" />
          </div>
        </div>
        <div class="swiper-slide tranding-slide">
          <div class="tranding-slide-img">
            <img src="anh/6.png" alt="Bánh xèo" />
          </div>
        </div>
        <div class="swiper-slide tranding-slide">
          <div class="tranding-slide-img">
            <img src="anh/7.png" alt="Bánh xèo" />
          </div>
        </div>
        <div class="swiper-slide tranding-slide">
          <div class="tranding-slide-img">
            <img src="anh/8.png" alt="Bánh xèo" />
          </div>
        </div>
        <div class="swiper-slide tranding-slide">
          <div class="tranding-slide-img">
            <img src="anh/9.png" alt="Bánh xèo" />
          </div>
        </div>
      
        
      </div>
    </div>
  </div>
</section>

  </section>

          </div>

          <div class=" process-step right-step" data-aos="fade-up">
            <div class="step-icon" data-aos="fade-right">
              
              <i class="bx bx-buildings"></i>
            </div>
            <div class="step-content" data-aos="fade-left">
              <h3 class="special-section-title">Di Sản<br />Văn Hóa</h3>
              <p class="special-section-title">
                Đà Nẵng là vùng đất giàu bản sắc văn hóa, gắn liền với nhiều di sản quý giá. Thành phố mang đậm dấu ấn văn hóa Chămpa và văn hóa Việt truyền thống, thể hiện qua các công trình kiến trúc và lễ hội dân gian. Bảo tàng Điêu khắc Chăm là nơi lưu giữ nhiều hiện vật quý, phản ánh nghệ thuật và tín ngưỡng cổ xưa. Đà Nẵng còn nằm giữa hai di sản thế giới là Hội An và Huế, tạo điều kiện thuận lợi cho giao lưu và phát triển văn hóa khu vực.
              </p>

            </div>
               <div class="container" data-aos="fade-up">
      <div class="img">
        <img id="mainImage" src="/anh/bao-tang-da-nang-42-44-bach-dang-31-tran-phu-001-750x430.jpg" alt="Biển Đà Nẵng">
      </div>
      <div class="thumbnails">
        <img class="thumbnail" src="/anh/2004Da-Nang-don-nhan-nhieu-tin-vui-ve-di-san-van-hoa-3.jpg" alt="Biển 1" onclick="changeImage(this)">
        <img class="thumbnail" src="/anh/2004Da-Nang-don-nhan-nhieu-tin-vui-ve-di-san-van-hoa-6.jpg" alt="Biển 2" onclick="changeImage(this)">
        <img class="thumbnail" src="/anh/Furama-Resort-Danang-Sightseeing-Cham-Sculpture-Museum-2-1024x576.jpg" alt="Biển 3" onclick="changeImage(this)">
        <img class="thumbnail" src="/anh/le-hoi-cau-ngu-da-nang-2-6347.webp" alt="Biển 4" onclick="changeImage(this)">
        <img class="thumbnail" src="/anh/1-1.jpg" alt="Biển 5" onclick="changeImage(this)">
     
      </div>
    </div>
          </div>
        </div>
      </section>


      <section id="contact" class="achievements-section" data-aos="fade-up">
        <div class="achievement-header" data-aos="fade-up">
          <span>ĐƠN VỊ QUẢNG BÁ DU LỊCH UY TÍN</span>
          <h2>Thành Tựu Của Chúng Tôi</h2>
          <p>
            VerdiTrip tự hào đã giới thiệu vẻ đẹp Việt Nam đến hàng triệu du
            khách trong và ngoài nước. Từ những bãi biển hoang sơ đến những di
            sản văn hóa đặc sắc, chúng tôi luôn nỗ lực mang đến những thông tin
            chính xác, hữu ích và hấp dẫn nhất về du lịch Việt Nam.
          </p>
        </div>

        <div class="achievement-stats" data-aos="fade-up">
          <div class="stat-item primary" data-aos="fade-right">
            <h3>5M+</h3>
            <p>Lượt Truy Cập</p>
          </div>
          <div class="stat-item" data-aos="fade-right">
            <h3>500+</h3>
            <p>Bài Viết</p>
          </div>
          <div class="stat-item" data-aos="fade-right">
            <h3>63</h3>
            <p>Tỉnh Thành</p>
          </div>
          <div class="stat-item primary" data-aos="fade-right">
            <h3>120+</h3>
            <p>Điểm Đến</p>
          </div>
          <div class="stat-item primary" data-aos="fade-right">
            <h3>8+</h3>
            <p>Năm Kinh Nghiệm</p>
          </div>
          <div class="stat-item" data-aos="fade-right">
            <h3>15+</h3>
            <p>Giải Thưởng</p>
          </div>
        </div>

        <div class="achievement-image" data-aos="fade-up">
          <img src="assets/vietnam.jpg" alt="Giải thưởng Du lịch Việt Nam" />
        </div>
      </section>

      <footer class="footer" data-aos="fade-up">
        <div class="footer-content" >
          <div class="footer-company">
            <h3 class="footer-logo">VerdiTrip</h3>
            <p>
              Đơn vị quảng bá du lịch Việt Nam hàng đầu. Chúng tôi mang đến
              những thông tin hữu ích giúp bạn khám phá vẻ đẹp đất nước hình chữ
              S.
            </p>
            <div class="footer-social" data-aos="fade-up">
              <a href="#"><i class="bx bxl-facebook"></i></a>
              <a href="#"><i class="bx bxl-instagram"></i></a>
              <a href="#"><i class="bx bxl-tiktok"></i></a>
              <a href="#"><i class="bx bxl-youtube"></i></a>
            </div>
          </div>

          <div class="footer-links" data-aos="fade-up">
            <h4>Khám Phá</h4>
            <ul>
              <li><a href="#destinations">Miền Bắc</a></li>
              <li><a href="#destinations">Miền Trung</a></li>
              <li><a href="#destinations">Miền Nam</a></li>
              <li><a href="#destinations">Đảo & Biển</a></li>
            </ul>
          </div>

          <div class="footer-links" data-aos="fade-up">
            <h4>Thông Tin</h4>
            <ul>
              <li><a href="#about-us">Về Chúng Tôi</a></li>
              <li><a href="#experience">Trải Nghiệm</a></li>
              <li><a href="#">Bài Viết</a></li>
              <li><a href="#contact">Liên Hệ</a></li>
            </ul>
          </div>

          <div class="footer-contact" data-aos="fade-up">
            <h4>Liên Hệ</h4>
            <p><i class="bx bx-map"></i> Hòa Châu, Hòa Vang, TP Đà Nẵng</p>
            <p><i class="bx bx-phone"></i> +84 775544920</p>
            <p><i class="bx bx-envelope"></i> verditrip@gmail.com</p>
            <p><i class="bx bx-time"></i> 8:00 - 17:00, Thứ 2 - Thứ 6</p>
          </div>
        </div>

        <div class="footer-bottom" data-aos="fade-up">
          <p>&copy; 2025 VerdiTrip. Bản quyền thuộc về VerdiTrip.</p>
          <div class="footer-policy">
            <a href="#">Điều khoản sử dụng</a>
            <a href="#">Chính sách bảo mật</a>
          </div>
        </div>
      </footer>
    </div>

    <script src="script1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 1000,
        once: false,
      });
    </script>
  </body>
</html>
