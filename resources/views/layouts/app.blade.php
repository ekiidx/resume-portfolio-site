<?php 
session_start();
// session_destroy();
if (isset($_GET['bg'])) {
    $_SESSION["theme_color"] = $_GET['bg'];
} 
if (isset($_SESSION["theme_color"])) {
    $theme_color = $_SESSION["theme_color"];
} ?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Erik Todd | Web Developer | Cleveland Ohio | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#9013fe">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Search Engine -->
    <meta name="author" content="Vue Design">
    <meta name="description" content="Hello, I'm an experienced designer, developer, and project manager, located in Cleveland, Ohio. I like to think about websites and how to build them. Professionally skilled in Adobe Suite, Figma, HTML, CSS, PHP, C#, JavaScript, .NET, WordPress, Laravel, and Docker.">
    <meta name="image" content="https://eriktodd.me/website-preview.jpg">
    <meta name="keywords" content="">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="Erik Todd | Web Developer | Cleveland Ohio">
    <meta itemprop="description" content="Hello, I'm an experienced designer, developer, and project manager, located in Cleveland, Ohio. I like to think about websites and how to build them. Professionally skilled in Adobe Suite, Figma, HTML, CSS, PHP, C#, JavaScript, .NET, WordPress, Laravel, and Docker.">
    <meta itemprop="image" content="website-preview.jpg">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Erik Todd | Web Developer | Cleveland Ohio">
    <meta name="og:description" content="Hello, I'm an experienced designer, developer, and project manager, located in Cleveland, Ohio. I like to think about websites and how to build them. Professionally skilled in Adobe Suite, Figma, HTML, CSS, PHP, C#, JavaScript, .NET, WordPress, Laravel, and Docker.">
    <!--<meta name="og:image" content="https://eriktodd.me/website-preview-fb.jpg">-->
    <meta name="og:url" content="https://eriktodd.me">
    <meta name="og:site_name" content="Erik Todd | Web Developer | Cleveland Ohio">
    <meta name="og:locale" content="en_US">
    <meta name="og:type" content="website">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:image:alt" content="Resume portfolio website thumbnail">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Erik Todd">
    <meta name="twitter:description" content="">
    <!--<meta name="twitter:site" content="@yourusername">-->
    <meta name="twitter:image" content="">
    <!--<meta name="twitter:creator" content="@yourusername">-->
    <link rel="canonical" href=""> 
    <meta property="og:title" content="Erik Todd">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- STYLESHEETS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/slick.css" type="text/css" media="all">-->
    <link rel="stylesheet" href="/assets/css/main.css" type="text/css" media="all">
    <link rel="stylesheet" href="/assets/css/responsive.css" type="text/css" media="all"> <?php
    if(isset($_SESSION["theme_color"])) { ?>
        <link rel="stylesheet" href="/assets/css/<?php echo $theme_color; ?>.css" type="text/css" media="all"> <?php
    } ?>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--
     _   __           ___          _
    | | / /_ _____   / _ \___ ___ (_)__ ____
    | |/ / // / -_) / // / -_|_-</ / _ `/ _ \
    |___/\_,_/\__/ /____/\__/___/_/\_, /_//_/
                                  /___/
    -->

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-xl-3 sidebar">

                <header>
                    <a href="/"><img src="/assets/img/erik-todd.jpg" alt="" class="circle profile-photo"></a>
                    <a href="/"><span class="profile-name text-uppercase">Erik Todd</span></a>
                
                    <nav>
                        <ul id="navbar" role="tablist">
                            <li class="text-uppercase"><a href="/#home">Home</a></li>
                            <li class="text-uppercase"><a href="/#skills">Skills</a></li>
                            <li class="text-uppercase"><a href="/#experience">Experience</a></li>
                            <li class="text-uppercase"><a href="/#projects">Projects</a></li>
                            <li class="text-uppercase"><a href="/#contact">Contact</a></li>
                            <li class="text-uppercase"><a href="#">Resume</a></li>
                        </ul>
                    </nav>
                    <footer class="footer-top social-icons">
              
                        <ul>
                            <li class="social-icon">
                                <a href="https://linkedin.com/in/erik-todd">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path class="fill" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a></li>
                
                            <li class="social-icon">
                                <a href="https://github.com/ekiidx">
                
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 98 96" style="enable-background:new 0 0 98 96;" xml:space="preserve">
                                        <style type="text/css">
                                            .st0{fill-rule:evenodd;clip-rule:evenodd;}
                                        </style>
                                        <path class="st0" d="M48.9,0C21.8,0,0,22,0,49.2C0,71,14,89.4,33.4,95.9c2.4,0.5,3.3-1.1,3.3-2.4c0-1.1-0.1-5.1-0.1-9.1
                                            c-13.6,2.9-16.4-5.9-16.4-5.9c-2.2-5.7-5.4-7.2-5.4-7.2c-4.4-3,0.3-3,0.3-3c4.9,0.3,7.5,5.1,7.5,5.1c4.4,7.5,11.4,5.4,14.2,4.1
                                            c0.4-3.2,1.7-5.4,3.1-6.6c-10.8-1.1-22.2-5.4-22.2-24.3c0-5.4,1.9-9.8,5-13.2c-0.5-1.2-2.2-6.3,0.5-13c0,0,4.1-1.3,13.4,5.1
                                            c4-1.1,8.1-1.6,12.2-1.6c4.1,0,8.3,0.6,12.2,1.6c9.3-6.4,13.4-5.1,13.4-5.1c2.7,6.8,1,11.8,0.5,13c3.2,3.4,5,7.8,5,13.2
                                            c0,18.9-11.4,23.1-22.3,24.3c1.8,1.5,3.3,4.5,3.3,9.1c0,6.6-0.1,11.9-0.1,13.5c0,1.3,0.9,2.9,3.3,2.4C83.6,89.4,97.6,71,97.6,49.2
                                            C97.7,22,75.8,0,48.9,0z"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                
                
                   
                        <span class="copyright">© <?php echo date('Y'); ?> Erik Todd</span>
                    </footer>

                    <div class="theme-selector theme-selector-mobile">
                        <ul>
                            <li class="dark"><a href="?bg=dark"></a></li>
                            <li class="light"><a href="?bg=light"></a></li>
                            <li class="orange"><a href="?bg=orange"></a></li>
                            <li class="green"><a href="?bg=green"></a></li>
                        </ul>
                    </div>

                </header>
            </div>

            <div class="main col-lg-10 col-xl-9" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-smooth-scroll="true" tabindex="0">

                <div class="theme-selector theme-selector-desktop">
                    <ul>
                        <li class="dark"><a href="?bg=dark"></a></li>
                        <li class="light"><a href="?bg=light"></a></li>
                        <li class="orange"><a href="?bg=orange"></a></li>
                        <li class="green"><a href="?bg=green"></a></li>
                    </ul>
                </div>

                @yield('content')
            </div>
        </div>
    </div>

    <footer class="footer-bottom">
        <span class="copyright">© <?php echo date('Y'); ?> Erik Todd</span>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>