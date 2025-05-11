<?php
session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: watchscroll.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document2</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="main-page2" id="main-page2">
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
        <div class="rest-main-page2">
            <nav aria-label="Breadcrumb navigation">
                <ol class="breadcrumb fix-breadcrump-watchscroll-page">
                    <li class="breadcrumb-item"><a href="home.php"><i class='bx bx-home'></i></a></li>
                    <li class="breadcrumb-item"><a href="watchscroll.php">Rolex watches</a></li>
                </ol>
            </nav>
            <div class="same-brand-title">
                <h1 style="font-family: Arial,sans-serif;">Rolex Datejust</h1>
            </div>
            <button class="Left-btn-same-brand"> ← </button>
            <button class="Right-btn-same-brand"> → </button>
            <div class="same-brand-slide">
                <div class="watch-discount2-box">
                    <div class="watch-discount2-img-part image-settings">
                        <img src="../images/model1-2" alt="no-image" class="watch-image">
                    </div>
                    <div class="watch-discount2-rest">
                        <div class="watch-discount2-name">
                            <p>Rolex <br> <strong>Datejust41</strong></p>
                        </div>
                        <div class="watch-discount2-price">
                            <p> <br> <strong>7,975 $</strong></p>
                        </div>
                    </div>
                </div>
                <div class="watch-discount2-box">
                    <div class="watch-discount2-img-part image-settings">
                         <img src="../images/model1-1" alt="no-image" class="watch-image">
                    </div>
                    <div class="watch-discount2-rest">
                        <div class="watch-discount2-name">
                            <p>Rolex <br> <strong>Datejust36</strong></p>
                        </div>
                        <div class="watch-discount2-price">
                            <p> <br> <strong>3,450 $</strong></p>
                        </div>
                    </div>
                </div>
                <div class="watch-discount2-box">
                    <div class="watch-discount2-img-part image-settings">
                         <img src="../images/model1-3" alt="no-image" class="watch-image">
                    </div>
                    <div class="watch-discount2-rest">
                        <div class="watch-discount2-name">
                            <p>Rolex <br> <strong>Datejust Gold/steel</strong></p>
                        </div>
                        <div class="watch-discount2-price">
                            <p> <br> <strong>3,100 $</strong></p>
                        </div>
                    </div>
                </div>
                <div class="watch-discount2-box">
                    <div class="watch-discount2-img-part image-settings">
                         <img src="../images/model1-4" alt="no-image" class="watch-image">
                    </div>
                    <div class="watch-discount2-rest">
                        <div class="watch-discount2-name">
                            <p>Rolex <br> <strong>Datejust Diamond</strong></p>
                        </div>
                        <div class="watch-discount2-price">
                            <p> <br> <strong>9000 $</strong></p>
                        </div>
                    </div>
                </div>
                <div class="watch-discount2-box">
                    <div class="watch-discount2-img-part image-settings">
                         <img src="../images/model1-5" alt="no-image" class="watch-image">
                    </div>
                    <div class="watch-discount2-rest">
                        <div class="watch-discount2-name">
                            <p>Rolex <br> <strong>LadyDatejust</strong></p>
                        </div>
                        <div class="watch-discount2-price">
                            <p> <br> <strong> 2,000 $</strong></p>
                        </div>
                    </div>
                </div>
                <div class="watch-discount2-box">
                    <div class="watch-discount2-img-part image-settings">
                         <img src="../images/model1-6" alt="no-image" class="watch-image">
                    </div>
                    <div class="watch-discount2-rest">
                        <div class="watch-discount2-name">
                            <p>Rolex <br> <strong>Datejust Oseterquartz</strong></p>
                        </div>
                        <div class="watch-discount2-price">
                            <p> <br> <strong>4,800 $</strong></p>
                        </div>
                    </div>
                </div>
                <div class="watch-discount2-box">
                    <div class="watch-discount2-img-part image-settings">
                         <img src="../images/model1-7" alt="no-image" class="watch-image">
                    </div>
                    <div class="watch-discount2-rest">
                        <div class="watch-discount2-name">
                            <p>Rolex <br> <strong>Datejust Steel</strong></p>
                        </div>
                        <div class="watch-discount2-price">
                            <p> <br> <strong>3,500 $</strong></p>
                        </div>
                    </div>
                </div>
                <div class="watch-discount2-box">
                    <div class="watch-discount2-img-part image-settings">
                         <img src="../images/model1-8" alt="no-image" class="watch-image">
                    </div>
                    <div class="watch-discount2-rest">
                        <div class="watch-discount2-name">
                            <p>Rolex <br> <strong>Datejust Yellow</strong></p>
                        </div>
                        <div class="watch-discount2-price">
                            <p> <br> <strong>5,200 $</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="../js/app.js"></script>




  
</body>

</html>