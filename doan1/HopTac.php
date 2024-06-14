<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" rectangle="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/tintuc.css">
    <link rel="icon" href="./Image/icon.png" type="image/x-icon">
    <title>Tin tức</title>
</head>

<body>
    <?php
      include("Config/header.php");
      ?>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="Image/slideshow1.png" style="width: 100%; height: 33em;">
        </div>

        <div class="mySlides fade">
            <img src="Image/sldieshow2.jpg" style="width: 100%; height: 33em;">
        </div>

        <div class="mySlides fade">
            <img src="Image/slideshow3.png" style="width: 100%; height: 33em;">
        </div>

        <div class="mySlides fade">
            <img src="Image/slideshow4.jpg" style="width: 100%; height: 33em;">
        </div>
    </div>
    <div class="container1">
        <div class="button-wrapper">
            <button class="listbtn" onclick="scrollToSection('all')">Tất cả</button>
            <button class="listbtn" onclick="scrollToSection('guide')">Cẩm nang</button>
            <button class="listbtn" onclick="scrollToSection('event')">Sự kiện</button>
            <button class="listbtn" onclick="scrollToSection('tournament')">Giải đấu</button>
            <button class="listbtn" onclick="scrollToSection('partnership')">Hợp tác</button>
        </div>
        <div class="section-wrap">
            <section id="all">
                <div class="rectangle" style="margin-top: 2em;">
                    <img src="Image/slideshow1.png">
                    <h2>Sự kiện mới nhất</h2>
                    =
                </div>
                <hr
                    style="background-color: rgb(133, 133, 84);height: 2px;border: none;width: 70%;margin: 0 auto;margin-bottom: 1em;">
            </section>
            <section id="guide">
                <div class="rectangle">
                    <img src="Image/Camnang1.png">
                    <h2>Cảnh báo về tình trạng lừa đảo và các lưu ý cần thiết</h2>
                    =
                </div>
                <hr
                    style="background-color: rgb(133, 133, 84);height: 2px;border: none;width: 70%;margin: 0 auto;margin-bottom: 1em;">
                <div class="rectangle">
                    <img src="Image/camnag2.jpg">
                    <h2>Dễ dàng thuần thục với yorn với 3 mẹo nhỏ</h2>
                    =
                </div>
                <hr
                    style="background-color: rgb(133, 133, 84);height: 2px;border: none;width: 70%;margin: 0 auto;margin-bottom: 1em;">

            </section>
            <section id="event">
                <div class="rectangle">
                    <img src="Image/sk1.png">
                    <h2>Mở bán trang phục Pain xà bá tước</h2>
                </div>
                <hr
                    style="background-color: rgb(133, 133, 84);height: 2px;border: none;width: 70%;margin: 0 auto;margin-bottom: 1em;">
                <div class="rectangle">
                    <img src="Image/sk2.jpg">
                    <h2>Sự kiện Lauriel thứ nguyên vệ thần</h2>
                    =
                </div>
                <hr
                    style="background-color: rgb(133, 133, 84);height: 2px;border: none;width: 70%;margin: 0 auto;margin-bottom: 1em;">
            </section>
            <section id="tournament">
                <div class="rectangle">
                    <img src="Image/giaidau1.png">
                    <h2>Mở bán trang phục Rourke bách tướng lão đại</h2>
                    =
                </div>
                <hr
                    style="background-color: rgb(133, 133, 84);height: 2px;border: none;width: 70%;margin: 0 auto;margin-bottom: 1em;">
                <div class="rectangle">
                    <img src="Image/giaidau2.png">
                    <h2>Giải đấu Liên quân quốc tế</h2>
                    =
                </div>
                <hr
                    style="background-color: rgb(133, 133, 84);height: 2px;border: none;width: 70%;margin: 0 auto;margin-bottom: 1em;">
            </section>
            <section id="partnership">
                <div class="rectangle">
                    <img src="Image/hoptac1.png">
                    <h2>Hai thương hiệu hợp tác với liên quân mobile thắng lớn</h2>
                    =
                </div>
                <hr
                    style="background-color: rgb(133, 133, 84);height: 2px;border: none;width: 70%;margin: 0 auto;margin-bottom: 1em;">
                <div class="rectangle">
                    <img src="Image/hoptac2.jpg">
                    <h2> Thể thao điện tư mở rộng cơ hội hợp tác thương hiệu</h2>
                    =
                </div>
                <hr
                    style="background-color: rgb(133, 133, 84);height: 2px;border: none;width: 70%;margin: 0 auto;margin-bottom: 1em;">
            </section>
        </div>
        <hr style="z-index: 1000;position: relative;height: 0.2em;background-color: #ae903b;top: 2em;">
        <footer>
            <div class="footer">
                <img src="Image/logofooter.png">
                <hr style="width: 80%;background-color: #ae903b;z-index: 1000;position: relative;margin: 0 auto; ">
                <p style="margin-top: 3em;">CÔNG TY CỔ PHẦN GIẢI TRÍ VÀ THỂ THAO ĐIỆN TỬ VIỆT NAM
                    Giấy CNĐKKD số 0105301438, cấp lần đầu ngày 10/05/2011
                    Cơ quan cấp: Phòng Đăng ký kinh doanh- Sở Kế hoạch và đầu tư TP Hà Nội
                    Địa chỉ: Tầng 28, tòa nhà Trung tâm Lotte Hà Nội, 54 Liễu Giai, Phường Cống Vị, Quận Ba Đình,
                    Thành phố Hà Nội, Việt Nam
                    Điện thoại: 024 73053939</p>
                <br>
                <a href="https://www.garena.vn/terms">Điều khoản dịch vụ |</a><a href="https://www.garena.vn/privacy">
                    Chính sách bảo mật</a><a
                    href="https://lienquan.garena.vn/tin-tuc/chinh-sach-giai-quyet-tranh-chap">| Chính sách giải quyết
                    tranh chấp</a>
            </div>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    function scrollToSection(sectionId) {
        document.querySelectorAll("section").forEach((section) => {
            section.style.display = "none";
            section.style.marginTop = "2em";
        });

        if (sectionId === "all") {
            document.querySelectorAll("section").forEach((section) => {
                section.style.display = "block";
            });
        } else {
            document.getElementById(sectionId).style.display = "block";
        }
    }

    scrollToSection("partnership");
    $(document).ready(function() {
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = $(".mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 5000);
        }
    });
    </script>
</body>

</html>