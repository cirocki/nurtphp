<?php
$pageTitle = 'NURT | Gdańsk IV';
$pageDescription = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut nobis dicta omnis repellat, voluptatem delectus. Corrupti deleniti ipsam expedita magnam ipsa molestias architecto, quia.';
include './components/head.php';
?>

<div class="page page-project">
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
                        <a href="/projekty.php">
                            <h1 class="page-title">PROJEKTY</h1>
                        </a>
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


                <div class="projectpage-section standard-section">
                    <div class="container-in">
                        <div class="project-header">
                            <p class="project-year">2022</p>
                            <p class="project-title">Gdańsk IV</p>
                        </div>
                        <div class="project-images">
                            <div class="line full">
                                <img src="/assets/img/projects/gdansk-4/gdansk-4-1.jpg" alt="Gdańsk IV zdjęcie wnętrza">
                            </div>
                            <div class="line double">
                                <img src="/assets/img/projects/gdansk-4/gdansk-4-2.jpg" alt="Gdańsk IV zdjęcie wnętrza">
                                <img src="/assets/img/projects/gdansk-4/gdansk-4-3.jpg" alt="Gdańsk IV zdjęcie wnętrza">

                            </div>
                            <div class="line full">
                                <img src="/assets/img/projects/gdansk-4/gdansk-4-1.jpg" alt="Gdańsk IV zdjęcie wnętrza">
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