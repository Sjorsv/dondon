<?php
//laat altijd 1 zien behalve als het 2 is
//$stylesheet = 1;
//
//if (!isset($_GET['stylesheet']) || empty($_GET['stylesheet'])) {
//    $stylesheet = 1;
//}
////geen tekst, checken of het een cijfer is
//if (!filter_var($stylesheet, FILTER_VALIDATE_INT)) {
//    $stylesheet = 1;
//}
//if ($stylesheet>2) { $stylesheet = 1;}
//else {
//
//}
//echo $stylesheet;

$stylesheet = 1;
//isset =  is er een waarde / empty = de waarde ingevuld
if (!isset($_GET['style']) || empty($_GET['style'])) {
    $stylesheet = 1;
} else {
    $stylesheet = $_GET['style'];
}
if (!filter_var($stylesheet, FILTER_VALIDATE_INT)) {
    $stylesheet = 1;
} else {
    if ($stylesheet > 2 || $stylesheet < 1) {

        $stylesheet = 1;
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sjors Platjouw Portfolio</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/icon/favicon.ico">
    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body id="top">
<!-- preloader area start-->
<!---->
<!--<div id="preloader">-->
<!--    <div class="loader_line"></div>-->
<!--</div>-->
<!---->
<!--preloader area end-->
<!-- header area start -->

<?php

include "header.php";

?>

<!-- header area end -->

<!-- slider area start -->
<section id="home" class="slider-area parallax" data-speed="3" data-bg-image="assets/img/bg/sjorsbanner.jpg">
    <div class="container">
        <div class="slider-content">
            <h2 class="txtanim1"><span>Sjors</span> <span>Platjouw</span></h2>
            <h4 class="txtanim1 delay1">
                <span>c</span>
                <span>r</span>
                <span>e</span>
                <span>a</span>
                <span>t</span>
                <span>i</span>
                <span>v</span>
                <span>e</span>
                <span></span>
                <span>p</span>
                <span>o</span>
                <span>r</span>
                <span>t</span>
                <span>f</span>
                <span>o</span>
                <span>l</span>
                <span>i</span>
                <span>o</span>
            </h4>
        </div>
    </div>
    <!--    <div class="txtanim1 next-section">-->
    <!--        <span><a href="#about">Style Switch <strong><i class="fa fa-question-circle"></i></strong></a></span>-->
    <!--    </div>-->
</section>
<!-- slider area end -->
<!-- about area strat -->
<section class="about-area" id="about">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="abt-left-thumb">
                    <img src="assets/img/about/sjors.jpg" alt="image">
                </div>
            </div>
            <div class="col-md-7 offset-md-1">
                <div class="abt-content">
                    <div class="section-title">
                        <h2 class="txt2_is_show">Over Mij</h2>
                    </div>
                    <p><?php echo $stylesheet; ?></p>
                    <p class="txt1-wrap"><span class="txt1">Hey en welkom op mijn portfolio! Mijn naam is Sjors Platjouw, 21 jaar en afgestudeerd voor Applicatie en Multimedia Ontwikkeling. Momenteel studeer ik Interaction Design aan het HKU in Utrecht Design. Naast dat doe ik ook nog aan Fotografie, een passie die ik sinds kleins af aan al heb. </span>
                    </p>
                    <p class="txt1-wrap"><span class="txt1">Ik ben een perfectionist. Ik probeer altijd net wat creatiever of beter te zijn dan mijn concurrent. Daarom ben ik ook heel gedreven en gemotiveerd, sociaal en makkelijk in de omgang, maar daarnaast sta ik ook open voor nieuwe ervaringen en ben ik leergierig. Zo blijf ik altijd up to date met nieuwe uitingen en trends.</span>
                    </p>
                    <a href="about.php">
                        <p class="txt1-wrap"><span class="txt1">  <button type="button"
                                                                          class="btn btn-primary btn-round-lg btn-lg">Meer over mij</button></span>
                        </p>
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- about area end -->
<!-- portfolio area start -->
<section class="fortfolio-area bg-gray pt--100 pb--200" id="portfolio">
    <div class="container">
        <div class="section-title">
            <h2 class="txt2_is_show">Portfolio</h2>
        </div>
        <div class="fortfolio-filter">
            <button class="active" data-filter="*">All</button>
            <button data-filter=".web">Web Design</button>
            <button data-filter=".design">Photography</button>
            <button data-filter=".marketing">Graphic Design</button>
        </div>
        <div class="portfolio-masonary row" id="container">
            <div class="prt-grid marketing design col-md-4 col-sm-6">
                <div class="prt-item">
                    <a class="expand-video" href="https://www.youtube.com/watch?v=eDiA1p5DlLg">
                        <span class="flaticon-play-button"></span>
                        <img src="assets/img/portfolio/img1.jpg" alt="image">
                    </a>
                </div>
            </div>
            <div class="prt-grid marketing web col-md-4 col-sm-6">
                <div class="prt-item">
                    <a class="expand-img" href="assets/img/portfolio/gangmaker.jpg"><img
                                src="assets/img/portfolio/gangmaker.jpg" alt="image" height="600" width="600">></a>
                </div>
            </div>
            <div class="prt-grid col-md-4 col-sm-6">
                <div class="prt-item">
                    <a class="expand-img" href="assets/img/portfolio/img3.jpg"><img src="assets/img/portfolio/img3.jpg"
                                                                                    alt="image"></a>
                </div>
            </div>
            <div class="prt-grid design marketing col-md-4 col-sm-6">
                <div class="prt-item">
                    <a class="expand-img" href="assets/img/portfolio/img4.jpg"><img src="assets/img/portfolio/img4.jpg"
                                                                                    alt="image"></a>
                </div>
            </div>
            <div class="prt-grid web design col-md-4 col-sm-6">
                <div class="prt-item">
                    <a class="expand-img" href="assets/img/portfolio/img5.jpg"><img src="assets/img/portfolio/img5.jpg"
                                                                                    alt="image"></a>
                </div>
            </div>
            <div class="prt-grid design marketing col-md-4 col-sm-6">
                <div class="prt-item">
                    <a class="expand-img" href="assets/img/portfolio/img6.jpg"><img src="assets/img/portfolio/img6.jpg"
                                                                                    alt="image"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- portfolio area end -->
<!-- contact area start -->
<section class="contact-area ptb--100" id="contact">
    <div class="container">
        <div class="section-title">
            <h2 class="txt2_is_show">Contact</h2>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="cnt-left">
                    <ul>
                        <li>Kloosterzande, <span class="ct-break">Nederland</span></li>
                        <li>sjorsplatjouw@gmail.com</li>
                        <li>+31630871230</li>
                    </ul>
                    <div class="social-link">
                        <h5>Media :</h5>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="contact-form">
                    <div class="screen-reader-response"></div>
                    <form action="mail.php" id="cf">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="name" name="name" placeholder="Naam*">
                            </div>
                            <div class="col-md-6">
                                <input type="email" id="email" name="email" placeholder="Email*">
                            </div>
                        </div>
                        <textarea name="msg" id="msg" placeholder="Bericht hier*"></textarea>
                        <div class="form-submit">
                            <button type="submit" name="submit" id="cnt_submit">Verstuur Bericht <i
                                        class="fa fa-long-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact area end -->
<!-- footer area start -->
<footer>
    <div class="footer-area bg-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-4">
                    <div class="flogo">
                        <!--<a href="index.html"><img src="assets/img/icon/flogo.png" alt="logo"></a>-->
                    </div>
                </div>
                <div class="col-md-6 col-sm-8">
                    <div class="copyright">
                        <p>@ Copyright <span>Sjors Platjouw</span></p>
                    </div>
                </div>
            </div>
            <div class="go-to-top">
                <a href="#top"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
<!-- jquery latest version -->
<script src="assets/js/vendor/jquery-3.2.0.min.js"></script>
<!-- bootstrap 4 js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- others plugins -->
<script src="assets/js/jquery.slicknav.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/scripts.js"></script>
</body>

</html>