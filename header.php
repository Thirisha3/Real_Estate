<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Right Choice Marketing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="images/logo/logo.png">

</head>


<body>
    <header>
        <div class="nav-container">

            <!-- Logo -->
            <div class="logo">
                <a href="index.php" class="logo-wrapper">
                    <img src="images/logo/logo.png" alt="Right Choice Marketing Logo">
                </a>
            </div>

            <!-- Navigation -->
            <nav>
                <ul class="nav-menu" id="navMenu">

                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>

                    <li class="custom-dropdown">
                        <a href="#">Properties ▾</a>
                        <ul class="custom-dropdown-menu">
                            <li><a href="apartment.php">Apartment</a></li>
                            <li><a href="plot.php">Plot</a></li>
                            <li><a href="villa.php">Villa</a></li>
                        </ul>
                    </li>

                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact Us</a></li>

                </ul>
            </nav>

            <!-- Hamburger -->
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>
    </header>
    <!-- Floating Buttons -->
    <div class="floating-buttons">

        <!-- WhatsApp -->
        <a href="https://wa.me/8668120275?text=Hello! I am interested in your property."
            target="_blank"
            class="float-btn whatsapp">
            <i class="fab fa-whatsapp"></i>
        </a>

        <!-- Call -->
        <a href="tel:+918668120275" class="float-btn call">
            <i class="fas fa-phone-alt"></i>
        </a>

    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>