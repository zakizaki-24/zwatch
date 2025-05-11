<?php
session_start();
include 'config.php';

// if (isset($_POST['login'])) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
//     $stmt->execute([$email]);
//     $user = $stmt->fetch(PDO::FETCH_ASSOC);
//     if ($user && password_verify($password, $user['password'])) {
//         $_SESSION['user_id'] = $user['id'];
//         $_SESSION['user_email'] = $user['email'];
//         header("Location: home.php");
//         exit;
//     } else {
//         $login_error = "Invalid email or password.";
//     }
// }

// if (isset($_POST['signup'])) {
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
//     try {
//         $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
//         $stmt->execute([$username, $email, $password]);
//         $signup_success = "Account created successfully. Please log in.";
//     } catch (PDOException $e) {
//         $signup_error = "Error: " . $e->getMessage();
//     }
// }
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        // Try both possible column names
        $_SESSION['user_name'] = isset($user['username']) ? $user['username'] : (isset($user['user_name']) ? $user['user_name'] : 'UnknownUser');
        header("Location: home.php");
        exit;
    } else {
        $login_error = "Invalid email or password.";
    }
}

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    try {
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$username, $email, $password]);
        $signup_success = "Account created successfully. Please log in.";
    } catch (PDOException $e) {
        $signup_error = "Error: " . $e->getMessage();
    }
}
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
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container-log">
        <div class="card" id="flip-card">
            <div class="front">
                <form class="form" method="POST">
                    <h2 id="heading">Login</h2>
                    <?php if (isset($login_error)): ?>
                        <p style="color: red;"><?php echo $login_error; ?></p>
                    <?php endif; ?>
                    <div class="field">
                        <img class="input-icon login-image-white" src="../images/gmail-logo-white.png" alt="User Icon">
                        <img class="input-icon login-image-black" src="../images/gmail-logo-black.png" alt="User Icon">
                        <input type="text" placeholder="Enter your email" class="input-field" name="email" autocomplete="off" required>
                    </div>
                    <div class="field">
                        <img class="input-icon login-image-white" src="../images/lock-alt-regular-white.png" alt="Lock Icon">
                        <img class="input-icon login-image-black" src="../images/lock-alt-regular-24.png" alt="Lock Icon">
                        <input class="input-field" type="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="btnlog">
                        <button type="submit" class="button1" name="login">Login</button>
                        <button type="button" class="button2" id="flipToSignup">Sign Up</button>
                    </div>
                    <button class="button3">Forgot Password?</button>
                </form>
            </div>
            <div class="back">
                <form class="form" method="POST">
                    <h2 id="heading">Sign Up</h2>
                    <?php if (isset($signup_error)): ?>
                        <p style="color: red;"><?php echo $signup_error; ?></p>
                    <?php endif; ?>
                    <?php if (isset($signup_success)): ?>
                        <p style="color: green;"><?php echo $signup_success; ?></p>
                    <?php endif; ?>
                    <div class="field">
                        <img class="input-icon login-image-white" src="../images/user-solid-white.png" alt="User Icon">
                        <img class="input-icon login-image-black" src="../images/user-solid-black.png" alt="User Icon">
                        <input type="text" placeholder="User name" class="input-field" name="username" autocomplete="off" required>
                    </div>
                    <div class="field">
                        <img class="input-icon login-image-white" src="../images/gmail-logo-white.png" alt="User Icon">
                        <img class="input-icon login-image-black" src="../images/gmail-logo-black.png" alt="User Icon">
                        <input type="text" placeholder="Enter your email" class="input-field" name="email" autocomplete="off" required>
                    </div>
                    <div class="field">
                        <img class="input-icon login-image-white" src="../images/lock-alt-regular-white.png" alt="Lock Icon">
                        <img class="input-icon login-image-black" src="../images/lock-alt-regular-24.png" alt="Lock Icon">
                        <input class="input-field" type="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="field">
                        <img class="input-icon login-image-white" src="../images/lock-alt-regular-white.png" alt="Lock Icon">
                        <img class="input-icon login-image-black" src="../images/lock-alt-regular-24.png" alt="Lock Icon">
                        <input class="input-field" type="password" placeholder="Confirm Password" name="confirm_password" required>
                    </div>
                    <div class="btnlog">
                        <button type="submit" class="button1" name="signup">Sign Up</button>
                        <button type="button" class="button2" id="flipToLogin">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/app.js"></script>
</body>
</html>