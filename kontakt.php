<?php
$pageTitle = 'NURT | Kontakt';
$pageDescription = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut nobis dicta omnis repellat, voluptatem delectus. Corrupti deleniti ipsam expedita magnam ipsa molestias architecto, quia.';
include './components/head.php';
?>

<div class="page page-contact">
    <div class="container">
        <div class="page-grid">

            <aside>
                <div class="aside-content">
                    <div class="top">
                        <a href="/">
                            STUDIO
                        </a>
                    </div>
                    <div class="mid">
                        <h1 class="page-title">Kontakt</h1>
                    </div>
                    <div class="bot">
                        <a href="/">
                            <span class="icon-logodark"></span>
                        </a>
                    </div>
                </div>
            </aside>

            <main>
                <?php include './components/header.php'; ?>


                <div class="contact-section standard-section">
                    <div class="container-in">
                        <div class="contact-grid">
                            <div class="left-part">
                                <address>
                                    <div class="group">
                                        <a href="mailto:hello@nurt.studio">hello@nurt.studio</a>
                                        <a href="tel:+48600366061">+48 600 366 061</a>
                                    </div>
                                    <div class="group">
                                        <a href="https://www.facebook.com/nurt/" target="_blank" rel="noopener noreferrer">FB  facebook.com/nurt.studio</a>
                                        <a href="https://www.instagram.com/nurt.studio/" target="_blank" rel="noopener noreferrer">IG  nurt.studio</a>
                                    </div>
                                    <div class="group">
                                        <p>ul. L. Kaczyńskiego 20p.5, 80-365 Gdańsk</p>
                                        <p>NIP  5842819298</p>
                                        <p>REGON  522296918</p>
                                    </div>
                                </address>
                                <div class="heading-wrappers">
                                    <h1 class="heading">Zanim zacznę projektowanie Twojego wnętrza zapraszam Cię na
                                        spotkanie.</h1>
                                </div>

                            </div>
                            <div class="right-part">
                                <div class="filter-image">
                                    <img src="./assets/img/contact/nurt-kontakt.jpg"
                                        alt="Projektowanie wnętrz - Justyna Marczak">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </main>

        </div>
        <div class="page-bot">
            <div class="page-grid">
                <div class="bot__aside">

                </div>
                <div class="bot__main">
                    <!-- REVIEWS  -->
                    <?php include './components/reviews.php'; ?>
                    <!-- REVIEWS END -->
                    <!-- FOOTER  -->
                    <?php include './components/footer.php'; ?>
                    <!-- FOOTER END -->
                </div>
            </div>
        </div>
    </div>
</div>