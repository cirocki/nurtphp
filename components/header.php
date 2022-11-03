<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="pl-PL">
<!-- HEADER  -->
<header class="main-header">
    <!-- <div class="container"> -->
    <div class="menu-wrapper">
        <div class="top-part">
            <div class="container-in">
                <div class="top-content-wrapper">
                    <div class="branding-wrapper">
                        <a class="logo" href="/">
                            <span class="icon-logodark"></span>
                        </a>
                    </div>
                    <div class="hamburger-wrapper">
                        <div id="navbar-toggler" aria-expanded="false" aria-label="Toggle navigation"
                            class="hamburger hamburger--spin js-hamburger ">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bot-part">
            <div class="container-in">
                <nav class="nav-primary">
                    <div class="menu-primary-menu-container">
                        <ul id="menu-primary-menu" class="menu">
                            <li class="menu-item <?= ($activePage == 'menu') ? 'active' : ''; ?>">
                                <a href="/projekty">Projekty</a>
                            </li>
                            <li class="menu-item <?= ($activePage == 'o-restauracji') ? 'active' : ''; ?>">
                                <a href="/oferta">Oferta</a>
                            </li>
                            <li class="menu-item <?= ($activePage == 'oferta') ? 'active' : ''; ?>"><a href="/o-mnie">O
                                    mnie</a></li>
                            <li class="menu-item <?= ($activePage == 'kontakt') ? 'active' : ''; ?>"><a
                                    href="/pytania-odpowiedzi">Q&A</a></li>
                            <li class="menu-item <?= ($activePage == 'kontakt') ? 'active' : ''; ?>"><a
                                    href="/kontakt">Kontakt</a></li>
                        </ul>
                        <ul id="menu-social-menu" class="menu">
                            <li class="menu-item "><a href="#instagram">IG</a></li>
                            <li class="menu-item "><a href="#facebook">FB</a></li>
                        </ul>
                        <ul id="mobile-social-menu" class="menu">
                            <li class="menu-item "><a href="tel:+48600366061">+48 600366061</a></li>
                            <li class="menu-item "><a href="#facebook">FB facebook.com/nurt.studio</a></li>
                            <li class="menu-item"><a href="#instagram">IG nurt.studio</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- </div> -->
</header>
<!-- / HEADER  -->