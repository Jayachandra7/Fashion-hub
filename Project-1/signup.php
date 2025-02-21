<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrendSet</title>
    
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    <!--My Css-->
    <link rel="stylesheet" href="style.css">

    <!--Font Awesome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!--Navbar-->
    <nav class="navbar">
        <a href="index.html"><h1 class="Fashion">Fashion Hub</h1></a>

        <div class="navbar-links">
            <p class="navbar-link"><a href="index.html">Home</a></p>
            <p class="navbar-link"><a href="collection.html">Collections</a></p>
            <p class="navbar-link"><a href="contact.html">Contact</a></p>
        </div>

        <div class="navbar-menu-toggle" onclick="showNavbar()">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>

    <!--Side Navbar-->
    <div class="side-navbar">
        <p style="text-align: right;" onclick="closeNavbar()">
            <i class="fa-solid fa-xmark"></i>
        </p>

        <div class="side-navbar-links">
            <p class="side-navbar-link"><a href="index.html">Home</a></p>
            <p class="side-navbar-link"><a href="collection.html">Collections</a></p>
            <p class="side-navbar-link"><a href="contact.html">Contact</a></p>
        </div>
    </div>

    <h1 style="text-align: center; margin-top: 20px;">Welcome to Fashion Hub</h1>

    <div class="login">
        <h2 style="text-align: center; padding-bottom: 5px;">Login</h2>
        <form action="#">
            <input type="text" placeholder="Enter your email" class="Email" required><br><br>
            <input type="password" placeholder="Enter password" class="Password"><br><br>
            <a href="login.html">Sign in</a>
        </form>
    </div>

    <div class="signup">
        <h2 style="text-align: center; padding-bottom: 5px;">Sign Up</h2>
        <form action="signup.php" method="post">
            <input type="text" placeholder="Enter your name" name="name" required><br><br>
            <input type="email" placeholder="Enter your email" name="email" required><br><br>
            <input type="password" placeholder="Enter password" name="password" required><br><br>
            <button type="submit">Sign Up</button>
        </form>
    </div>

    <script src="index.js"></script>
</body>
</html>
