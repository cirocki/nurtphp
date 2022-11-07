<?php
$pageTitle = 'NURT | O mnie';
$pageDescription = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut nobis dicta omnis repellat, voluptatem delectus. Corrupti deleniti ipsam expedita magnam ipsa molestias architecto, quia.';
include './components/head.php';
?>

<div class="page page-about">
    <div class="container">
        <div class="page-grid">

            <aside>
                <div class="aside-content">
                    <div class="top">
                        <p>STUDIO</p>
                    </div>
                    <div class="mid">
                        <h1 class="page-title">O mnie</h1>
                    </div>
                    <div class="bot">
                        <span class="icon-logodark"></span>
                    </div>
                </div>
            </aside>

            <main>
                <?php include './components/header.php'; ?>


                <div class="about-section standard-section">
                    <div class="container-in">
                        <!-- ONE  -->
                        <div class="part-one">
                            <div class="part-one__grid">
                                <div class="content-wrapper">
                                    <h1>Justyna Marczak</h1>
                                    <h2>Tworzę wnętrza skrojone na miarę mieszkańców, nie zawsze ściśle podążające za modą, zawsze spójne z klientem.</h2>
                                </div>
                                <div class="image-wrapper">
                                    <div class="filter-image">
                                        <img src="./assets/img/about/nurt-omnie-1.jpg" alt="Projektowanie wnętrz - Justyna Marczak">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ONE END -->


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