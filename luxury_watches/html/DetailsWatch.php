<?php
session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: detailswatch.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document3</title>
</head>

<body>
    <div class="main-page3" id="main-page3">
        <div class="header-main-page fix-main-page2">
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
            <div class="down-header-main-page"></div>
        </div>
        <div class="pagedetails">
            <div class="big-box3">
                <div class="large-image">
                    <img src="../images/model1-1-details-3.jpg" alt="watch" class="zoom-target">
                    <button class="zoom-toggle">
                        <i class='bx bx-zoom-in'></i>
                    </button>
                    <div class="zoom-lens"></div>
                </div>
                <div class="small-images">
                    <div class="small-images-boxes p">
                        <img src="../images/model1-1-details-3.jpg" alt="">
                    </div>
                    <div class="small-images-boxes opa">
                        <img src="../images/model1-1-details-1.jpg" alt="">
                    </div>
                    <div class="small-images-boxes opa">
                        <img src="../images/model1-1-details-2.jpg" alt="">
                    </div>
                    <div class="small-images-boxes opa">
                        <img src="../images/model1-1-details-5.jpg" alt="">
                    </div>
                    <div class="small-images-boxes opa">
                        <img src="../images/model1-1-details-4.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="description-box">
                <nav aria-label="Breadcrumb navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php"><i class='bx bx-home'></i></a></li>
                        <li class="breadcrumb-item"><a href="watchscroll.php">Rolex watches</a></li>
                        <li class="breadcrumb-item"><a href="#">Datejust 36</a></li>
                    </ol>
                </nav>
                <div class="description-box-informations">
                    <div class="name-page-details">
                        <p>Rolex <br>Datejust 41</p>
                    </div>
                    <div class="price-page-details">
                        <div class="current-price">
                            <p>$7,975</p>
                        </div>
                    </div>
                    <button class="buybtn">buy</button>
                </div>
                <div class="description-box-icons">
                    <div class="trust-badge">
                        <h2 class="badge-title">Trust our services</h2>
                        <div class="trust-features">
                            <div class="feature">
                                <div class="feature-circle"><i class='bx bx-check-shield feature-icon'></i></div>
                                <div class="feature-tooltip">Verified legal documentation and business registration</div>
                            </div>
                            <div class="feature">
                                <div class="feature-circle"><i class='bx bx-star feature-icon'></i></div>
                                <div class="feature-tooltip">Minimum 4.8/5 customer satisfaction rating</div>
                            </div>
                            <div class="feature">
                                <div class="feature-circle"><i class='bx bx-refresh feature-icon'></i></div>
                                <div class="feature-tooltip">You can replace your order provided that does not exceed 10 d</div>
                            </div>
                            <div class="feature">
                                <div class="feature-circle"><i class='bx bx-headphone feature-icon'></i></div>
                                <div class="feature-tooltip">We are here 24x7 for any help you want</div>
                            </div>
                            <div class="feature">
                                <div class="feature-circle"><i class='bx bxs-truck feature-icon'></i></div>
                                <div class="feature-tooltip">safe and safe delivery to all word's parts</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/app.js"></script>
</body>

</html>