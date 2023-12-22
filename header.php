<?php 
session_start();
// session_destroy();
if (isset($_GET['bg'])) {
    $_SESSION["theme_color"] = $_GET['bg'];
} 
$theme_color = $_SESSION["theme_color"]; ?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Erik Todd | Web Developer | Cleveland Ohio</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/slick.css" type="text/css" media="all">-->
    <link rel="stylesheet" href="assets/css/main.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all"> <?php
    if(isset($_SESSION["theme_color"])) { ?>
        <link rel="stylesheet" href="assets/css/<?php echo $theme_color; ?>.css" type="text/css" media="all"> <?php
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