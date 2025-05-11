<?php
session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="../css/style.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- ------------------------------------------ main page-------------------------------------------- -->
    <div class="main-page">
        <div class="header-main-page">
            <div class="up-header-main-page">
                <div class="left-up-header-main-page">
                    <img class="header-image-black" src="../images/real-logo-black.png" alt="black-logo">
                    <img class="header-image-white" src="../images/real-logo-white.png" alt="white-logo">
                </div>
                <div class="mid-up-header-main-page">
                    <input type="text" placeholder="Search...">
                    <i class='bx bx-search search-icon'></i>
                </div>
                <div class="right-up-header-main-page">
                    <?php if (!isset($_SESSION['user_email'])): ?>
                        <div class="login">
                            <i class='bx bxs-door-open'></i>
                            <p><a href="loginpage.php" style="color:var(--blackblack); text-decoration:none">Log in or sign up</a></p>
                        </div>
                    <?php else: ?>

                        <div class="user-profile">
                            <i title="<?php echo htmlspecialchars((isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'User') . "\n" . $_SESSION['user_email']); ?>" class='bx bx-user-circle'></i>

                            <form method="POST" style="display:inline;">
                                <button type="submit" class="logout-btn" name="logout">Log out</button>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="down-header-main-page">
                <h3 class="Home">Home</h3>
                <h3 class="Products">Products</h3>
                <h3 class="Discounts">Discounts</h3>
                <h3 class="News">News</h3>
                <h3 class="Reviews">Reviews</h3>
                <h3 class="About">About</h3>
            </div>
        </div>
        <!-- Rest of the page remains static -->
        <div class="rest-main-page">
            <video autoplay muted loop id="bg-video">
                <!-- <source src="../images/watch-v.mp4"> -->
                 <source src="../images/1080512135601220398.mp4" type="">
                Your browser does not support HTML5 video.
            </video>
            <div class="overlay"></div>
            <div class="content">
                <h1>Discover Luxury Watches</h1>
                <p>Shop the world's finest men's watches at the best prices.</p>
                <a href="##" class="btn">Shop Now</a>
            </div>
        </div>
    </div>

    <!-- ------------------------------------------ page2-------------------------------------------- -->
    <div class="page2">
        <div class="title-page2">

            <h1>Popular brands</h1>


        </div>




        <div class="content-page2">

            <div class="logo-place-page2">
                <img src="../images/P_Br_logo1.png" alt="no-image">
            </div>

            <div class="logo-place-page2">
                <img src="../images/P_Br_logo2.png" alt="no-image">
            </div>

            <div class="logo-place-page2">
                <img src="../images/P_Br_logo3.png" alt="no-image">
            </div>

            <div class="logo-place-page2">
                <img src="../images/P_Br_logo4.png" alt="no-image">
            </div>

            <div class="logo-place-page2">
                <img src="../images/P_Br_logo5.png" alt="no-image">
            </div>

            <div class="logo-place-page2">
                <img src="../images/P_Br_logo6.png" alt="no-image">
            </div>

            <div class="logo-place-page2">
                <img src="../images/P_Br_logo7.png" alt="no-image">
            </div>

            <div class="logo-place-page2">
                <img src="../images/P_Br_logo8.png" alt="no-image">
            </div>
        </div>


    </div>

    <!-- ------------------------------------------ page3-------------------------------------------- -->
    <div class="page3">
        <div class="title-page3">
            <h1>Our Most Popular Models</h1>

        </div>

        <div class="slide-page3">

            <!-- <a href="watchscroll.html"> -->

            <!-- onclick="window.location.href='watchscroll.php?model_id=1'"> -->

            <div class="watch-box">
                <div class="img-part image-settings">
                    <img src="../images/watch1.png" alt="no-image" class="watch-image">
                </div>
                <div class="watch-name">
                    <p>Rolex <br> <strong>Datejust</strong></p>
                </div>
            </div>








            <!-- </a> -->
            <div class="watch-box">
                <div class="img-part image-settings">
                    <img src="../images/watch2.png" alt="no-image">
                </div>
                <div class="watch-name">
                    <p>Rolex <br> <strong>Submariner</strong></p>
                </div>
            </div>

            <div class="watch-box">
                <div class="img-part image-settings">
                    <img src="../images/watch3.png" alt="no-image">
                </div>
                <div class="watch-name">
                    <p>Rolex <br> <strong>Daytona</strong></p>
                </div>
            </div>

            <div class="watch-box">
                <div class="img-part image-settings">
                    <img src="../images/watch4.png" alt="no-image">
                </div>
                <div class="watch-name">
                    <p>Omega <br> <strong>Speedmaster</strong></p>
                </div>
            </div>

            <div class="watch-box">
                <div class="img-part image-settings">
                    <img src="../images/watch5.png" alt="no-image">
                </div>
                <div class="watch-name">
                    <p>Audemars Piguit <br> <strong>Royal Oak</strong></p>
                </div>
            </div>

            <div class="watch-box">
                <div class="img-part image-settings">
                    <img src="../images/watch6.png" alt="no-image">
                </div>
                <div class="watch-name">
                    <p>Rolex <br> <strong>Day-Date</strong></p>
                </div>
            </div>

            <div class="watch-box">
                <div class="img-part image-settings">
                    <img src="../images/watch7.png" alt="no-image">
                </div>
                <div class="watch-name">
                    <p>Rolex <br> <strong>GMT-master 2</strong></p>
                </div>
            </div>

            <div class="watch-box">
                <div class="img-part image-settings">
                    <img src="../images/watch8.png" alt="no-image">
                </div>
                <div class="watch-name">
                    <p>Patek philippe<br> <strong>Nautilus</strong></p>
                </div>
            </div>




        </div>
    </div>

    <!-- ------------------------------------------ page4-------------------------------------------- -->
    <div class="page4">
        <div class="title-page4">
            <h1>The Best deals of this mounth</h1>
        </div>
        <!-- <button class="Left-btn" onclick="scrollLeft()"> ← </button>
    <button class="Right-btn" onclick="scrollRight()"> → </button> -->
        <button class="Left-btn"> ← </button>
        <button class="Right-btn"> → </button>
        <div class="slide-page4">





            <div class="watch-discount-box">
                <div class="watch-discount-img-part image-settings">
                    <img src="../images/model1-2" alt="no-image" class="watch-image">
                </div>

                <div class="watch-discount-rest">
                    <div class="watch-discount-name">
                        <p>Rolex <br> <strong>Datejust41</strong></p>
                    </div>
                    <div class="watch-discount-price">
                        <p> <span style="text-decoration: line-through;"> 10,000 $</span> <br> <strong>7,975 $</strong>
                        </p>
                    </div>
                </div>
            </div>

            <div class="watch-discount-box">
                <div class="watch-discount-img-part image-settings">
                    <img src="../images/discount-img_2" alt="no-image" class="watch-image">
                </div>

                <div class="watch-discount-rest">
                    <div class="watch-discount-name">
                        <p>Rolex <br> <strong>Hulk</strong></p>
                    </div>
                    <div class="watch-discount-price">
                        <p> <span style="text-decoration: line-through;"> 9,000 $</span> <br> <strong>6,900 $</strong>
                        </p>
                    </div>
                </div>
            </div>

            <div class="watch-discount-box">
                <div class="watch-discount-img-part image-settings">
                    <img src="../images/discount-img_3" alt="no-image" class="watch-image">
                </div>

                <div class="watch-discount-rest">
                    <div class="watch-discount-name">
                        <p>Rolex <br> <strong>Daytouna gold</strong></p>
                    </div>
                    <div class="watch-discount-price">
                        <p> <span style="text-decoration: line-through;"> 11,200 $</span> <br> <strong>9,900 $</strong>
                        </p>
                    </div>
                </div>
            </div>




            <div class="watch-discount-box">
                <div class="watch-discount-img-part image-settings">
                    <img src="../images/discount-img_4" alt="no-image" class="watch-image">
                </div>

                <div class="watch-discount-rest">
                    <div class="watch-discount-name">
                        <p>Omega <br> <strong>Speedmaster Racing</strong></p>
                    </div>
                    <div class="watch-discount-price">
                        <p> <span style="text-decoration: line-through;"> 7,000 $</span> <br> <strong> 6,450 $</strong>
                        </p>
                    </div>
                </div>
            </div>


            <div class="watch-discount-box">
                <div class="watch-discount-img-part image-settings">
                    <img src="../images/discount-img_5" alt="no-image" class="watch-image">
                </div>

                <div class="watch-discount-rest">
                    <div class="watch-discount-name">
                        <p>Audemars Piguet <br> <strong>Royal Oak</strong></p>
                    </div>
                    <div class="watch-discount-price">
                        <p> <span style="text-decoration: line-through;"> 8,000 $</span> <br> <strong>7,000 $</strong>
                        </p>
                    </div>
                </div>
            </div>


            <div class="watch-discount-box">
                <div class="watch-discount-img-part image-settings">
                    <img src="../images/discount-img_6" alt="no-image" class="watch-image">
                </div>

                <div class="watch-discount-rest">
                    <div class="watch-discount-name">
                        <p>Rolex <br> <strong>Day-Date-Platinum</strong></p>
                    </div>
                    <div class="watch-discount-price">
                        <p> <span style="text-decoration: line-through;"> 5,290 $</span> <br> <strong>4,100 $</strong>
                        </p>
                    </div>
                </div>
            </div>


            <div class="watch-discount-box">
                <div class="watch-discount-img-part image-settings">
                    <img src="../images/discount-img_7" alt="no-image" class="watch-image">
                </div>

                <div class="watch-discount-rest">
                    <div class="watch-discount-name">
                        <p>Rolex <br> <strong>batman</strong></p>
                    </div>
                    <div class="watch-discount-price">
                        <p> <span style="text-decoration: line-through;"> 9,634 $</span> <br> <strong>7,255 $</strong>
                        </p>
                    </div>
                </div>
            </div>





        </div>
    </div>





    <!-- ------------------------------------------ page5-------------------------------------------- -->
    <div class="page5">

        <div class="page5-box">

            <div class="title-page5">
                <h1> The latest news</h1>
            </div>

            <div class="magazin">




                <a
                    href="https://strapsco.com/best-watch-magazines-for-enthusiasts-and-novices/#:~:text=The%208%20Best%20Watch%20Magazines%20for%20Enthusiasts%20and,%26%20Country%20Magazine%20...%208%20Rolex%20Magazine%20">

                    <button class="button">

                        more

                    </button>


                </a>

                <div class="left-magazin">
                    <div class="left-magazin-image-part image-settings">

                        <a
                            href="https://www.watchtime.com/wristwatch-industry-news/zenith-defy-skyline-chronograph-skeleton-lvmh-watch-week-2025">

                            <img src="../images/magazin-pic1.jpg" alt="no-image">
                        </a>

                    </div>

                    <div class="left-magazin-desc">



                        <a
                            href="https://www.watchtime.com/wristwatch-industry-news/zenith-defy-skyline-chronograph-skeleton-lvmh-watch-week-2025/">

                            <h3><b>The Edgiest Zenith Defy Skyline Yet: a Skeletonized Chronograph</b></h3>

                            <p> For LVMH Watch Week 2025, <strong>Zenith</strong> isn’t flooding its collections with
                                new
                                dial
                                colors.
                                No, it’s continuing to carefully build out its Defy Skyline range by introducing two
                                variants of
                                a brand new configuration.
                                You can get the brand’s sporty Defy Skyline with a...</p>
                        </a>

                    </div>
                </div>

                <div class="right-magazin">

                    <div class="right-magazin-image-part image-settings">

                        <a
                            href="https://www.hodinkee.com/articles/the-nomos-ludwig-neomatik-arzte-ohne-grenzen-editions">
                            <img src="../images/magazin-pic2.jpeg" alt="no-image">
                        </a>

                    </div>

                    <div class="right-magazin-desc">


                        <a
                            href="https://www.hodinkee.com/articles/the-nomos-ludwig-neomatik-arzte-ohne-grenzen-editions">

                            <h3><b>Introducing The Nomos Ludwig Neomatik Ärzte Ohne Grenzen </b></h3>
                            <p>
                                when a watch brand "collaborates" with a charitable organization,
                                one may assume a position of skepticism for one-time endeavors that keep details
                                like total contribution
                                <!-- and impact intentionally vague However... -->
                            </p>
                        </a>

                    </div>

                </div>

            </div>



        </div>

    </div>



    <!-- ------------------------------------------ page6-------------------------------------------- -->


    <div class="page6">

        <div class="page6-title">
            <h1>Customer's Review </h1>
        </div>


        <div class="review-slide">

            <div class="review-box">

                <div class="image-area-review">

                    <img src="../images/men 1.jpg" alt="">

                </div>

                <div class="name-area-review">

                    <h4>David Peterson</h4>

                </div>
                <div class="rating-area-review">

                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>

                </div>
                <div class="text-area-review">

                    <p>
                        Fantastic shopping experience!<br>
                        The watch collection was elegant and diverse.<br>
                        Helpful staff made choosing the perfect timepiece easy.<br>
                        Great quality and stylish designs.<br>
                        Smooth checkout with excellent service.<br>

                    </p>

                </div>

            </div>


            <div class="review-box">

                <div class="image-area-review">

                    <img src="../images/women 1.jpg" alt="">

                </div>

                <div class="name-area-review">

                    <h4>Emma Thompson</h4>

                </div>
                <div class="rating-area-review">

                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>

                </div>
                <div class="text-area-review">

                    <p>
                        Got the perfect watch for my husband!<br>
                        The quality and style are outstanding.<br>
                        The staff helped me pick a great one.<br>
                        He absolutely loves it!<br>
                        Highly recommend this store!<br>
                    </p>

                </div>

            </div>


            <div class="review-box">

                <div class="image-area-review">

                    <img src="../images/men 2.jpg" alt="">

                </div>

                <div class="name-area-review">

                    <h4>James Anderson</h4>

                </div>
                <div class="rating-area-review">

                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>

                </div>
                <div class="text-area-review">

                    <p>
                        Amazing selection of watches!<br>
                        The designs were sleek and high-quality.<br>
                        Staff was knowledgeable and friendly.<br>
                        Fast and hassle-free purchase.<br>
                        Definitely coming back for another!<br>
                    </p>

                </div>

            </div>


            <div class="review-box">

                <div class="image-area-review">

                    <img src="../images/women 3.jpg" alt="">

                </div>

                <div class="name-area-review">

                    <h4>Sarah Collins</h4>

                </div>
                <div class="rating-area-review">

                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>

                </div>
                <div class="text-area-review">

                    <p>
                        A wonderful gift for my husband!🌟<br>
                        So many elegant watches to choose from.<br>
                        The team made my shopping experience easy.<br>
                        Great prices for high-end timepieces.<br>
                        My husband was thrilled with his new watch!<br>
                    </p>

                </div>

            </div>

            <div class="review-box">

                <div class="image-area-review">

                    <img src="../images/women 2.jpg" alt="">

                </div>

                <div class="name-area-review">

                    <h4>Olivia Martinez</h4>

                </div>
                <div class="rating-area-review">

                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <!-- <i class='bx bxs-star'></i> -->

                </div>
                <div class="text-area-review">

                    <p>
                        Bought a watch for my husband's birthday!<br>
                        The craftsmanship is excellent.<br>
                        The packaging was elegant and gift-ready.<br>
                        He wears it every day and loves it.<br>
                        Will shop here again for sure!<br>
                    </p>

                </div>

            </div>


            <div class="review-box">

                <div class="image-area-review">

                    <img src="../images/men 3.jpg" alt="">

                </div>

                <div class="name-area-review">

                    <h4>Michael Harris</h4>

                </div>
                <div class="rating-area-review">

                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>

                </div>
                <div class="text-area-review">

                    <p>
                        Best watch store ever!<br>
                        Huge variety and top brands available.<br>
                        Staff helped me find the perfect match.<br>
                        Superb service from start to finish.<br>
                        100% satisfied with my purchase!<br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <!-- // ------------------------------------------ page7-------------------------------------------- -->

    <div class="page7">

        <div class="page7-up">

            <div class="page7-up-infor-rect">

                <div class="page7-up-informations-box">

                    <h2><u>Buy a watch </u></h2>

                    <p>Watch Buyer Protection</p>

                    <p>Payment via an escrow accountn</p>

                    <p>Commitment to Authenticity</p>

                    <p>Easy Returns</p>
                </div>


                <div class="page7-up-informations-box">

                    <h2><u>Locale</u></h2>

                    <p>Algeria</p>

                    <p>Egypt</p>

                    <p>Tunisia</p>

                    <p>Morocco</p>
                </div>



                <div class="page7-up-informations-box">

                    <h2><u>About watch</u></h2>

                    <p>About us</p>

                    <p>Jobs</p>

                    <p>Press</p>

                    <p>Legal Details</p>
                </div>




            </div>

        </div>
        <hr>

        <div class="page7-down">

            <div class="page7-down-settings">

                <div class="page7-down-settings-left">

                    <h2 id="Settings">Settings</h2>

                    <div class="custom-select">
                        <div class="select-selected">
                            <img class="flag" src="https://flagcdn.com/w40/us.png"> English
                        </div>
                        <div class="select-items">
                            <div data-value="ar" class="Arabic-button">
                                <img class="flag" src="https://flagcdn.com/w40/dz.png"> Arabic
                            </div>
                            <div data-value="en">
                                <img class="flag" src="https://flagcdn.com/w40/us.png"> English
                            </div>
                            <div data-value="fr">
                                <img class="flag" src="https://flagcdn.com/w40/fr.png"> Français
                            </div>
                        </div>
                    </div>
                </div>




                <div class="page7-down-settings-right">
                    <label for="theme" class="theme">
                        <span class="theme__toggle-wrap" class="darkModeBtn">
                            <input id="theme" class="theme__toggle darkModeBtn" type="checkbox" role="switch"
                                name="theme" value="dark">
                            <span class="theme__fill"></span>
                            <span class="theme__icon">
                                <span class="theme__icon-part"></span>
                                <span class="theme__icon-part"></span>
                                <span class="theme__icon-part"></span>
                                <span class="theme__icon-part"></span>
                                <span class="theme__icon-part"></span>
                                <span class="theme__icon-part"></span>
                                <span class="theme__icon-part"></span>
                                <span class="theme__icon-part"></span>
                                <span class="theme__icon-part"></span>
                            </span>
                        </span>
                    </label>


                </div>

                <div class="contact-us">
                    <i class='bx bxs-phone'>      213+ 0678996 </i>
                </div>

            </div>



            <div class="page7-down-mode-payment">
                <h2 id="payment-modes">

                    Payment Methods

                </h2>
                <div class="payment-icons">

                    <i title="paypal" class='bx bxl-paypal'></i>
                    <i title="visa" class='bx bxl-visa'></i>
                    <i title="mastercard" class='bx bxl-mastercard'></i>

                </div>

                <div class="media-icons">

                    <i title="zwatch-facebook" class='bx bxl-facebook'></i>
                    <i title="zwatch-twitter" class='bx bxl-twitter'></i>
                    <i title="zwatch-instagram" class='bx bxl-instagram'></i>
                    <i title="zwatch-pinterest" class='bx bxl-pinterest'></i>
                    <i title="zwatch@gamil.com" class='bx bxl-gmail'></i>


                </div>
            </div>

        </div>





    </div>



    <script src="../js/app.js"></script>
</body>

</html>