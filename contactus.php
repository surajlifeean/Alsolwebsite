<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <title>Alsol Technology Solution Pvt. Ltd.</title>
    <link rel="icon" href="./Assets/Icons/Logo/LOGO-dark.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/contactus.css">
</head>

<body>
    <!-- header -->
    <nav id="navbar" style="border-radius: 0; transition: all .5s ease;"
        class="navbar navbar-expand-md navbar-light fixed-top">
        <div class="container" id="nav-container">
            <a class="navbar-brand" href="./index.php" aria-label="Logo">
                <div id="logo">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="nav-cont">
                    <ul class="nav-cont-ul ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="mailto:team@alsoltech.com"><i
                                    class="fas fa-envelope-open-text fa-lg me-2"></i> team@alsoltech.com</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://goo.gl/maps/tpZ81XduiSnH5GSR8"> <i
                                    class="fas fa-map-signs fa-lg me-2"></i> Kolkata, India</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="callto:9064286385"> <i class="fas fa-phone-alt fa-lg me-2"></i>
                                7980222011 / 9064286385</a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./aboutus.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./service.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- header -->
    <header style="text-align: center;" id="header">
        <div class="container-fluid">
            <div class="row header" style="z-index: 5;">
                <h1>Contact</h1>
            </div>
        </div>
    </header>


    <?php 
        if(isset($_SESSION['status'])){

            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <p class="text-center"><strong>Hey</strong> <?php echo ($_SESSION['status']); ?></p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            unset ($_SESSION['status']);
        }
    ?>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <i class="card-img-top fa fa-map-marker fa-4x text-center pt-2"></i>
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">India</h5>
                        <p class="card-text px-4">Shivalay Apartment, 3rd Floor, East Enclave bus Stand, near- Coal
                            Bhawan/
                            DLF 1, Kolkata- 700102<br><br>
                            <span class="text-danger">Tel: +91-9064286385 </span>
                        </p>
                        <button type="submit" class="bg_colored_btn w-100">Message Us</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact us -->

    <section id="form-container" style="position: relative;">
        <div id="form" class="container-fluid popUp">
            <div class="maps-g_map" style="display: flex; justify-content: center; align-items: center;">
                <iframe id="g_map"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14735.765239803522!2d88.4451506!3d22.5812983!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa3d163cd4913eb0b!2sAlsol%20Technology%20Solution%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1632404006361!5m2!1sen!2sin"
                    style="border:0" allowfullscreen="" loading="lazy">
                </iframe>
                <a title="Click To Expand" class="contact-btn" id="contact_btn"></a>
            </div>

            <div class="contact_form">
                <div class="text-center py-4">
                    <h1 class="contact-us-h1">Send Us Something</h1>
                    <h6 class="text-muted">We'd love to hear from you.</h6>
                </div>

                <form action="./php/contact.php" method="POST" id="contact_form" role="form">
                    <div class="mb-2">
                        <input id="name" name="name" type="text" placeholder="Enter Your Name" class="form-control"
                            required="">
                    </div>
                    <div class="mb-2">
                        <input id="email" name="emali" type="email" placeholder="Enter Your Email" class="form-control"
                            required="">
                    </div>
                    <div class="mb-4">
                        <textarea id="message" name="message" style="resize: none;" class="form-control"
                            placeholder="Enter Your Message" rows="5" required=""></textarea>
                    </div>
                    <div class="d-flex" style="align-items: center; justify-content: center;">
                        <button type="submit" class="hover-btn btn1 w-100">Send Massage</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer id="nav-bottom">

        <button class="p-2" onclick="topFunction()" id="myBtn" title="Go to top">
            <i class="fa fa-chevron-up"></i>
        </button>

        <!-- Footer -->
        <div class="footer hide" id="footer">
            <div class="footer-icon">
                <a class="btn btn-footer" id="footer-btn" title="Connect With Us">
                </a>
                <div class="icons">
                    <a href=" https://wa.me/9064286385" aria-labelledby="whatsApp" class="icon-name"
                        aria-label="WhatsApp">
                        <span><i class="fab fa-whatsapp" style="color: #25D366;"></i></span>
                    </a>
                    <a href="https://www.facebook.com/AlsolTech-102593158104879" aria-labelledby="facebook"
                        aria-label="Facebook" class="icon-name">
                        <span><i class="fab fa-facebook" style="color:#1778f2;"></i></span>
                    </a>
                    <a href="https://www.instagram.com/alsoltech/" class="icon-name" aria-labelledby="instagram"
                        aria-label="Instagram">
                        <span><i class="fab fa-instagram insta"></i></span>
                    </a>
                    <a href="https://twitter.com/AlsolTech?s=09" aria-labelledby="twitter" aria-label="Twitter"
                        class="icon-name">
                        <span><i class="fab fa-twitter" style="color:#00ACEE;"></i></span>
                    </a>
                    <a href="https://www.linkedin.com/company/68019635" aria-labelledby="linkedin" aria-label="Linkedin"
                        class="icon-name">
                        <span><i class="fab fa-linkedin" style="color: #0e76a8;"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <div class="pageloader">
        <svg id="png" viewBox="0 0 192 302" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="logo-light">
                <g id="sub">
                    <g id="opachity25">
                        <path id="Ellipse 7"
                            d="M115 13C129.359 13 141 24.6406 141 39C141 53.3594 129.359 65 115 65C104.184 65 94.9109 58.3958 90.9927 49L8.74228e-08 49L-7.86805e-07 29L90.9927 29C91.277 28.3182 91.5895 27.651 91.9288 27C96.2649 18.6804 104.969 13 115 13Z"
                            fill="#1A1A1A" fill-opacity="0.7" />
                        <circle id="Ellipse 3" cx="115" cy="39" r="15" transform="rotate(90 115 39)" fill="#138BCB"
                            fill-opacity="0.7" />
                    </g>
                    <g id="opachity25_2">
                        <path id="Ellipse 6"
                            d="M115 119C129.359 119 141 130.641 141 145C141 159.359 129.359 171 115 171C104.184 171 94.9109 164.396 90.9927 155L8.74228e-08 155L-7.86805e-07 135L90.9927 135C91.277 134.318 91.5895 133.651 91.9288 133C96.2649 124.68 104.969 119 115 119Z"
                            fill="#1A1A1A" fill-opacity="0.7" />
                        <circle id="Ellipse 1" cx="115" cy="145" r="15" transform="rotate(90 115 145)" fill="#138BCB"
                            fill-opacity="0.7" />
                    </g>
                    <g id="opachity25_3">
                        <path id="Ellipse 5"
                            d="M76.9999 118C62.6405 118 50.9999 106.359 50.9999 92C50.9999 77.6406 62.6405 66 76.9999 66C87.8157 66 97.089 72.6042 101.007 82L192 82V102L101.007 102C100.723 102.682 100.41 103.349 100.071 104C95.7349 112.32 87.0308 118 76.9999 118Z"
                            fill="#1A1A1A" fill-opacity="0.7" />
                        <circle id="Ellipse 2" cx="76.9999" cy="92" r="15" transform="rotate(90 76.9999 92)"
                            fill="#138BCB" fill-opacity="0.7" />
                    </g>
                </g>
                <g id="main">
                    <g id="left">
                        <g id="bar-left" filter="url(#filter0_i)">
                            <path
                                d="M17 77C17 62.6406 28.6406 51 43 51C57.3594 51 69 62.6406 69 77C69 87.8158 62.3958 97.0891 53 101.007L53 192L33 192L33 101.007C32.3181 100.723 31.651 100.41 31 100.071C22.6804 95.7351 17 87.0309 17 77Z"
                                fill="#138BCB" />
                        </g>
                        <circle id="orange" cx="42" cy="77" r="15" fill="#F46C0F" />
                    </g>
                    <g id="center">
                        <g id="bar-center" filter="url(#filter1_i)">
                            <path
                                d="M121 115C121 129.359 109.359 141 95 141C80.6406 141 69 129.359 69 115C69 104.184 75.6042 94.9109 85 90.9927L85 8.74228e-08L105 -7.86805e-07L105 90.9927C105.682 91.277 106.349 91.5895 107 91.9288C115.32 96.2649 121 104.969 121 115Z"
                                fill="#138BCB" />
                        </g>
                        <circle id="white" cx="95" cy="115" r="15" fill="#FCFCFC" />
                    </g>
                    <g id="right">
                        <g id="bar-right" filter="url(#filter2_i)">
                            <path
                                d="M122 77C122 62.6406 133.641 51 148 51C162.359 51 174 62.6406 174 77C174 87.8158 167.396 97.0891 158 101.007L158 192L138 192L138 101.007C137.318 100.723 136.651 100.41 136 100.071C127.68 95.7351 122 87.0309 122 77Z"
                                fill="#138BCB" />
                        </g>
                        <circle id="green" cx="148" cy="77" r="15" fill="#60E20C" />
                    </g>
                </g>
                <g id="TECH">
                    <path d="M78.175 275.45V278.875H73.525V293H69.25V278.875H64.6V275.45H78.175Z" fill="black" />
                    <path
                        d="M85.525 278.875V282.425H91.25V285.725H85.525V289.575H92V293H81.25V275.45H92V278.875H85.525Z"
                        fill="black" />
                    <path
                        d="M95.85 284.4C95.85 282.667 96.225 281.125 96.975 279.775C97.725 278.408 98.7667 277.35 100.1 276.6C101.45 275.833 102.975 275.45 104.675 275.45C106.758 275.45 108.542 276 110.025 277.1C111.508 278.2 112.5 279.7 113 281.6H108.3C107.95 280.867 107.45 280.308 106.8 279.925C106.167 279.542 105.442 279.35 104.625 279.35C103.308 279.35 102.242 279.808 101.425 280.725C100.608 281.642 100.2 282.867 100.2 284.4C100.2 285.933 100.608 287.158 101.425 288.075C102.242 288.992 103.308 289.45 104.625 289.45C105.442 289.45 106.167 289.258 106.8 288.875C107.45 288.492 107.95 287.933 108.3 287.2H113C112.5 289.1 111.508 290.6 110.025 291.7C108.542 292.783 106.758 293.325 104.675 293.325C102.975 293.325 101.45 292.95 100.1 292.2C98.7667 291.433 97.725 290.375 96.975 289.025C96.225 287.675 95.85 286.133 95.85 284.4Z"
                        fill="black" />
                    <path
                        d="M130.226 275.45V293H125.951V285.775H119.301V293H115.026V275.45H119.301V282.325H125.951V275.45H130.226Z"
                        fill="black" />
                </g>
                <g id="text">
                    <g id="A" filter="url(#filter3_i)">
                        <path
                            d="M31.942 237.808H16.746L14.31 245H3.928L18.66 204.284H30.144L44.876 245H34.378L31.942 237.808ZM29.39 230.152L24.344 215.246L19.356 230.152H29.39Z"
                            fill="#148CCB" />
                    </g>
                    <g id="L" filter="url(#filter4_i)">
                        <path d="M175.514 236.344H188.506V244H165.596V203.284H175.514V236.344Z" fill="#138BCB" />
                    </g>
                    <g id="L_2" filter="url(#filter5_i)">
                        <path d="M59.514 256.344H72.506V264H49.596V223.284H59.514V256.344Z" fill="#138BCB" />
                    </g>
                    <g id="S" filter="url(#filter6_i)">
                        <path
                            d="M96.328 245.406C93.3507 245.406 90.6827 244.923 88.324 243.956C85.9653 242.989 84.0707 241.559 82.64 239.664C81.248 237.769 80.5133 235.488 80.436 232.82H90.992C91.1467 234.328 91.6687 235.488 92.558 236.3C93.4473 237.073 94.6073 237.46 96.038 237.46C97.5073 237.46 98.6673 237.131 99.518 236.474C100.369 235.778 100.794 234.831 100.794 233.632C100.794 232.627 100.446 231.795 99.75 231.138C99.0927 230.481 98.2613 229.939 97.256 229.514C96.2893 229.089 94.8973 228.605 93.08 228.064C90.4507 227.252 88.3047 226.44 86.642 225.628C84.9793 224.816 83.5487 223.617 82.35 222.032C81.1513 220.447 80.552 218.378 80.552 215.826C80.552 212.037 81.9247 209.079 84.67 206.952C87.4153 204.787 90.992 203.704 95.4 203.704C99.8853 203.704 103.501 204.787 106.246 206.952C108.991 209.079 110.461 212.056 110.654 215.884H99.924C99.8467 214.569 99.3633 213.545 98.474 212.81C97.5847 212.037 96.444 211.65 95.052 211.65C93.8533 211.65 92.8867 211.979 92.152 212.636C91.4173 213.255 91.05 214.163 91.05 215.362C91.05 216.677 91.6687 217.701 92.906 218.436C94.1433 219.171 96.0767 219.963 98.706 220.814C101.335 221.703 103.462 222.554 105.086 223.366C106.749 224.178 108.179 225.357 109.378 226.904C110.577 228.451 111.176 230.442 111.176 232.878C111.176 235.198 110.577 237.305 109.378 239.2C108.218 241.095 106.517 242.603 104.274 243.724C102.031 244.845 99.3827 245.406 96.328 245.406Z"
                            fill="#138BCB" />
                    </g>
                    <g id="O" filter="url(#filter7_i)">
                        <path
                            d="M137.852 264.406C134.024 264.406 130.505 263.517 127.296 261.738C124.125 259.959 121.593 257.485 119.698 254.314C117.842 251.105 116.914 247.509 116.914 243.526C116.914 239.543 117.842 235.967 119.698 232.796C121.593 229.625 124.125 227.151 127.296 225.372C130.505 223.593 134.024 222.704 137.852 222.704C141.68 222.704 145.179 223.593 148.35 225.372C151.559 227.151 154.073 229.625 155.89 232.796C157.746 235.967 158.674 239.543 158.674 243.526C158.674 247.509 157.746 251.105 155.89 254.314C154.034 257.485 151.521 259.959 148.35 261.738C145.179 263.517 141.68 264.406 137.852 264.406ZM137.852 255.358C141.1 255.358 143.691 254.275 145.624 252.11C147.596 249.945 148.582 247.083 148.582 243.526C148.582 239.93 147.596 237.069 145.624 234.942C143.691 232.777 141.1 231.694 137.852 231.694C134.565 231.694 131.936 232.757 129.964 234.884C128.031 237.011 127.064 239.891 127.064 243.526C127.064 247.122 128.031 250.003 129.964 252.168C131.936 254.295 134.565 255.358 137.852 255.358Z"
                            fill="#138BCB" />
                    </g>
                </g>
            </g>
            <defs>
                <filter id="filter0_i" x="15" y="51" width="54" height="141" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="-2" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow" />
                </filter>
                <filter id="filter1_i" x="67" y="0" width="54" height="141" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="-2" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow" />
                </filter>
                <filter id="filter2_i" x="120" y="51" width="54" height="141" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="-2" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow" />
                </filter>
                <filter id="filter3_i" x="1.92798" y="204.284" width="42.948" height="40.716"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="-2" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow" />
                </filter>
                <filter id="filter4_i" x="163.596" y="203.284" width="24.91" height="40.716"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="-2" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow" />
                </filter>
                <filter id="filter5_i" x="47.596" y="223.284" width="24.91" height="40.716" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="-2" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow" />
                </filter>
                <filter id="filter6_i" x="78.436" y="203.704" width="32.74" height="41.702" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="-2" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow" />
                </filter>
                <filter id="filter7_i" x="114.914" y="222.704" width="43.76" height="41.702"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="-2" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow" />
                </filter>
            </defs>
        </svg>
    </div>


    <!-- Java Scripts -->
    <script src="https://kit.fontawesome.com/c932ce0340.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="./js/index.js"></script>
    <script type="text/javascript">
        // -----------------

        document.getElementById("contact_btn").addEventListener("click", function () {
            document.getElementById("form").classList.toggle("popUp");
        });
    </script>
</body>

</html>