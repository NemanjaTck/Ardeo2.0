<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Ardeo Solutions</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <nav class="js-navigation navigation">
        <ul class="navigation__menu">
            <li class="navigation__menu-item">
                <a href="#" class="navigation__menu-link">About us</a>
            </li>
            <li class="navigation__menu-item">
                <a href="#" class="navigation__menu-link">Portfolio</a>
            </li>
        </ul>

        <div class="navigation__logo"></div>

        <ul class="navigation__menu">
            <li class="navigation__menu-item">
                <a href="#" class="navigation__menu-link">Something</a>
            </li>
            <li class="navigation__menu-item">
                <a href="#" class="navigation__menu-link">Contact</a>
            </li>
        </ul>
    </nav>

    <nav class="js-navigationFixed navigation navigation--fixed hidden">
        <ul class="navigation__menu">
            <li class="navigation__menu-item">
                <a href="#" class="navigation__menu-link">About us</a>
            </li>
            <li class="navigation__menu-item">
                <a href="#" class="navigation__menu-link">Portfolio</a>
            </li>
        </ul>

        <div class="navigation__logo"></div>

        <ul class="navigation__menu">
            <li class="navigation__menu-item">
                <a href="#" class="navigation__menu-link">Something</a>
            </li>
            <li class="navigation__menu-item">
                <a href="#" class="navigation__menu-link">Contact</a>
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
