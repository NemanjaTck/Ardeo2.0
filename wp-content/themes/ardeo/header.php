<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Ardeo Solutions</title>
    <?php wp_head(); ?>
</head>
<body id="home" <?php body_class(); ?> style="background-image: url('<?php wp_get_attachment_image_src( 46, 'full' )[0]; ?>'); background-repeat: repeat;">
    <nav class="js-navigation navigation">
        <ul class="navigation__menu">
            <li class="navigation__menu-item">
                <a href="#about-us" class="js-scrollTo navigation__menu-link">About us</a>
            </li>
            <li class="navigation__menu-item">
                <a href="#portfolio" class="js-scrollTo navigation__menu-link">Portfolio</a>
            </li>
        </ul>

        <a href="#home" class="js-scrollTo navigation__logo"></a>

        <ul class="navigation__menu">
            <li class="navigation__menu-item">
                <a href="#skills" class="js-scrollTo navigation__menu-link">Skills</a>
            </li>
            <li class="navigation__menu-item">
                <a href="#contact" class="js-scrollTo navigation__menu-link">Contact</a>
            </li>
        </ul>
    </nav>

    <nav class="js-navigationFixed navigation navigation--fixed hidden">
        <ul class="navigation__menu">
            <li class="navigation__menu-item">
                <a href="#about-us" class="js-scrollTo navigation__menu-link">About us</a>
            </li>
            <li class="navigation__menu-item">
                <a href="#portfolio" class="js-scrollTo navigation__menu-link">Portfolio</a>
            </li>
        </ul>

        <a href="#home" class="js-scrollTo navigation__logo"></a>

        <ul class="navigation__menu">
            <li class="navigation__menu-item">
                <a href="#skills" class="js-scrollTo navigation__menu-link">Skills</a>
            </li>
            <li class="navigation__menu-item">
                <a href="#contact" class="js-scrollTo navigation__menu-link">Contact</a>
            </li>
        </ul>
    </nav>

    <nav class="navigation navigation--fixed navigation--small">
        <span class="js-navigationToggle navigation__toggle"></span>
    </nav>

    <!-- TODO: Find icons on https://semantic-ui.com/elements/icon.html -->
    <div class="ui left vertical inverted sidebar labeled icon menu">
        <a class="item">
            <i class="home icon"></i>
            Home
        </a>
        <a class="item">
            <i class="block layout icon"></i>
            About us
        </a>
        <a class="item">
            <i class="smile icon"></i>
            Portfolio
        </a>
        <a class="item">
            <i class="smile icon"></i>
            Something
        </a>
        <a class="item">
            <i class="smile icon"></i>
            Contact
        </a>
    </div>

    <div class="pusher">
